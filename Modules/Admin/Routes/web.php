<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AuthController;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\BrandController;
use Modules\Admin\Http\Controllers\OrderController;
use Modules\Admin\Http\Controllers\ClientController;
use Modules\Admin\Http\Controllers\ReportController;
use Modules\Admin\Http\Controllers\ProductController;
use Modules\Admin\Http\Controllers\CategoriesController;




Route::prefix('admin')->middleware(['auth', 'role:admin', 'local'])->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('categories', CategoriesController::class,);
    Route::resource('products', ProductController::class,);
    Route::resource('brands', BrandController::class,);
    Route::resource('orders', OrderController::class,);
    Route::resource('clients', ClientController::class,);
    Route::resource('reports', ReportController::class,);
});
Route::get('login', [AuthController::class, 'adminLoginForm'])->name('login');
Route::get('forgetPassword', [AuthController::class, 'forgetPassword'])->name('admin.forgetPassword');
Route::get('resetPassword', [AuthController::class, 'resetPassword'])->name('admin.resetPassword');
Route::get('register', [AuthController::class, 'adminRegisterForm'])->name('register');
Route::post('logout', function () {
    Auth::logout();
    return redirect()->back();
})->name('adminLogout');
Route::get('logout', function () {
    Auth::logout();
    return redirect()->back();
})->name('logout');

Route::post('change-language', [AdminController::class, 'localize'])->name('admin.change.language');
