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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResources(['user' => 'API\UserController']);
Route::get('buildings/list', 'API\BuildingController@buildingList');
// Route::get('amenities', 'API\BuildingController@index');
// Route::apiResources(['buildings' => 'API\BuildingController']);
Route::resource('buildings', 'API\BuildingController')
       ->only('index','store', 'update', 'destroy')
       ->names(['index'=> '']);
Route::resource('apartments', 'API\ApartmentController')
        ->only('index', 'store', 'update', 'destroy')
        ->names(['index'=> '']);
Route::resource('config', 'API\ConfigController')->only('index','update');

// Route::get('findUser', 'API\UserController@search');
// Route::put('profile', 'API\UserController@updateProfile');



