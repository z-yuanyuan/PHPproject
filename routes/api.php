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

//List of endpoints
Route::post('users', 'App\Http\Controllers\ApiController@createUser'); //Post request to create user record. 
Route::get('users', 'App\Http\Controllers\ApiController@getAllUsers'); //Get request to fetch user record. 
Route::get('users/{id}', 'App\Http\Controllers\ApiController@getUserbyid'); //Fetch user's info by id;
Route::put('users/{id}', 'App\Http\Controllers\ApiController@updateUserbyid'); //Put request to update user record.
Route::delete('users/{id}', 'App\Http\Controllers\ApiController@deleteUserbyid'); //Delete user record from database. 

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
