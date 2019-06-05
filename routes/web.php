<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('invoice', function(){
    return view('invoice');
});

Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d-/_.]+)?' );
Route::post('images-upload', 'ImageController@upload');


