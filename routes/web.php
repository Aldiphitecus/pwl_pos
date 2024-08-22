<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/stok', [StokController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index']);

Route::get('/cekObject', [AnggotaController::class, 'cekObject']);
Route::get('/insert', [AnggotaController::class, 'insert']);
Route::get('/update', [AnggotaController::class, 'update']);
Route::get('/delete', [AnggotaController::class, 'delete']);
Route::get('/all', [AnggotaController::class, 'all']);
Route::get('/find', [AnggotaController::class, 'find']);
Route::get('/getWhere', [AnggotaController::class, 'getWhere']);
