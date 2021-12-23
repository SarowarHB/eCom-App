<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('index.index');
})->name('dashboard');
