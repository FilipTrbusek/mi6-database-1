<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// api/ prefix is automatic within this file (api.php)
Route::get('/movies-list-test', 'Api\PersonController@moviesTest');
Route::get('/person/{person_id}', 'Api\PersonController@show');
Route::get('/person', 'Api\PersonController@index');
