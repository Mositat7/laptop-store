<?php

use App\Http\Controllers\Admin\ContactUserController;
use App\Http\Controllers\Admin\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('admin.index-6');
})->name('dashboard');

//Route::get('pages/ecommerce_products_edit', function () {
//    return view('admin.pages.ecommerce_products_edit');
//});
Route::get('pages/contact_userlist_grid', [ContactUserController::class, 'index'])
    ->name('contact_userlist.grid');
//Route::prefix('pages')->group(function () {
//    Route::get('/ecommerce_products', [ProductController::class, 'index'])->name('products.index');
//    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
//    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
//    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
//    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
//});
Route::prefix('pages')->group(function () {

    // لیست محصولات
    Route::get('/ecommerce_products', [ProductController::class, 'index'])->name('products.index');

    // افزودن محصول
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');

    // جزئیات محصول
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

    // ویرایش محصول
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

    // حذف محصول
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});
