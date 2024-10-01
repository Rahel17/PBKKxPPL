<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\LandingPageController::class, 'index']);

Route::get('/tabel', [App\Http\Controllers\TabelController::class, 'index']);

Route::get('/create', [App\Http\Controllers\TabelController::class, 'create'])->name('create');

Route::post('/store', [App\Http\Controllers\TabelController::class, 'store'])->name('store');
