<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DashboardController;

// ----------------------
// Static Pages (Guest)
// ----------------------
Route::view('/', 'pages.home')->name('home');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/about', 'pages.about')->name('about');

// ----------------------
// Auth Routes
// ----------------------
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// ----------------------
// Dashboard
// ----------------------
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


// ----------------------
// Super Admin Only
// ----------------------
Route::middleware(['role:super_admin'])->group(function () {
    Route::resource('admins', AdminController::class);
});

// ----------------------
// Guest Accessible (No Login)
// ----------------------
Route::get('complaints/create', [ComplaintController::class, 'create'])->name('complaints.create');
Route::post('complaints', [ComplaintController::class, 'store'])->name('complaints.store');

// ----------------------
// Super Admin & Admin
// ----------------------
Route::middleware(['role:super_admin,admin'])->group(function () {
    Route::resource('categories', CategoryController::class);

    Route::get('complaints', [ComplaintController::class, 'index'])->name('complaints.index');
    Route::get('complaints/{complaint}', [ComplaintController::class, 'show'])->name('complaints.show');
    Route::get('complaints/{complaint}/edit', [ComplaintController::class, 'edit'])->name('complaints.edit');
    Route::put('complaints/{complaint}', [ComplaintController::class, 'update'])->name('complaints.update');
    Route::delete('complaints/{complaint}', [ComplaintController::class, 'destroy'])->name('complaints.destroy');
});