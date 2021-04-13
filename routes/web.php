<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\appUserController;
use App\Http\Controllers\User;
use App\Models\users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//View all users record
Route::get('/', [appUserController::class, 'userList']);

//Create new user record
Route::get('users', [appUserController::class, 'createUser']);
Route::post('/users', [ApiController::class, 'createUser']);

//Update user record
Route::get('updateUser/{id}', [appUserController::class, 'getUserbyid']);
Route::post('/updateUser', [ApiController::class, 'updateUserbyid']);

//Delete user record
Route::get('delete/{id}', [appUserController::class, 'deleteUserbyid']);
