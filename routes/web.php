<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AboutController,
    AuthController,
    BlogController,
    CartController,
    CategoryController,
    CheckoutController,
    ContactController,
    HomeController,
    ProductController,
    ProfileController,
    ReviewController,
    FavoriteController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| تمام مسیرهای وب (غیر API) اینجا تعریف می‌شوند.
| این فایل ساختاردهی شده تا هم خوانایی بالا بره و هم نگهداری راحت‌تر بشه.
| هر بخش با توضیح و گروه‌بندی مشخص از هم جدا شده است.
|
*/


/*
|--------------------------------------------------------------------------
| 🏠 Public Routes (Accessible without authentication)
|--------------------------------------------------------------------------
*/

// صفحه اصلی سایت
Route::get('/', [HomeController::class, 'index'])->name('home');

// صفحات عمومی
Route::view('/aboutUs', 'project.aboutUs')->name('about'); // نسخه استاتیک
// یا در صورت کنترلر پویا:
Route::get('/aboutUs', [AboutController::class, 'index'])->name('about');

Route::get('/contactUs', [ContactController::class, 'index'])->name('contact');

// نتایج جستجو
Route::get('/search', [ProductController::class, 'search'])->name('search');

/*
|--------------------------------------------------------------------------
| 🛍️ Product & Category Routes
|--------------------------------------------------------------------------
*/
Route::prefix('products')->group(function () {
    Route::get('/best-selling', [ProductController::class, 'bestSelling'])->name('products.best-selling');
    Route::get('/newest', [ProductController::class, 'newest'])->name('products.newest');
    Route::get('/{product}', [ProductController::class, 'show'])->name('product.show');
});


Route::middleware('auth')->group(function () {
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
    Route::post('/favorites/toggle/{product}', [FavoriteController::class, 'toggle'])->name('favorites.toggle');
});

// دسته‌بندی‌ها
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

/*
|--------------------------------------------------------------------------
| ✍️ Blog Routes
|--------------------------------------------------------------------------
*/
Route::prefix('blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
});

/*
|--------------------------------------------------------------------------
| 💬 Reviews & Feedback
|--------------------------------------------------------------------------
*/
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');


/*
|--------------------------------------------------------------------------
| 📲 OTP Authentication (Mobile Login)
|--------------------------------------------------------------------------
*/
Route::prefix('api')->group(function () {
    Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('api.sendOtp');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('api.verifyOtp');
});


/*
|--------------------------------------------------------------------------
| 🔒 Authenticated Routes (Requires Login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | 👤 User Profile
    |--------------------------------------------------------------------------
    */
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile');
        Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
    });

    /*
    |--------------------------------------------------------------------------
    | 🚪 Logout
    |--------------------------------------------------------------------------
    */
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    /*
    |--------------------------------------------------------------------------
    | 🛒 Shopping Cart
    |--------------------------------------------------------------------------
    */
    Route::prefix('cart')->group(function () {
        Route::post('/add', [CartController::class, 'addToCart'])->name('cart.add');
        Route::post('/update', [CartController::class, 'update'])->name('cart.update');
        Route::post('/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
    });

    /*
    |--------------------------------------------------------------------------
    | 💳 Checkout & Payment
    |--------------------------------------------------------------------------
    */
    Route::prefix('checkout')->group(function () {
        Route::get('/', [CheckoutController::class, 'index'])->name('checkout.index');
        Route::post('/', [CheckoutController::class, 'store'])->name('checkout.store');
        Route::post('/payment', [CheckoutController::class, 'payment'])->name('checkout.payment');
        Route::post('/select-address', [CheckoutController::class, 'selectAddress'])->name('checkout.selectAddress');
        Route::get('/success/{order_number}', [CheckoutController::class, 'success'])->name('checkout.success');
        Route::get('/complete/{order}', [CheckoutController::class, 'complete'])->name('checkout.complete');
    });

    /*
    |--------------------------------------------------------------------------
    | 📩 Contact Form (Authenticated Users)
    |--------------------------------------------------------------------------
    */
    Route::post('/contactUs', [ContactController::class, 'store'])->name('contact.store');
});
