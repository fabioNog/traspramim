<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SiteHomeController;
use App\Http\Controllers\ComprarController;
use App\Http\Controllers\ViajarController;
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

//Route::GET('/', [SiteHomeController::class, 'index']);
Route::GET('/', function(){
    return view('index');
});


Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route GET */
Route::get('/comprar', [ComprarController::class, 'index'])->name('comprar');
Route::get('/viajar', [ViajarController::class, 'index'])->name('viajar');

/* Route POST */
Route::post('/comprar', [ComprarController::class, 'store'])->name('comprar.store');
Route::post('/viajar', [ViajarController::class, 'store'])->name('viajar.store');
//Route::resource('comprar', [ComprarController::class, 'index']);
