<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('admin.index-6');
})->name('dashboard');

Route::get('pages/ecommerce_products_edit', function () {
    return view('admin.pages.ecommerce_products_edit');
});
Route::prefix('pages')->group(function () {
    Route::get('/ecommerce_products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

