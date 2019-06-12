<?php


// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'HomeController@index');


Auth::routes();

Route::get('/dashboard', function(){
  return view('dashboard');
})->middleware('auth');

Route::post('images-upload', 'ImageController@upload');


Route::get('/buildings/{building}', 'BuildingController@show');
// Route::get('/deparments/{department}', 'DeparmentController@show');

// Static pages
// Route::get('/detail', function () {
//   return view('detail');
// });

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

Route::get('/{path}',function(){
  return abort(404);
})->where( 'path', '([A-z\d-/_.]+)?' );

