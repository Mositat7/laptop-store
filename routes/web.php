<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// اضافه کردن route های POST برای احراز هویت
// Route login برای redirect middleware auth
//نمایش تعداد ویو
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::post('/api/send-otp', [AuthController::class, 'sendOtp']);
Route::post('/api/verify-otp', [AuthController::class, 'verifyOtp']);
//نتیجه سرچ
Route::get('/search', [ProductController::class, 'search'])->name('search');
//حارج شدن از حساب
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
// Route های پروفایل - بدون middleware
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
//مشاهده همه پر فروش ترین و جدیدترین
Route::get('/products/newest', [ProductController::class, 'newest'])->name('products.newest');
Route::get('/products/best-selling', [ProductController::class, 'bestSelling'])->name('products.best-selling');
// صفحه محصول
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
//اضافه کردن محصول
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
//آپدیت سبد
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
//حذف کردن
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
// روت برای نمایش محصولات هر دسته‌بندی
//Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/aboutUs', function () {
    return view('project.aboutUs');
});
// صفحه تماس با ما
Route::get('/contactUs', [ContactController::class, 'index'])->name('contact');
Route::post('/contactUs', [ContactController::class, 'store'])->name('contact.store');
// برای صفحه اصلی مقالات
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
// در routes/web.php
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
// صفحه درباره ما
Route::get('/aboutUs', [AboutController::class, 'index'])->name('about');
////فیلتر مقالع ها
//Route::get('/blog/filter', [BlogController::class, 'filter'])->name('blog.filter');
//// برای نمایش مقاله
//Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/cart', function () {
    return view('project.blogs');
});
Route::get('/checkout', function () {
    return view('project.checkout');
});
Route::get('/contactUs', function () {
    return view('project.contactUs');
});

Route::get('/dashboard', function () {
    return view('project.dashboard');
});

//Route::get('/profile', function () {
//    return view('project.profile');
//})->name('profile')->middleware('auth:sanctum');
//
//Route::get('/search', function () {
//    return view('project.search');
//});

