<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\BlogSystem\ImageUploadController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

// Benutzerdefinierte Verifizierungsroute für E-Mails
Route::get('/custom-verify-email/{id}/{token}', [EmailVerificationController::class, 'verify'])
  //  ->middleware(['guest'])
    ->name('email.verification.custom');

Route::post('/upload-image', [ImageUploadController::class, 'upload'])->name('upload.image');


Route::get('/weather/{city}', [WeatherController::class, 'getWeatherData']);

