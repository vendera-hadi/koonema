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

Route::post('contact',array('before'=>'csrf',function(){
	$rules = array(
        'username' => array('required','min:3'),
        'email'    => array('required', 'email'),
        'subject' => array('required'),
        'message' => array('required')
    );

    $validation = Validator::make(Input::all(), $rules);
    if ($validation->fails())
    {
        // Validation has failed.
        return Redirect::to('contact')->withErrors($validation)->withInput();
    }

    // Validation Success
    Session::flash('success', 'Successfully sent');
    return Redirect::to('contact');

}));