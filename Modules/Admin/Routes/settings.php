<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\SettingsController;
use Modules\Admin\Http\Controllers\StoreSettingController;



Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.settings.')->group(function () {

    Route::get('/settings', [SettingsController::class, 'index'])->name('index');
    Route::get('/subscriptions', [SettingsController::class, 'subscriptions'])->name('subscriptions');
    Route::get('/profile', [SettingsController::class, 'profile'])->name('profile');
    Route::get('/store', [SettingsController::class, 'store'])->name('store');
    
});
