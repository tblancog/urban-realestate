<?php

use Illuminate\Http\Request;

/*php
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('buildings/list', 'API\BuildingController@buildingList');
Route::get('buildings/{id}/amenities', 'API\BuildingController@buildingAmenities');
Route::resource('buildings', 'API\BuildingController')
       ->only('index','store', 'update', 'destroy')
       ->names(['index'=> '']);

// Building amenities

// Apartment or building images
Route::delete('images/{id}/apartment', 'ImageController@destroyApartmentImage');
Route::delete('images/{id}/building', 'ImageController@destroyBuildingImage');


Route::resource('apartments', 'API\ApartmentController')
        ->only('index', 'store', 'update', 'destroy')
        ->names(['index'=> '']);
Route::resource('config', 'API\ConfigController')->only('index','update');



