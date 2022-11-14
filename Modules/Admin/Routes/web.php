<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\CategoriesController;
use Modules\Admin\Http\Controllers\ProductController;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {
    Route::resource('categories', CategoriesController::class,);
    Route::resource('products', ProductController::class,);
});
