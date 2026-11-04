<?php

use App\Http\Controllers\KueController;
use App\Http\Controllers\PembeliController;
use App\Models\Kue;
use App\Models\Pembeli;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'jumlahKue' => Kue::count(),
        'jumlahPembeli' => Pembeli::count(),
    ]);
});

Route::get('/kue', [KueController::class, 'index']);
Route::get('/kue/create', [KueController::class, 'create']);
Route::post('/kue', [KueController::class, 'store']);

Route::get('/pembeli/create', [PembeliController::class, 'create']);
Route::post('/pembeli', [PembeliController::class, 'store']);
