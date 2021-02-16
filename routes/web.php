<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/register', [\App\Http\Controllers\HomeController::class, 'register']);
Route::post('/register', [\App\Http\Controllers\HomeController::class, 'register']);
Route::get('/registerSuccess', [\App\Http\Controllers\HomeController::class, 'registerSuccess']);
Route::get('/login', [\App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/loginSuccess', [\App\Http\Controllers\HomeController::class, 'loginSuccess']);
Route::post('/login', [\App\Http\Controllers\HomeController::class, 'login']);

Route::get('/account', [\App\Http\Controllers\AccountController::class, 'index'])->middleware('auth');
Route::get('/logout', [\App\Http\Controllers\AccountController::class, 'logout'])->middleware('auth');
