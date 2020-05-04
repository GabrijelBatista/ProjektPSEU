<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Session;
use Redirect;
use App\FileModel;


class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getView(){
    	return view('uploadfile');
    }

    public function insertFile2($id){
        $obrana=Input::get('obrana');
        FileModel::where('id', $id)->update(array('obrana' => $obrana));

        return Redirect::to('viewfile');
    }

    public function insertFile3($id){
        $obrana=Input::get('obrana');
        FileModel2::where('id', $id)->update(array('obrana' => $obrana));

        return Redirect::to('viewfile2');
    }


    public function insertFile(){


        $imeiprezime=Input::get('ime_i_prezime');
        $brojindeksa=Input::get('broj_indeksa');
        $email=Input::get('email');
        $tema=Input::get('tema');
        $mentor=Input::get('mentor');
        $file= Input::file('filename');


    	$rules = array(
            'ime_i_prezime' => 'required',
            'broj_indeksa' => 'required',
            'email' => 'required',
            'tema' => 'required',
            'mentor' => 'required',
            'filename' => 'required|max:10000|mimes:doc,docx'
            ); 

    	// 'image' => 'required|mimes:jpeg,png,jpg,gif,svg,csv,xls,xlsx,doc,docx|m‌​ax:2048'



        // do the validation ----------------------------------
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);

		  if ($validator->fails()) {

            // redirect our user back with error messages       
            $messages = $validator->messages();
		    // send back to the page with the input data and errors
		    return Redirect::to('uploadfile')->withInput()->withErrors($validator);

		  }else if ($validator->passes()){

		    // checking file is valid.
		    if (Input::file('filename')->isValid()) {

            $extension = Input::file('filename')->getClientOriginalExtension();
		    $filename = rand(11111,99999).'.'.$extension; // preimenovati file
            




		  // uploading file to given path

		    	//$destinationPath = '../uploads';//its refers proj/uploads
                $destinationPath = 'dodatak';//direktorij za spremanje file-a


                $data=array(
                    'ime_i_prezime' => $imeiprezime,
                    'broj_indeksa' => $brojindeksa,
                    'email' => $email,
                    'tema' => $tema,
                    'mentor' => $mentor,
                    'file_name' => $filename,
                );


                FileModel::insert($data);


                $upload_success = $file->move($destinationPath, $filename);
                $notification = array(
                    'message' => 'Poslano!', 
                    'alert-type' => 'success'
                );

                return Redirect::to('uploadfile')->with($notification);

       
		    }
		    else {
		      // sending back with error message.
		      

                $notification = array(
                        'message' => 'Uploaded file is not valid!', 
                        'alert-type' => 'error'
                    );

                return Redirect::to('uploadfile')->with($notification);
		    }
  		}



    }
}

