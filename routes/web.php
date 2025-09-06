<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/progress', [NinjaController::class, 'index']);

Route::get('/progress/create', [NinjaController::class, 'create']);

Route::get('/progress/{id}', [NinjaController::class, 'show']);

