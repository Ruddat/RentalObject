<?php

use App\Http\Middleware\SetLocale;
use App\Livewire\Auth\ResetPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\Languages\LanguageController;
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


Route::view('forgot-passwort', 'backend.livewirepages.auth._forgot-password')->name('forgot-password');
Route::view('reset-password/{token}', 'backend.livewirepages.auth._reset-password')->name('reset-password');
Route::get('/login/{provider}', [SocialLoginController::class, 'redirectToProvider'])->name('social.login');
Route::get('/login/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);

Route::post('/upload-image', [ImageUploadController::class, 'upload'])->name('upload.image');


Route::get('/weather/{city}', [WeatherController::class, 'getWeatherData']);


Route::prefix('localization')
    ->middleware(['web', SetLocale::class])
    ->group(function() {
        // Route zum Wechseln der Sprache über die URL
        Route::get('/change-language', [LanguageController::class, 'switch'])
            ->name('change.lang');
    });

