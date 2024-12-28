<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ListingDetailController;
use App\Http\Controllers\ProjectDetailController;
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

Route::get('/', HomeController::class);
Route::get('/listings', ListingController::class);
Route::get('/property/{propertyId}', ListingDetailController::class);
