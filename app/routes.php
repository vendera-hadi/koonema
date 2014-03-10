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

/* Front End */

//route ke home
Route::get('/', 'Pages@home');
//route ke search posts
Route::get('search',array('before'=>'keyword_exist','uses'=>'Pages@search'));
//route ke list drama atau search drama
Route::get('dramas', 'Pages@dramas');
//route ke join us
Route::get('joinus','Pages@join');
//route ke kontak
Route::get('contact','Pages@contact');
//route ke post detail
Route::get('view/{slugtitle}','Pages@view');
//route ke list post dr drama tertentu
Route::get('drama/{slugtitle}','Pages@drama');
//route ke kontak
Route::post('contact',array('before'=>'csrf',function(){
    //validasi
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

    //mail function

    // Validation Success
    Session::flash('success', 'Successfully sent');
    return Redirect::to('contact');

}));

//404 error front end
Route::get('error404','Pages@error');


Route::get('test/{slugtitle}',function($slug){
    $post = Drama::find(1)->posts()->paginate(1);

    echo $post->toJson();
});
