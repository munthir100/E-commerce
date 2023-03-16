<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AuthController;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\BrandController;
use Modules\Admin\Http\Controllers\OrderController;
use Modules\Admin\Http\Controllers\ClientController;
use Modules\Admin\Http\Controllers\ProductController;
use Modules\Admin\Http\Controllers\CategoriesController;
use Modules\Admin\Http\Controllers\ReportController;

Route::prefix('admin')->middleware(['auth','role:admin'])->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('categories', CategoriesController::class,);
    Route::resource('products', ProductController::class,);
    Route::resource('brands', BrandController::class,);
    Route::resource('orders', OrderController::class,);
    Route::resource('clients', ClientController::class,);
    Route::resource('reports', ReportController::class,);
});
Route::get('login', [AuthController::class, 'adminLoginForm'])->name('login');
Route::get('register', [AuthController::class, 'adminRegisterForm'])->name('register');
