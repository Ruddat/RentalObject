<?php

use App\Models\SysPages;
use Illuminate\Support\Facades\Route;
use App\Livewire\BlogSystem\BlogGridManager;
use App\Livewire\BlogSystem\BlogPostManager;
use App\Http\Controllers\BlogSystem\PostController;
use App\Http\Controllers\Utility\NewsletterController;
use App\Http\Controllers\Settings\BackupDownloadController;

Route::post('/newsletter-signup', [NewsletterController::class, 'signup'])->name('newsletter.signup');

Route::view('/', 'rentalobj.index')->name('index');
Route::view('/home-02', 'rentalobj.home-02')->name('home-02');
Route::view('/home-03', 'rentalobj.home-03')->name('home-03');
Route::view('/home-04', 'rentalobj.home-04')->name('home-04');
Route::view('/home-05', 'rentalobj.home-05')->name('home-05');
Route::view('/home-06', 'rentalobj.home-06')->name('home-06');
Route::view('/dashboard', 'rentalobj.dashboard')->name('dashboard');
Route::view('/add-property', 'rentalobj.add-property')->name('add-property');

Route::view('/utility-cost-table', 'rentalobj.pageslivewire._utilitycosts')->name('utility-cost-table');
Route::view('/rental-object-table', 'rentalobj.pageslivewire._rental-object-table')->name('rental-object-table');
Route::view('/tenant-table', 'rentalobj.pageslivewire._tenant-table')->name('tenant-table');
Route::view('/utility-cost-recording', 'rentalobj.pageslivewire._utility-cost-recording')->name('utility-cost-recording');
Route::view('/billing-calculation', 'rentalobj.pageslivewire._billing-calculation')->name('billing-calculation');
Route::view('/billing-header-form', 'rentalobj.pageslivewire._billing-header-form')->name('billing-header-form');
Route::view('/heating-cost-management', 'rentalobj.pageslivewire._heating-cost-management')->name('heating-cost-management');
Route::view('/tenant-payments', 'rentalobj.pageslivewire._tenant-payments')->name('tenant-payments');
Route::view('/billing-generation', 'rentalobj.pageslivewire._billing-generation')->name('billing-generation');

// Settings
Route::view('/backup-manager', 'rentalobj.pageslivewire.settings._backup-manager')->name('sys-settings.backup-manager');
Route::get('/download/backup/{id}', [BackupDownloadController::class, 'download'])->name('download.backup');
Route::view('/setting-manager', 'rentalobj.pageslivewire.settings._settings-manager')->name('sys-settings.settings-manager');
Route::view('/translation-editor', 'rentalobj.pageslivewire.settings._translation-editor')->name('sys-settings.translation-editor');
Route::view('/page-manager', 'rentalobj.pageslivewire.settings._page-manager')->name('sys-settings.page-manager');

// Blog Manager
Route::view('/blog-manager-12', 'rentalobj.pageslivewire.blogmanager._blog-manager')->name('blog-manager-12');
Route::view('/blog-grid/{categoryId?}', 'rentalobj.pageslivewire.blogmanager._blog-grid-manager')->name('blog-grid-manager');
Route::view('/blog-details/{postId}', 'rentalobj.pageslivewire.blogmanager._blog-details-manager')->name('blog-details-manager');

//Route::get('/blog-grid/{categoryId?}', BlogGridManager::class)->name('blog-grid-manager');


//Route::get('/blog', \App\Http\Livewire\Blog::class)->name('blog.index');
Route::get('/blog/{post}', [BlogPostManager::class, 'show'])->name('blog.show');

Route::prefix('blog-manager')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('blog-manager.index');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/update/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
});



// Dynamic route for frontend pages
Route::get('{slug}', function ($slug) {
    $page = SysPages::where('slug', $slug)->where('is_active', true)->firstOrFail();
    return view('frontend.page', compact('page'));
})->name('page.show');


