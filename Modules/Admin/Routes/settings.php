<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\DefinitionPagesController;
use Modules\Admin\Http\Controllers\SettingsController;
use Modules\Admin\Http\Controllers\StoreSettingController;
use Modules\Admin\Http\Controllers\TaxNumberController;
use Modules\Admin\Http\Controllers\VATController;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.settings.')->group(function () {

    Route::get('/settings', [SettingsController::class, 'index'])->name('index');
    Route::get('/subscriptions', [SettingsController::class, 'subscriptions'])->name('subscriptions');
    Route::get('/profile', [SettingsController::class, 'profile'])->name('profile');
    Route::get('/store', [SettingsController::class, 'store'])->name('store');
    Route::get('/payment-methods', [SettingsController::class, 'paymentMethods'])->name('paymentMethods');
    Route::get('/rating', [SettingsController::class, 'rating'])->name('rating');
    Route::get('/countries', [SettingsController::class, 'countries'])->name('countries');
    Route::get('/additionalSetting', [SettingsController::class, 'additionalSetting'])->name('additionalSetting');
    Route::get('/vat', [VATController::class, 'index'])->name('vat.index');

    Route::resource('/taxNumber', TaxNumberController::class);
    
    Route::resource('/pages', DefinitionPagesController::class)->only('index','edit','destroy');

    Route::post('/store-setting', [StoreSettingController::class, 'store'])->name("store-setting");


});
