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
Route::get('posts', function () {
    return view('pages/criate_post');
});

Route::post('criate_post', 'postController@create');
Route::get('list_post', 'postController@index');
Route::get('edite_post/{id}', 'postController@edite');
Route::post('edite_post/{id}', 'postController@update');
Route::get('delete_post/{id}', 'postController@destroy');

Route::get('/', function () {
    return view('home');
});
