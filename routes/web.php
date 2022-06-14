<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[LoginController::class, 'login']);
Route::post('/',[LoginController::class, 'login']);

Route::get('/register',[RegisterController::class, 'register']);
Route::post('/register',[RegisterController::class, 'register']);

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('auth');;
Route::post('/dashboard',[DashboardController::class,'dashboard'])->middleware('auth');;





