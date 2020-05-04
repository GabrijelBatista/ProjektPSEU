<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class ProfileController extends Controller
{


public function index()
{
    return view('usersprofile.index');
}

public function update(Request $request, $id) {
    $user = User::findOrFail($id);
    $user->name = $request->get('name');
    $user->email = $request->get('email');
    $user->save();
    return redirect('users')->with('status', 'Promjene spremljene!');
}
}