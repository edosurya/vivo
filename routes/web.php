<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\CreatorController as FrontendCreatorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ContactUsExportController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CreatorController;
use App\Http\Controllers\Admin\CreatorExportController;
use App\Http\Controllers\Admin\ImageController;



Route::prefix('admin')->middleware(['auth', 'verified'])->as('admin.')->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('/creators', [CreatorController::class, 'index'])->name('creators.index');
    Route::post('/creators/export', CreatorExportController::class)->name('creator.export');

    Route::get('/image', [ImageController::class, 'index'])->name('image.index');
    Route::post('/image/download', [ImageController::class, 'downloadMultiple'])->name('image.download');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');



    Route::middleware(['isSuperAdmin'])->group(function () {
        Route::resource('/user', UserController::class)->names('user');
    });
});


Route::get('/', function() {
    return view('frontend.homepage');
})->name('home');

Route::controller(RegisterController::class)->group(function () {
    Route::get('/photographyawards', 'index')->name('register.index');
    Route::post('/upload', 'upload')->name('register.upload');
});

Route::get('/gallery/{category?}', [GalleryController::class, 'index'])->name('gallery');

Route::get('/creator/{code}', [FrontendCreatorController::class, 'index'])->name('creator.index');
Route::get('/creator/{code}/download', [FrontendCreatorController::class, 'download'])->name('creator.download');


require __DIR__ . '/auth.php';
