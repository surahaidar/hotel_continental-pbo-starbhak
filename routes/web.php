<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasumumController;


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
    return view('layouts.main');
});

// user
// akhir-user

// admin
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitasumum', [FasilitasumumController::class, 'index'])->name('fasilitasumum');
// akhir-admin

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// akhir-login

// kamar
Route::get('/tambahkamar', [KamarController::class, 'index'])->name('tambahkamar');
Route::get('/insertdatakamar', [KamarController::class, 'index'])->name('insertdatakamar');
// Route::get('/', [KamarController::class, 'index'])->name('');

// akhir-kamar

// fasilitas
// akhir-kamar

// fasilitasumum
// akhir-fasilitasumum