<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('fronts.login');
});

Route::post('/auth' , 'SessionController@auth');
Route::get('/logout' , 'SessionController@logout');

Route::group(array('prefix' => 'home' , 'before' => 'auth') , function(){
	Route::get('/' , 'HomeController@dash');
});

Route::group(array('prefix' => 'oss' , 'before' => 'auth') , function(){
	Route::get('/' , 'OssController@data');
	Route::post('/bantek/submit' , 'OssController@submit_bantek');
	Route::post('/material/submit' , 'OssController@submit_material');
});

Route::get('/json' , function(){
	$data = User::all();
	return Response::json($data);
});