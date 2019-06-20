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


Route::get('buildings/{building}', 'BuildingController@show')->name('buildings.detail');
Route::get('buildings', 'BuildingController@index')->name('buildings.list');

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

Route::get('/investments', function () {
  return view('contact');
})->name('investments.index');

Route::get('/appraisals', function () {
  return view('contact');
})->name('appraisals.index');

Route::get('/credits', function () {
  return view('contact');
})->name('credits.index');

Route::get('/nosotros', function () {
  return view('nosotros');
})->name('nosotros.index');

Route::get('/contact', function () {
  return view('contact');
})->name('contact.index');

Route::get('/{path}',function(){
  return redirect('/dashboard');
})->where( 'path', '([A-z\d-/_.]+)?' );

