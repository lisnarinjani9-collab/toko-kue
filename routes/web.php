<?php

use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KueController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/kue', [KueController::class, 'index'])->name('kue.table');
Route::get('/kue/tambah', [KueController::class, 'create'])->name('kue.tambah');
Route::post('/kue/tambah', [KueController::class, 'store'])->name('kue.store');

Route::get('/bahan-baku', [BahanBakuController::class, 'index'])->name('bahan_baku.table');
Route::get('/bahan-baku/tambah', [BahanBakuController::class, 'create'])->name('bahan_baku.tambah');
Route::post('/bahan-baku/tambah', [BahanBakuController::class, 'store'])->name('bahan_baku.store');

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.table');
Route::get('/pegawai/tambah', [PegawaiController::class, 'create'])->name('pegawai.tambah');
Route::post('/pegawai/tambah', [PegawaiController::class, 'store'])->name('pegawai.store');
