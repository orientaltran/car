<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\UploadFile;

class MyController extends Controller
{
    //php artisan make:controller MyController
    public function helloLaravel() 
    {
    	return "Hello Laravel";
    }

    public function course($name)
    {
    	echo "Name of course:" .$name;
    	return redirect()->route('myroute1');
    }

    public function getUrl(Request $request) 
    {
    	// return $request->path();
    	//return $request->url();
    	// if ($request->isMeThod('get')) {
    	// 	echo "GET";
    	// } else {
    	// 	echo "POSt";
    	// }
    	if( $request->is('my*')) {
    		echo "true";
    	} else {
    		echo "false";
    	}
    }

    public function postForm(Request $request)  
    {
    	echo $request->name;
    }

    public function setCookie() 
    {
        $response = new Response();
        $response->withCookie(
             'name',//name cookie
             'oriental',//value cookie
             1 //minutes-phut
            );
        echo "SetCookies";
        return $response;
    }

    public function getCookie(Request $request)  
    {   
        echo "Cookie name: ";
        return $request->cookie('name');
    }

    public function postFile(Request $request) 
    {
    	if ($request->hasFile('myfile')) {
    		echo "have file";
    	} else {
    		echo "no file";
    	}
    }

    public function modelGet()
    {
        $all = UploadFile::all(); //get all data model
        //print_r($all);

        $model = UploadFile::find(1);
        //print_r($model);

        $where = UploadFile::where('id', 2)->get();
        //print_r($where);

        $select = UploadFile::select('id', 'file')->get();
        //print_r($select);

        $count = UploadFile::all()->count();
        //print_r($count);
        //new record
        // $upload = new UploadFile();
        // $upload->file = 'model.jpg';
        // $upload->save();

        //updated record
        //$upload = UploadFile::find(1);
        //$upload->file = 'model1.jpg';
        //$upload->save();

        //UploadFile::where('id', 1)->update(['file' => 'model2.png']);

        //delete record
        //$delete = Uploadfile::find(3);
        //$delete->delete();
        //UploadFile::destroy(2);
        //UploadFile::where('id', 1)->delete();

    }
}
