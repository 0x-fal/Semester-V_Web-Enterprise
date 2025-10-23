<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentangkami', function () {
    return view('tentang');
})->name('tentang');

Route::get('/layanankami', function () {
    return view('layanan');
})->name('layanan');

