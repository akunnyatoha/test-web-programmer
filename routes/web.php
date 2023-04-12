<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PemesananController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pemesanan/create', [PemesananController::class, 'create']);
Route::get('/pemesanan/tiket', [PemesananController::class, 'showTiket']);
Route::post('/pemesanan/create', [PemesananController::class, 'store']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/master-pemesan', [PemesananController::class, 'index'])->middleware('auth');
Route::get('/master-pemesan/{id}', [PemesananController::class, 'edit'])->middleware('auth');
Route::post('/master-pemesan/{id}', [PemesananController::class, 'update'])->middleware('auth');
Route::get('/master-pemesan/delete/{id}', [PemesananController::class, 'destroy'])->middleware('auth');

Route::get('/chekin', [PemesananController::class, 'chekin'])->middleware('auth');
Route::get('/chekin/{id}', [PemesananController::class, 'updateStatus'])->middleware('auth');

