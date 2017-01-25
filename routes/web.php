<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//Route::get('/home', 'HomeController@index');
//Route::get('backend','Backend\BackendController@index');
Route::group(['prefix'=>'backend'],function(){
    Route::any('/','Backend\BackendController@index');
    Route::post('login','Backend\BackendController@login');
    Route::any('/dashboard','Backend\BackendController@dashboard');
    Route::any('/panel','Backend\BackendController@panel');
    Route::resource('/system','Backend\SystemController');
});
