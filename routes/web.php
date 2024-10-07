<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\LandingPageController::class, 'index']);

Route::get('/tabel', [App\Http\Controllers\TabelController::class, 'index']);

Route::get('/create', [App\Http\Controllers\TabelController::class, 'create'])->name('create');

Route::post('/store', [App\Http\Controllers\TabelController::class, 'store'])->name('store');

Route::get('/edit/{id}', [App\Http\Controllers\TabelController::class, 'edit'])->name('edit');

Route::put('/update/{id}', [App\Http\Controllers\TabelController::class, 'update'])->name('update');

Route::delete('/destroy/{id}', [App\Http\Controllers\TabelController::class, 'destroy'])->name('destroy');