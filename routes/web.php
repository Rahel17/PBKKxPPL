<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/dashboard', [App\Http\Controllers\LandingPageController::class, 'index']);

