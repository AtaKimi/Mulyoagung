<?php

use App\Http\Controllers\admins\AboutUsController as AdminAboutUsController;
use App\Http\Controllers\admins\DashboardController;
use App\Http\Controllers\admins\FacilityController as AdminFacilityController;
use App\Http\Controllers\admins\NewsController as AdminNewsController;
use App\Http\Controllers\admins\PublicServiceController as AdminPublicServiceController;
use App\Http\Controllers\admins\SettingController as AdminSettingController;
use App\Http\Controllers\admins\UserController as AdminUserController;
use App\Http\Controllers\guests\AboutUsController;
use App\Http\Controllers\guests\FacilityController;
use App\Http\Controllers\guests\HomeController;
use App\Http\Controllers\guests\NewsController;
use App\Http\Controllers\guests\PublicServiceController;
use App\Http\Controllers\MediaController;
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
        Route::get('/berita/{news}', 'show')->name('guest-news-show');
    }
);

Route::controller(FacilityController::class)->group(
    function () {
        Route::get('/fasilitsas', 'index')->name('guest-facility-index');
        Route::get('/fasilitsas/{facility}', 'show')->name('guest-facility-show');
    }
);

Route::controller(PublicServiceController::class)->group(
    function () {
        Route::get('/layanan-umum', 'index')->name('guest-public-service-index');
        Route::get('/layanan-umum/{publicService}', 'show')->name('guest-public-service-show');
    }
);

Route::middleware(['auth'])->group(function () { 
    Route::middleware('role:admin|super_admin')->group(function () {
        Route::controller(DashboardController::class)->group(
            function () {
                Route::get('/dashboard', 'index')->name('dashboard');
            }
        );

        Route::prefix('admin')->group(function () {
            Route::controller(AdminAboutUsController::class)->group(function () {
                Route::get('/about-us', 'index')->name('admin-about-us-index');
                Route::get('/about-us/edit', 'edit')->name('admin-about-us-edit');
                Route::post('/about-us/update', 'update')->name('admin-about-us-update');
            });

            Route::prefix('users')->controller(AdminUserController::class)->group(function () {
                Route::get('/', 'index')->name('admin-user-index');
                Route::post('/store', 'store')->name('admin-user-store');
                Route::post('/{user}/update', 'update')->name('admin-user-update');
                Route::delete('/{user}/destroy', 'destroy')->name('admin-user-destroy');
            });

            Route::prefix('news')->controller(AdminNewsController::class)->group(function () {
                Route::get('/', 'index')->name('admin-news-index');
                Route::get('/create', 'create')->name('admin-news-create');
                Route::post('/store', 'store')->name('admin-news-store');
                Route::get('/{news}/edit', 'edit')->name('admin-news-edit');
                Route::put('/{news}/update', 'update')->name('admin-news-update');
                Route::delete('/{news}/destroy', 'destroy')->name('admin-news-destroy');
            });

            Route::prefix('facility')->controller(AdminFacilityController::class)->group(function () {
                Route::get('/', 'index')->name('admin-facility-index');
                Route::get('/create', 'create')->name('admin-facility-create');
                Route::post('/store', 'store')->name('admin-facility-store');
                Route::get('/{facility}/edit', 'edit')->name('admin-facility-edit');
                Route::post('/{facility}/update', 'update')->name('admin-facility-update');
                Route::delete('/{facility}/destroy', 'destroy')->name('admin-facility-destroy');
            });

            Route::prefix('public-service')->controller(AdminPublicServiceController::class)->group(function () {
                Route::get('/', 'index')->name('admin-public-service-index');
                Route::get('/create', 'create')->name('admin-public-service-create');
                Route::post('/store', 'store')->name('admin-public-service-store');
                Route::get('/{public_service}/edit', 'edit')->name('admin-public-service-edit');
                Route::post('/{public_service}/update', 'update')->name('admin-public-service-update');
                Route::delete('/{public_service}/destroy', 'destroy')->name('admin-public-service-destroy');
                Route::post('/{public_service}/files', 'fileStore')->name('admin-public-service-file-store');
                Route::delete('/{public_service}/files/{media}/destroy', 'fileDestroy')->name('admin-public-service-file-destroy');
            });

            Route::prefix('setting')->controller(AdminSettingController::class)->group(function () {
                Route::get('/village', 'village')->name('admin-setting-village');

                Route::post('/village/identity', 'villageIdentity')->name('admin-setting-village-indentity');
                Route::post('/village/photo', 'villagePhoto')->name('admin-setting-village-photo');

                Route::post('/village/slider/store', 'villageHomeSliderStore')->name('admin-setting-village-slider-store');
                Route::delete('/village/slider/{home_slider}/destroy', 'villageHomeSliderDestroy')->name('admin-setting-village-slider-destroy');
            });
        });
    });

    Route::prefix('setting')->controller(AdminSettingController::class)->group(function () {
        Route::get('/profile', 'profile')->name('setting-profile');

        Route::post('/profile/identity', 'profileIdentity')->name('setting-profile-indentity');
        Route::post('/profile/photo', 'profilePhoto')->name('setting-profile-photo');
        Route::post('profile/change-password', 'changePassword')->name('setting-profile-change-password');
    });
});

Route::controller(MediaController::class)->group(function () {
    Route::post('ckeditor', 'ckeditor')->name('ckeditor');
});
