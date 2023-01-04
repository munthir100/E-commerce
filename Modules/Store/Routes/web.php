<?php

use Illuminate\Support\Facades\Route;
use Modules\Store\Http\Controllers\StoreController;
use Modules\Store\Http\Controllers\WishlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('{storeLink}')->name('store.')->group(function () {
    Route::get('/', [StoreController::class, 'index'])->name('index');
    Route::get('/product/{productId}/details', [StoreController::class, 'productDetails'])->name('product-details');
   
    Route::get('/checkout', [StoreController::class,'checkout'])->name('checkout');

    route::get('/category/{title}/products', [StoreController::class, 'categoryProducts'])->name('shopCategory');

    route::resource('/wishlist', WishlistController::class);
});
