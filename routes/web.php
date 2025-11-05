<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentangkami', function () {
    return view('tentang');
})->name('tentang');

Route::get('/layanankami', function () {
    return view('layanan');
})->name('layanan');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/hubungikami', function () {
    return view('hubungi');
})->name('hubungi');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');