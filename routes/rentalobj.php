<?php

use App\Models\SysPages;
use SystemSettings\PageManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Utility\NewsletterController;
use App\Http\Controllers\Settings\BackupDownloadController;


Route::post('/newsletter-signup', [NewsletterController::class, 'signup'])->name('newsletter.signup');



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


/*
----------------------------------------------------------------
|
Settings
|--------------------------------------------------------------------------
*/

Route::get('/backup-manager', function () {
    return view('rentalobj.pageslivewire.settings._backup-manager');
})->name('sys-settings');

Route::get('/download/backup/{id}', [BackupDownloadController::class, 'download'])->name('download.backup');


Route::get('/setting-manager', function () {
    return view('rentalobj.pageslivewire.settings._settings-manager');
})->name('sys-settings');

Route::get('/translation-editor', function () {
    return view('rentalobj.pageslivewire.settings._translation-editor');
})->name('sys-settings');


Route::get('/page-manager', function () {
    return view('rentalobj.pageslivewire.settings._page-manager');
})->name('sys-settings');

// Dynamic route for frontend pages
Route::get('{slug}', function ($slug) {
    $page = SysPages::where('slug', $slug)->where('is_active', true)->firstOrFail();
    return view('frontend.page', compact('page'));
})->name('page.show');
