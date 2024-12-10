<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ListingDetailController;
use Illuminate\Support\Facades\Route;

if (config('settings.auth')) {
    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    require __DIR__ . '/auth.php';
}

Route::get('/', HomeController::class)->name('home');
Route::get('/listings', ListingController::class)->name('listings');
Route::get('/property/{propertyId}', ListingDetailController::class)->name('property');
