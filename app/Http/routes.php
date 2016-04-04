<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Route::get("/{lang}",['as' => 'home', 'uses' => 'HomeController@index']);


// Route::get("/news",['uses' => 'HomeController@news']);
Route::get("/",['uses' => 'HomeController@index']);

Route::get("/eng",['uses' => 'HomeController@english']);

Route::get("/vn",['uses' => 'HomeController@vn']);


Route::get("/news",['uses' => 'HomeController@news']);

Route::get("/introduce",['uses' => 'HomeController@introduce']);

Route::get("/chuyen_nganh",['uses' => 'HomeController@chuyen_nganh']);

Route::get("/giao_tiep",['uses' => 'HomeController@giao_tiep']);

//===========================ADMIN ROUTE====================================
Route::get("/admin", function(){
	return view('admin.index');
});
