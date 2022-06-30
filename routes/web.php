<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostViewController;

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

Route::get('/register',[LoginController::class, 'register']);
Route::post('/register',[LoginController::class, 'register']);

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('auth');
Route::post('/dashboard',[DashboardController::class,'dashboard'])->middleware('auth');

Route::get('/post',[PostController::class,'post'])->middleware('auth');
Route::post('/post',[PostController::class,'post'])->middleware('auth');

Route::get('/post/{post}',[PostController::class,'viewPost'])->middleware('auth');
Route::post('/post/{post}',[PostController::class,'viewPost'])->middleware('auth');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});




