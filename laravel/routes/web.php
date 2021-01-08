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

Route::get('/signup',[\App\Http\Controllers\SignupController::class, 'index']);
Route::post('/signup',[\App\Http\Controllers\SignupController::class, 'store']);
Route::get('/signin',[\App\Http\Controllers\SinginController::class, 'index']);
Route::post('/signin',[\App\Http\Controllers\SinginController::class, 'login']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
