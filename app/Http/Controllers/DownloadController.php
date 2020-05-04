<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FileModel;
use App\FileModel3;
use App\FileModel4;


class DownloadController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function downfunc(){

                $downloads=FileModel::get()->all();
                return view('viewfile',compact('downloads'));

}

    public function destroy($id){

            
            $downloads = FileModel::find($id);
            $downloads2= FileModel::where('id', $id)->get();
        
            $ime_i_prezime = $downloads->ime_i_prezime;
            $broj_indeksa = $downloads->broj_indeksa;
            $email = $downloads->email;
            $tema = $downloads->tema;
            $mentor = $downloads->mentor;
            $prijava = $downloads->prijava;
            $obrana = $downloads->obrana;
            $file_name = $downloads->file_name;
        
            $_Order = new FileModel3();
            $_Order->ime_i_prezime = $ime_i_prezime;
            $_Order->broj_indeksa = $broj_indeksa;
            $_Order->email = $email;
            $_Order->tema = $tema;
            $_Order->mentor = $mentor;
            $_Order->prijava = $prijava;
            $_Order->obrana = $obrana;
            $_Order->file_name = $file_name;
            $_Order->save();
        
            $downloads2 = array();
            foreach($downloads2 as $down => $downloads2)
            {
                $downloads2[$down] = (new FileModel3())->forceCreate($downloads2->only(['ime_i_prezime', 'broj_indeksa', 'email', 'tema', 'mentor','prijava','obrana', 'file_name']));
            }

                
                $downloads->delete();
                return back();

}

public function destroy2($id){

    //$downloads = FileModel::findOrFail($id);
    $downloads = FileModel::find($id);
    $downloads2= FileModel::where('id', $id)->get();

    $ime_i_prezime = $downloads->ime_i_prezime;
    $broj_indeksa = $downloads->broj_indeksa;
    $email = $downloads->email;
    $tema = $downloads->tema;
    $mentor = $downloads->mentor;
    $prijava = $downloads->prijava;
    $obrana = $downloads->obrana;
    $file_name = $downloads->file_name;

    $_Order = new FileModel4();
    $_Order->ime_i_prezime = $ime_i_prezime;
    $_Order->broj_indeksa = $broj_indeksa;
    $_Order->email = $email;
    $_Order->tema = $tema;
    $_Order->mentor = $mentor;
    $_Order->prijava = $prijava;
    $_Order->obrana = $obrana;
    $_Order->file_name = $file_name;
    $_Order->save();

    $downloads2 = array();
    foreach($downloads2 as $down => $downloads2)
    {
        $downloads2[$down] = (new FileModel4())->forceCreate($downloads2->only(['ime_i_prezime', 'broj_indeksa', 'email', 'tema', 'mentor','prijava','obrana', 'file_name']));
    }

        $file_path = public_path().'\dodatak/'.$downloads['file_name'];
        unlink($file_path);
        $downloads->delete();
        return back();

}

}