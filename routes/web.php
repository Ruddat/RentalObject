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


Route::get('/add-property', function () {
    return view('rentalobj.add-property');
})->name('add-property');

