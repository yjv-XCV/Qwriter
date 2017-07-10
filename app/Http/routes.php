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

Route::get('/', function () {
    return view('welcome');
});
Route::get('test/{id}',"PagesController@novel");
Route::get('home',"PagesController@homepage");
Route::get('novel/{id}',"PagesController@novel");
Route::get('article/{id}',"PagesController@article");
Route::get('demo',function(){
	return view('demo_001/demo2');
});

Route::get('test',function(){
	return view('samplepage_sidebar');
});

Route::post('home',"PagesController@create");
Route::post('home/delete',"PagesController@delete");
Route::post('novel/{id}',"PagesController@createCard");
Route::post('novel/{id}/delete',"PagesController@deleteCard");
