<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    require __DIR__ . '/auth.php';
});


Route::view('/', 'home')
    ->middleware(['auth'])
    ->name('home');

Route::view('/{slug}', 'default')
    ->middleware(['auth'])
    ->name('default');
