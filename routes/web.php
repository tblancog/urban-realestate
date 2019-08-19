<?php
//Route::get('/', function() {
//  return view('new.index');
//});

// Auth
Auth::routes();

// Index
Route::get('/', 'HomeController@index')->name('home.index');

// Dashboard
Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth');

// Buildings
Route::resource('buildings', 'BuildingController')->only('show', 'index');

// Apartments
Route::resource('apartments', 'ApartmentController')->only('show', 'index');

// Search
Route::get('search', 'HomeController@search')->name('search.index');

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

// excel read
route::post('import', 'ApartmentController@import');


// Route::get('/detail_building', function () {
//   return view('detail-building');
// });

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

// Route::get('/modal-details', function () {
//   return view('modalDetails');
// });

// Static Pages
Route::get('/investments', 'HomeController@staticPage')->name('investments.index');
Route::get('/appraisals', 'HomeController@staticPage')->name('appraisals.index');
Route::get('/credits', 'HomeController@staticPage')->name('credits.index');
Route::get('/contact', 'HomeController@staticPage')->name('contact.index');
Route::get('/nosotros', 'HomeController@staticPage')->name('nosotros.index');

// Fallback page
Route::get('/{path}',function(){
  return redirect('/dashboard');
})->where( 'path', '([A-z\d\-/_.]+)?' );

