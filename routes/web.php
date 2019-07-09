<?php


// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'HomeController@index')->name('home.index');


Auth::routes();

Route::get('/dashboard', function(){
  return view('dashboard');
})->middleware('auth');

Route::post('images-upload', 'ImageController@upload');

// Sliders
Route::post('save-sliders', 'SliderController@save');
Route::post('upload-sliders', 'SliderController@upload');
Route::get('get-sliders', 'SliderController@getApiSliders');
Route::delete('delete-sliders/{id}', 'SliderController@deleteSlide');


// Route::get('buildings/{building}', 'BuildingController@show')->name('buildings.detail');
Route::get('buildings/{viewName}', function($view){
  return view($view);
})->name('buildings.detail');

Route::get('buildings', 'BuildingController@index')->name('buildings.list');
Route::get('amenities', function(){
   return $items= App\Amenity::orderBy('title')->get();
})->name('amenity.list');

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

Route::get('/modal-details', function () {
  return view('modalDetails');
});

// Static
Route::get('/investments', 'HomeController@staticPage')->name('investments.index');
Route::get('/appraisals', 'HomeController@staticPage')->name('appraisals.index');
Route::get('/credits', 'HomeController@staticPage')->name('credits.index');
Route::get('/contact', 'HomeController@staticPage')->name('contact.index');
Route::get('/nosotros', 'HomeController@staticPage')->name('nosotros.index');

Route::get('/{path}',function(){
  return redirect('/dashboard');
})->where( 'path', '([A-z\d-/_.]+)?' );

