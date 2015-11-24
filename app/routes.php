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

Route::get('/sl', function(){
	Excel::load('importdata/sl.xls', function($r){
		$res = $r->all()->toArray();
		foreach($res as $data){
			$d = new ShoppingList;
			$d->kode_sl = $data['kode_sl'];
			$d->deskripsi_pekerjaan = $data['deskripsi_pekerjaan'];
			$d->satuan = $data['satuan'];
			$d->harga = $data['harga'];
			$d->save();
		}
	});
});

Route::post('/auth' , 'SessionController@auth');
Route::get('/logout' , 'SessionController@logout');

Route::group(array('prefix' => 'home' , 'before' => 'auth') , function(){
	Route::get('/' , 'HomeController@dash');
});

Route::group(array('prefix' => 'users' , 'before' => 'auth') , function(){
	Route::get('/' , 'UserController@data');
	Route::post('/submit' , 'UserController@submit');
	Route::get('/{id}/edit' , 'UserController@edit');
	Route::post('/{id}/update' , 'UserController@update');
	Route::get('/{id}/delete' , 'UserController@delete');
});

Route::group(array('prefix' => 'oss' , 'before' => 'auth') , function(){
	Route::get('/' , 'OssController@data');
	Route::post('/bantek/submit' , 'OssController@submit_bantek');
	Route::post('/material/submit' , 'OssController@submit_material');
	Route::get('/{id}/edit' , 'OssController@edit');
	Route::post('/{id}/update' , 'OssController@update');
	Route::get('/{id}/delete' , 'OssController@delete');
});

Route::group(array('prefix' => 'fpl' , 'before' => 'auth') , function(){
	Route::get('/' , 'FplController@data');
	Route::post('/submit' , 'FplController@submit');
	Route::get('/{id}' , 'FplController@details');
	Route::get('/{id}/edit' , 'FplController@edit');
	Route::post('/{id}/update' , 'FplController@update');
	Route::get('/{id}/delete' , 'FplController@delete');
});

Route::group(array('prefix' => 'import' , 'before' => 'auth') , function(){
	Route::get('/' , 'ImportController@forms');
	Route::post('submit/sitedata' , 'ImportController@postsitedata');
	Route::post('submit/shopdata' , 'ImportController@postshopdata');
});

Route::get('/ajax/sl/{param}' , 'AjaxController@list_shop');

Route::get('/json' , function(){
	$data = Mastertp::all();
	return Response::json($data);
});