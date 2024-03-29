<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\VATController;
use Modules\Admin\Http\Controllers\SettingsController;
use Modules\Admin\Http\Controllers\TaxNumberController;
use Modules\Admin\Http\Controllers\StoreDesignController;
use Modules\Admin\Http\Controllers\StoreSettingController;
use Modules\Admin\Http\Controllers\DefinitionPagesController;
use Modules\Admin\Http\Controllers\ShippingMethodsController;


Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.settings.')->group(function () {


    Route::get('/settings', [SettingsController::class, 'index'])->name('index');

    Route::get('/subscriptions', [SettingsController::class, 'subscriptions'])->name('subscriptions');

    Route::get('/profile', [SettingsController::class, 'profile'])->name('profile');

    Route::get('/payment-methods', [SettingsController::class, 'paymentMethods'])->name('paymentMethods');

    Route::resource('shipping', ShippingMethodsController::class);


    Route::get('/teamwork', [SettingsController::class, 'teamwork'])->name('teamwork');

    Route::get('/domain', [SettingsController::class, 'domain'])->name('domain');

    Route::get('/services', [SettingsController::class, 'services'])->name('services');

    Route::get('/rating', [SettingsController::class, 'rating'])->name('rating');

    Route::get('/countries', [SettingsController::class, 'countries'])->name('countries');

    Route::get('/additionalSetting', [SettingsController::class, 'additionalSetting'])->name('additionalSetting');

    Route::get('/archive', [SettingsController::class, 'archive'])->name('archive');
    
    Route::get('/archive/clients', [SettingsController::class, 'clientsArchive'])->name('clientsArchive');

    Route::get('/vat', [VATController::class, 'index'])->name('vat.index');

    Route::resource('/taxNumber', TaxNumberController::class);

    Route::resource('/pages', DefinitionPagesController::class)->only('index', 'edit', 'destroy');

    Route::get('/store', [StoreSettingController::class, 'index'])->name('store');

    Route::post('/store-setting', [StoreSettingController::class, 'store'])->name("store-setting");

    Route::get('/storeDesign', [StoreDesignController::class, 'storeDesign'])->name('storeDesign');
    Route::get('/theme', [StoreDesignController::class, 'theme'])->name('theme');
    Route::get('/sections', [StoreDesignController::class, 'sections'])->name('sections');
});
