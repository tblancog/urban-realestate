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
// Route::get('buildings/{id}/amenities', 'API\BuildingController@buildingAmenities');
Route::get('buildings/{id}', 'API\BuildingController@show');
Route::resource('buildings', 'API\BuildingController')
       ->only('index','store', 'update', 'destroy')
       ->names(['index'=> '']);

// Building amenities

// Apartment or building images
Route::delete('images/{id}/apartment', 'ImageController@destroyApartmentImage');
Route::delete('images/{id}/building', 'ImageController@destroyBuildingImage');
Route::delete('images/{id}/house', 'ImageController@destroyHouseImage');
Route::delete('images/{id}/project', 'ImageController@destroyProjectImage');
Route::delete('images/{id}/article', 'ImageController@destroyArticleImage');


Route::post('apartments/{id}/clone', 'API\ApartmentController@clone');
Route::resource('apartments', 'API\ApartmentController')
        ->only('index', 'store', 'update', 'destroy')
        ->names(['index'=> '']);

// Houses
Route::resource('houses', 'API\HouseController')
        ->only('index', 'store', 'update', 'destroy')
        ->names(['index'=> '']);

// Projects
Route::resource('projects', 'API\ProjectController')
        ->only('index', 'store', 'update', 'destroy')
        ->names(['index'=> '']);

// News
Route::resource('articles', 'API\ArticleController')
        ->only('index', 'store', 'update', 'destroy')
        ->names(['index'=> '']);

// Config
Route::resource('config', 'API\ConfigController')
        ->only('index','update');



