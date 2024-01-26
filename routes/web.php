<?php

use App\Http\Controllers\guests\AboutUsController;
use App\Http\Controllers\guests\FacilityController;
use App\Http\Controllers\guests\HomeController;
use App\Http\Controllers\guests\NewsController;
use App\Http\Controllers\guests\PublicServiceController;
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

Route::controller(HomeController::class)->group(
    function () {
        Route::get('/', 'index')->name('home');
    }
);

Route::controller(AboutUsController::class)->group(
    function () {
        Route::get('/tentang-kami', 'index')->name('about-us');
    }
);

Route::controller(NewsController::class)->group(
    function () {
        Route::get('/berita', 'index')->name('guest-news-index');
        Route::get('/berita/id', 'show')->name('guest-news-show');
    }
);

Route::controller(FacilityController::class)->group(
    function () {
        Route::get('/fasilitsas', 'index')->name('guest-facility-index');
        Route::get('/fasilitsas/id', 'show')->name('guest-facility-show');
    }
);

Route::controller(PublicServiceController::class)->group(
    function () {
        Route::get('/layanan-umum', 'index')->name('guest-public-service-index');
        Route::get('/layanan-umum/id', 'show')->name('guest-public-service-show');

    }
);