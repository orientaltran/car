<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input,File;

class UploadFileController extends Controller
{
    //
    public function getAddFile() 
    {
    	return view('uploadfile.upload');
    }

    public function postAddFile(UploadFileRequest $request)  
    {
    	$file_name = $request->file('uploadfile')->getClientOriginalName();
    	$uploadfile = new UploadFile();
    	$uploadfile->file = $file_name;
    	$request->file('uploadfile')->move('resource/upload', $file_name);
    	$uploadfile->save();
    	echo "Add successfull!";
    }
}
