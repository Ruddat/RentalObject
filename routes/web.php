<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
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

Route::post('/upload-image', [ImageUploadController::class, 'upload'])->name('upload.image');


Route::get('/weather/{city}', [WeatherController::class, 'getWeatherData']);


Route::prefix('localization')
    ->middleware(['web', SetLocale::class])
    ->group(function() {
        // Route zum Wechseln der Sprache über die URL
        Route::get('/change-language', [LanguageController::class, 'switch'])
            ->name('change.lang');
    });

///Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch')->middleware('web');

// In `routes/web.php`
//Route::get('/change-language', [App\Http\Controllers\Languages\LanguageController::class, 'switch'])->name('change.lang');



// Route zum Wechseln der Sprache
//Route::get('lang/{locale}', function ($locale) {
//    if (array_key_exists($locale, config('app.available_locales'))) {
//        session(['locale' => $locale]);
//    }
//    return redirect()->back();
//})->name('change.language');
