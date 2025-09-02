<?php

use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\WelcomeStatController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\StatsVisibilityController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/404', [Controller::class, 'notfound'])->name('notfound');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/sabka-ecosystem', [PageController::class, 'ecosystem'])->name('ecosystem');
Route::get('/investor-corner', [PageController::class, 'investor'])->name('investor');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
    Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
    Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
    Route::get('admin/videos/{video}/edit', [VideoController::class, 'edit'])->name('videos.edit');
    Route::put('admin/videos/{video}', [VideoController::class, 'update'])->name('videos.update');
    Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->name('videos.destroy');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/stats', [StatController::class, 'index'])->name('admin.stats.index');
    Route::put('/stats/bulk-update', [StatController::class, 'bulkUpdate'])->name('stats.bulkUpdate');

});

Route::prefix('admin/gallery')->name('admin.gallery.')->group(function () {
    Route::get('/', [GalleryController::class, 'adminIndex'])->name('index');
    Route::get('/create', [GalleryController::class, 'create'])->name('create');
    Route::post('/store', [GalleryController::class, 'store'])->name('store');
    Route::delete('/{gallery}', [GalleryController::class, 'destroy'])->name('destroy');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('welcome_stats', [WelcomeStatController::class, 'index'])->name('welcome_stats.index');
    Route::get('welcome_stats/{welcome_stat}/edit', [WelcomeStatController::class, 'edit'])->name('welcome_stats.edit');
    Route::put('welcome_stats/{welcome_stat}', [WelcomeStatController::class, 'update'])->name('welcome_stats.update');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('testimonials', [\App\Http\Controllers\Admin\TestimonialController::class, 'index'])->name('testimonials.index');
    Route::get('testimonials/{id}/edit', [\App\Http\Controllers\Admin\TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::put('testimonials/{id}', [\App\Http\Controllers\Admin\TestimonialController::class, 'update'])->name('testimonials.update');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('welcomevideos', App\Http\Controllers\Admin\WelcomeVideoController::class);
});

Route::post('/contact/submit', [pageController::class, 'send'])->name('contact.submit');
Route::post('/investor-corner-submit', [pageController::class, 'sendinvestor'])->name('investor.corner.submit');

Route::view('admin/stats-visibility', 'admin.stats_visibility')->name('admin.stats_visibility');
Route::put('/toggle-visibility', [StatController::class, 'updateVisibility'])->name('toggle-visibility');


Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create');
Route::post('/partners/store', [PartnerController::class, 'store'])->name('partners.store');
Route::delete('/partners/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy');
Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');


