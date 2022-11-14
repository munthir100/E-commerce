<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\ProductController;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {
    Route::resource('products',ProductController::class);
});
