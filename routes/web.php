<?php

// Auth
Auth::routes();

// Index
Route::get('/', 'HomeController@index')->name('home.index');

// real-estate pages
Route::group(['prefix' => 'real-estate'], function () {
    // Buildings
    Route::resource('buildings', 'BuildingController')->only('show', 'index');
    // Apartments
    Route::resource('apartments', 'ApartmentController')->only('show', 'index');
    // Search
    Route::get('search', 'HomeController@search')->name('search.index');

    // Static Pages
    Route::get('investments', 'HomeController@staticPage')->name('investments.index');
    Route::get('appraisals', 'HomeController@staticPage')->name('appraisals.index');
    Route::get('credits', 'HomeController@staticPage')->name('credits.index');
    Route::get('contact', 'HomeController@staticPage')->name('contact.index');
    Route::get('nosotros', 'HomeController@staticPage')->name('nosotros.index');
});

// Dashboard
Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth');

// Amenities
Route::get('amenities', function(){
   return $items= App\Amenity::orderBy('title')->get();
})->name('amenity.list');

// Sliders
Route::post('save-sliders', 'SliderController@save');
Route::post('upload-sliders', 'SliderController@upload');
Route::get('get-sliders', 'SliderController@getApiSliders');
Route::delete('delete-sliders/{id}', 'SliderController@deleteSlide');

// Image uplooader route
Route::post('images-upload', 'ImageController@upload');


Route::group(['prefix' => 'developers'], function () {
    Route::get('/', 'ProjectController@index')->name('developers.index');
    Route::get('/{project}', 'ProjectController@show')->name('developers.show');
});

Route::group(['prefix' => 'houses'], function () {
    Route::get('/', 'HouseController@index')->name('houses.index');
    Route::get('/{house}', 'HouseController@show')->name('houses.show');
});

// excel read
route::post('import', 'ApartmentController@import');


// Mail
// Route::post('/inquiry/building/{building}', 'BuildingController@mail')->name('mail.buildings');
Route::post('/inquiry/apartments/{apartment}', 'ApartmentController@mail')->name('mail.apartments');

// Fallback page
Route::get('/{path}',function() {
  return redirect('/dashboard');
})->where( 'path', '([A-z\d\-/_.]+)?' );

