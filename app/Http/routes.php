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
Route::get('test',"PagesController@test");
Route::get('home',"PagesController@homepage");
Route::get('novel',"PagesController@novel");
Route::get('article',"PagesController@article");

Route::post('test',"PagesController@create");
Route::post('home',"PagesController@create");
