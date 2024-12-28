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

Route::get('/', HomeController::class);
Route::get('/listings', ListingController::class);
Route::get('/property/{propertyId}', ListingDetailController::class);

Route::get('home', [HomeController::class, 'getHome'])->name('home');
Route::get('about', [HomeController::class, 'getAbout'])->name('about');
Route::get('listing', [HomeController::class, 'getListing'])->name('listing');
Route::get('listing-full', [HomeController::class, 'getListingFull'])->name('listing.full');
Route::get('contact', [HomeController::class, 'getContact'])->name('contact');
Route::get('invest', [HomeController::class, 'getInvest'])->name('invest');
Route::get('terms', [HomeController::class, 'getTerms'])->name('terms');
Route::get('privacy-policy', [HomeController::class, 'getPrivacyPolicy'])->name('privacy-policy');
Route::get('property-detail', [HomeController::class, 'getPropertyDetail'])->name('property.detail');
