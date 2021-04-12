<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

//view list of user
// Route::get('/', function () {
//     return view('viewUser');
// });
Route::get('/', [ApiController::class, 'getAllUsers']);

//create user
Route::post('/users', [ApiController::class, 'createUser']);
