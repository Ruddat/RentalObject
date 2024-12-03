<?php

use App\Http\Middleware\SetLocale;
use App\Livewire\Auth\ResetPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\Languages\LanguageController;
use App\Http\Controllers\Utility\UserTimeLogController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\BlogSystem\ImageUploadController;
use App\Http\Controllers\Backend\Admin\PagesSystem\PageController;
use App\Http\Controllers\Backend\Admin\VideoChatSystem\VideoChatController;

Route::view('/', 'welcome');

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

// Benutzerdefinierte Verifizierungsroute für E-Mails
Route::get('/custom-verify-email/{id}/{token}', [EmailVerificationController::class, 'verify'])
  //  ->middleware(['guest'])
    ->name('email.verification.custom');



    Route::post('/log-time', [UserTimeLogController::class, 'logTime']);



    Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');


    Route::get('/room/{roomName}', [VideoChatController::class, 'openRoom'])->name('video.room');
    Route::post('/room/create', [VideoChatController::class, 'createRoom'])->name('video.room.create');


    Route::get('/video-chat', function () {
        return view('video-chat');
    });


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

