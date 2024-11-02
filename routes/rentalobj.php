<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('rentalobj.index');
})->name('index');

Route::get('/home-02', function () {
    return view('rentalobj.home-02');
})->name('home-02');

Route::get('/home-03', function () {
    return view('rentalobj.home-03');
})->name('home-03');

Route::get('/home-04', function () {
    return view('rentalobj.home-04');
})->name('home-04');

Route::get('/home-05', function () {
    return view('rentalobj.home-05');
})->name('home-05');

Route::get('/home-06', function () {
    return view('rentalobj.home-06');
})->name('home-06');


Route::get('/dashboard', function () {
    return view('rentalobj.dashboard');
})->name('dashboard');



Route::get('/add-property', function () {
    return view('rentalobj.add-property');
})->name('add-property');
