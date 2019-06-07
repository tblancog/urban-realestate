<?php


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d-/_.]+)?' );
Route::post('images-upload', 'ImageController@upload');


// Static pages
Route::get('/detail', function () {
    return view('detail');
});

Route::get('/detail_building', function () {
    return view('detail-building');
});

Route::get('/developers', function () {
    return view('index-developers');
});

Route::get('/houses', function () {
    return view('index-houses');
});

Route::get('/developers_details', function () {
    return view('developers-details');
});

Route::get('/houses_details', function () {
    return view('houses-details');
});


