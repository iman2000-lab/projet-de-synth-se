<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



use App\Http\Controllers\AdminController;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/products', [AdminController::class, 'manageProducts'])->name('admin.products');
    Route::get('/admin/orders', [AdminController::class, 'manageOrders'])->name('admin.orders');
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users');
});



require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
