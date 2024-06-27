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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// crud kategori
use App\Http\Controllers\KategoriController;
Route::resource('kategori', KategoriController::class);   

// crud lokasi
use App\Http\Controllers\LokasiController;
Route::resource('lokasi', LokasiController::class);   

// crud lokasi
use App\Http\Controllers\EventController;
Route::resource('event', EventController::class);   

// crud Wisata
use App\Http\Controllers\WisataController;
Route::resource('wisata', WisataController::class);   