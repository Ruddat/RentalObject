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


/*
----------------------------------------------------------------
| Utility Costs
----------------------------------------------------------------
*/

Route::get('/utility-cost-table', function () {
    return view('rentalobj.pageslivewire._utilitycosts');
})->name('utility-cost-table');

Route::get('/rental-object-table', function () {
    return view('rentalobj.pageslivewire._rental-object-table');
})->name('rental-object-table');


Route::get('/tenant-table', function () {
    return view('rentalobj.pageslivewire._tenant-table');
})->name('tenant-table');


Route::get('/utility-cost-recording', function () {
    return view('rentalobj.pageslivewire._utility-cost-recording');
})->name('utility-cost-recording');

Route::get('/billing-calculation', function () {
    return view('rentalobj.pageslivewire._billing-calculation');
})->name('billing-calculation');


Route::get('/billing-header-form', function () {
    return view('rentalobj.pageslivewire._billing-header-form');
})->name('billing-header-form');


Route::get('/heating-cost-management', function () {
    return view('rentalobj.pageslivewire._heating-cost-management');
})->name('heating-cost-management');

Route::get('/tenant-payments', function () {
    return view('rentalobj.pageslivewire._tenant-payments');
})->name('tenant-payments');

Route::get('/billing-generation', function () {
    return view('rentalobj.pageslivewire._billing-generation');
})->name('billing-generation');
