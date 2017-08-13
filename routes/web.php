<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/learning', function() {
	return "learning laravel";
});

Route::get('/learning/route', function() {
	echo "<h1>Learning route laravel</h1>";
});

/*Truyen tham so*/
Route::get('/learning/{d}', function($d) {
	echo "Date learning laravel: " .$d;
});

Route::get('/laravel/{v}', function($v) {
	echo "Laravel:".$v;
})->where(['v' =>'[1-5]']);

/*dinh danh cho 1 route*/
Route::get('/route1', ['as'=>'myroute1' ,function() {
	echo "route 1";
}]);

Route::get('/route2', function() {
	echo "route 2";
})->name('myroute2');

Route::get('/callroute', function() {
	return redirect()->route('myroute2');
});

/*Group route domain/mygroup/user1/*/
Route::group(['prefix' => 'mygroup'], function(){
	Route::get('/user1', function(){
		return "user1";
	});

	Route::get("/user2", function(){
		return "user2";
	});

	Route::get("/user3", function(){
		return "user3";
	});
});

/*Call Controller*/
Route::get('/mycontroller', 'MyController@helloLaravel');

Route::get('/course/{name}', 'MyController@course');

/*URL*/
Route::get('/myrequest', 'MyController@getUrl');

//send data width request
Route::get('/getform', function() {
	return view('postform');
});

Route::post('postform', ['as' => 'postform', 'uses' => 'MyController@postForm']);

//cookies
Route::get('setcookie', 'MyController@setCookie');

Route::get('getcookie', 'MyController@getCookie');

//upload file
// Route::get('uploadfile', function() {
// 	return view('uploadfile');
// });

//Route::get('postfile', ['as' => 'postfile', 'uses' => 'MyController@postFile']);
Route::post('postfile','MyController@postFile');

Route::get('file','FileController@index');
Route::post('file','FileController@doUpload');

//new upload file
Route::get('uploadfile', ['as' => 'uploadfile', 'uses' => 'UploadFileController@getAddFile']);

Route::post('uploadfile', ['as' => 'uploadfile', 'uses' => 'UploadFileController@postAddFile']);


//blade template
Route::get('call-view',function(){
   return view('home');
});
