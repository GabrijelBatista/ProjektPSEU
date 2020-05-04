<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FileModel3;
use App\FileModel4;

class ZavrsniController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function zavfunc(){
            $downloads=FileModel3::get()->all();
            return view('/prihvacenizavrsni',compact('downloads'));
    }

    public function zavfunc2(){
        $downloads=FileModel4::get()->all();
        return view('/odbijenizavrsni',compact('downloads'));
}

}
