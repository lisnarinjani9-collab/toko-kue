<?php

use App\Http\Controllers\KueController;
use Illuminate\Support\Facades\Route;

Route::get('/kue/create', [KueController::class, 'create']);
Route::post('/kue', [KueController::class, 'store']);
