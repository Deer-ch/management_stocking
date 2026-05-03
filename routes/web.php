<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;

Route::resource('products', ProductController::class);
Route::resource('stocks', StockController::class);
Route::resource('categories', CategoryController::class);
Route::resource('suppliers', SupplierController::class);

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
