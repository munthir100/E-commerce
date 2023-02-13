<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\SettingsController;











Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.settings.')->group(function () {

    Route::get('/settings', [SettingsController::class, 'index'])->name('index');
    Route::get('/subscriptions', [SettingsController::class, 'subscriptions'])->name('subscriptions');
    Route::get('/profile', [SettingsController::class, 'profile'])->name('profile');
    Route::get('/store', [SettingsController::class, 'store'])->name('store');
    Route::get('/payment-methods', [SettingsController::class, 'paymentMethods'])->name('paymentMethods');
    Route::get('/pages', [SettingsController::class, 'pages'])->name('pages');
    
});
