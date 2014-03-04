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

Route::get('/', 'Pages@home');
Route::get('search',array('before'=>'keyword_exist','uses'=>'Pages@search'));
Route::get('dramas', 'Pages@drama');
Route::get('joinus','Pages@join');
Route::get('contact','Pages@contact');
Route::get('test','Pages@test');