<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
}
