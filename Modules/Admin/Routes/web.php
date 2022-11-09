<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Livewire\Categories;
use Modules\Admin\Http\Livewire\Dashboard;
use Modules\Admin\Http\Livewire\StoreInfo;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {
    
    Route::get('/store-info',[StoreInfo::class,'__invoke']);

    Route::get('/dashboard', [Dashboard::class, '__invoke'])->name('dashboard');
    Route::get('/categories', [Categories::class, '__invoke'])->name('categories.index');
});
