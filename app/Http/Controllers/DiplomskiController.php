<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FileModel5;
use App\FileModel6;


class DiplomskiController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dipfunc(){
            $downloads=FileModel5::get()->all();
            return view('/prihvacenidiplomski',compact('downloads'));
    }

    public function dipfunc2(){
        $downloads=FileModel6::get()->all();
        return view('/odbijenidiplomski',compact('downloads'));
}

}
