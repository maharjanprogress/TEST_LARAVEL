<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/progress', [NinjaController::class, 'index'])->name('progress.index');

Route::get('/progress/create', [NinjaController::class, 'create'])->name('progress.create');

Route::get('/progress/{id}', [NinjaController::class, 'show'])->name('progress.show');

Route::post('/storeThisthing', [NinjaController::class,'store'])->name('progress.store');

Route::delete('/progress/{id}', [NinjaController::class,'destroy'])->name('progress.destroy');

