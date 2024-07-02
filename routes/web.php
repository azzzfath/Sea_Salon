<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reviewcontroller;
use App\Http\Controllers\reservationcontroller;
use App\Http\Controllers\authcontroller;

Route::get('/', function () {
    return view('home');
});

Route::get('/reservation', function () {
    return view('reservation');
});

// review
Route::post('/review', [reviewcontroller::class, 'store']);

// reserve
Route::post('/reservation/post', [reservationcontroller::class, 'store']);

Route::get('/login', [authcontroller::class, 'login'])->name('login');
Route::post('/login', [authcontroller::class, 'authenticate'])->name('authenticate');

// Register
Route::get('/register', [authcontroller::class, 'register'])->name('register');
Route::post('/register', [authcontroller::class, 'store'])->name('store');

// Logout
Route::post('/logout', [authcontroller::class, 'logout'])->name('logout');

