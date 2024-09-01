<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

use App\Http\Controllers\Frontend\RegisterController;


// Route::prefix('admin')->middleware(['auth', 'verified'])->as('admin.')->group(function () {
//     Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

//     Route::get('/reservations', [ReservationController::class, 'index'])->name('reservation.index');

//     Route::get('/reservation/{reservation}', [ReservationController::class, 'show'])->name('reservation.show');
//     Route::put('/reservation/{reservation}/approve', ReservationApprovedController::class)->name('reservation.approve');
//     Route::put('/reservation/{reservation}/reject', ReservationRejectedController::class)->name('reservation.reject');
//     Route::put('/reservation/{reservation}/waiting', ReservationWaitingController::class)->name('reservation.waiting');

//     Route::post('/reservation/bulk/approve', ReservationBulkApprovedController::class)->name('reservation.bulk.approve');
//     Route::post('/reservation/bulk/waiting', ReservationBulkWaitingController::class)->name('reservation.bulk.waiting');
//     Route::post('/reservation/bulk/reject', ReservationBulkRejectedController::class)->name('reservation.bulk.reject');

//     Route::get('/contact-us', ContactUsController::class)->name('contact_us.index');
//     Route::post('/reservation/export', ReservationExportController::class)->name('reservation.export');
//     Route::post('/contact-us/export', ContactUsExportController::class)->name('contact_us.export');

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');



//     Route::middleware(['isSuperAdmin'])->group(function () {
//         Route::resource('/user', UserController::class)->names('user');
//     });
// });


Route::controller(RegisterController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/previews', 'preview');
    Route::post('/upload', 'upload');
});


require __DIR__ . '/auth.php';
