<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [\App\Http\Controllers\IndexController::class, 'search'])->name('search');
