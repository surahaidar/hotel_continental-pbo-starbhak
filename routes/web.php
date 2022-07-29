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
    return view('main');
});
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitasumum', [FasilitasumumController::class, 'index'])->name('fasilitasumum');

// login
// akhir-login

// kamar
// akhir-kamar

// fasilitas
// akhir-kamar

// fasilitasumum
// akhir-fasilitasumum