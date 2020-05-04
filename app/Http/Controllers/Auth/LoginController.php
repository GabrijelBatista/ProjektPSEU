<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use app\User;
use Auth;
use Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function login(Request $request){

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            $user = User::where('email', $request->email)->first();
            if($user->is_admin())
            {
                return redirect()->route('Dashboard');
            }
            return redirect()->route('Home');

    }
    $messages = [
        "email.required" => "Email is required",
        "email.email" => "Email is not valid",
        "password.password" => "Password is not valid",
        "password.required" => "Password is required",
        "password.min" => "Password must be at least 6 characters"
    ];

    // validate the form data
    $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|exists:users,password',
        ], $messages);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    } else {
        // attempt to log
        if (Auth::attempt(['approve' => '1', 'email' => $request->email, 'password' => $request->password ], $request->remember)) {
            // if successful -> redirect forward
            return redirect()->intended(route('home'));
        }

        // if unsuccessful -> redirect back
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'approve' => 'Wrong password or this account not approved yet.',
        ]);
    }

    
}
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
