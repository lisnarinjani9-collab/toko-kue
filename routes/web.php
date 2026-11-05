<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KueController;
use App\Http\Controllers\PembeliController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/kue', [KueController::class, 'index'])->name('kue.table');
Route::get('/kue/tambah', [KueController::class, 'create'])->name('kue.tambah');
Route::post('/kue/tambah', [KueController::class, 'store'])->name('kue.store');

Route::get('/pembeli', [PembeliController::class, 'index'])->name('pembeli.table');
Route::get('/pembeli/tambah', [PembeliController::class, 'create'])->name('pembeli.tambah');
Route::post('/pembeli/tambah', [PembeliController::class, 'store'])->name('pembeli.store');
