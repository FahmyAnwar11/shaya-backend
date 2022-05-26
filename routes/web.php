<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

Auth::routes(['register' => false]);

// Route::get('Resources\views\pages\products\{id}\gallery', 'ProductController@gallery')->name('products.gallery');
// Route::get('Resources\views\pages\transactions\{id}\set-status', 'TransactionController@setStatus')->name('transactions.status');



Route::get('/products/{id}/gallery', [ProductController::class, 'gallery'])->name('products.gallery');
Route::resource('products', ProductController::class);
Route::resource('product-galleries', ProductGalleryController::class);
Route::get('/transactions/{id}/set-status', [TransactionController::class, 'setStatus'])->name('transactions.status');
Route::resource('transactions', TransactionController::class);

