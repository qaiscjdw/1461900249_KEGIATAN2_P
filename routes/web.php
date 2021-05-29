<?php

use App\Http\Controllers\dataController;
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

Route::get('/home',[\App\Http\Controllers\homeController::class,'home']);
Route::get('/anggota',[\App\Http\Controllers\homeController::class,'anggota']);
Route::get('/peminjam',[\App\Http\Controllers\homeController::class,'peminjam']);
Route::resource('buku',dataController::class);
Route::resource('anggota',dataController::class);