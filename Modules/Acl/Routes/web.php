<?php

use Illuminate\Support\Facades\Route;
use Modules\Acl\Http\Livewire\Auth\LoginLivewire;
use Modules\Acl\Http\Livewire\Auth\Register;


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

Route::prefix('acl')->group(function () {
    Route::get('/', 'AclController@index');
});
Route::get('/register', [Register::class, '__invoke']);

Route::post('/register', [Register::class, 'register']);

Route::get('/login', [LoginLivewire::class, '__invoke'])->name('login');

Route::post('/login', [LoginLivewire::class, 'login']);

Route::get('/logout', [LoginLivewire::class, 'logout']);