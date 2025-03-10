<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Frontend\Search\PropertySearchController;

Route::middleware('guest')->group(function () {
    Volt::route('register', 'pages.auth.register')
        ->name('register');

  //  Volt::route('login', 'pages.auth.login')
  //      ->name('login');

   //   Volt::route('login', 'rentalobj.index')
   //       ->name('login');

   //Route::view('login', 'rentalobj.index')->name('login');
   Route::get('login', [PropertySearchController::class, 'index'])->name('login');
  //  Volt::route('forgot-password', 'pages.auth.forgot-password')
  //      ->name('password.request');

    //Volt::route('reset-password/{token}', 'pages.auth.reset-password')
       // ->name('password.reset');
// Benutzerdefinierte E-Mail-Verifizierung mit spezifischem Pfad, um Konflikte zu vermeiden
//Route::get('/custom-email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('email.verify.custom');

    });

Route::middleware('auth')->group(function () {
    Volt::route('verify-email', 'pages.auth.verify-email')
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Volt::route('confirm-password', 'pages.auth.confirm-password')
        ->name('password.confirm');



});
