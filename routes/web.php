<?php

use App\Http\Controllers\LandingPage\ArchiveTravelController;
use App\Http\Controllers\LandingPage\ContactController;
use App\Http\Controllers\LandingPage\ContactFormController;
use App\Http\Controllers\LandingPage\GalleryController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LandingPage\SearchFormController;
use App\Http\Controllers\LandingPage\SingleTravelController;
use App\Http\Controllers\Sitemap\ArchiveTravelSitemapController;
use App\Http\Controllers\Sitemap\IndexSitemapController;
use App\Http\Controllers\Sitemap\PageSitemapController;
use App\Http\Controllers\Sitemap\SingleTravelSitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::prefix('travel')->group(function () {

    Route::get('/', ArchiveTravelController::class)->name('travel.archive');
    Route::post('/', SearchFormController::class)->name('travel.search.form');

    Route::prefix('{originName}/{destinationName}/{originId}/{destinationId}')->group(function () {
        Route::get('/', SingleTravelController::class)->name('travel.show');
        Route::get('/thumbnail.jpg', SingleTravelController::class)->name('travel.show.thumbnail');
    });
});

Route::get('/galeri', GalleryController::class)->name('gallery');

Route::prefix('/kontak')->group(function () {
    Route::get('/', ContactController::class)->name('contact');
    Route::post('/', ContactFormController::class)->name('contact.form');
});

Route::get('/sitemap.xml', IndexSitemapController::class)->name('sitemap.index');
Route::get('/page-sitemap.xml', PageSitemapController::class)->name('sitemap.page');
Route::prefix('/travel')->group(function () {
    Route::get('sitemap.xml', ArchiveTravelSitemapController::class)->name('sitemap.archive');
    Route::get('{name}/{id}/sitemap.xml', SingleTravelSitemapController::class)->name('sitemap.single');
});
