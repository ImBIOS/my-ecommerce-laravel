<?php

use App\Http\Controllers\MarketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


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

Route::resource('layouts.master', MarketController::class);
Route::get('/', [MarketController::class, 'home'])->name('home');
Route::get('/detail', [MarketController::class, 'detail'])->name('detail');
Route::get('/keranjang', [MarketController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout', [MarketController::class, 'checkout'])->name('checkout');
Route::get('/success', [MarketController::class, 'success'])->name('success');
Route::get('/detail/{product}', [ProductsController::class, 'detail']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [ProductsController::class, 'index'])->name('dashboard');

    Route::get('/product', [ProductsController::class, 'add']);
    Route::post('/product', [ProductsController::class, 'create']);

    Route::get('/product/{product}', [ProductsController::class, 'edit']);
    Route::post('/product/{product}', [ProductsController::class, 'update']);
});
