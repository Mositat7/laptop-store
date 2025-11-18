<?php
////
////use App\Http\Controllers\Admin\BannerController;
////use App\Http\Controllers\Admin\BlogCategoryController;
//////use App\Http\Controllers\Admin\BlogPostController;
////use App\Http\Controllers\Admin\BrandController;
////use App\Http\Controllers\admin\CategoryController;
////use App\Http\Controllers\Admin\ColorController;
////use App\Http\Controllers\Admin\ContactUserController;
////use App\Http\Controllers\Admin\ProductController;
////use App\Http\Controllers\Admin\SizeController;
////use App\Http\Controllers\BlogPostController;
////use App\Models\User;
////use Illuminate\Support\Facades\Route;
////Route::get('/', function () {
////    return view('admin.index-6');
////})->name('dashboard');
////
////Route::get('pages/contact_userlist_grid', [ContactUserController::class, 'index'])
////    ->name('contact_userlist.grid');
////Route::prefix('pages')->group(function () {
////
////    // لیست محصولات
////    Route::get('/ecommerce_products', [ProductController::class, 'index'])->name('products.index');
////
////    // افزودن محصول
////    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
////    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
////
////    // جزئیات محصول
////    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
////
////    // ویرایش محصول
////    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
////    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
////
////    // حذف محصول
////    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
////});
////
////Route::prefix('colors')->name('colors.')->group(function () {
////    Route::get('/', [ColorController::class, 'index'])->name('index');
////    Route::get('/create', [ColorController::class, 'create'])->name('create');
////    Route::post('/', [ColorController::class, 'store'])->name('store');
////    Route::get('/{id}/edit', [ColorController::class, 'edit'])->name('edit');
////    Route::put('/{id}', [ColorController::class, 'update'])->name('update');
////    Route::delete('/{id}', [ColorController::class, 'destroy'])->name('destroy');
////});
////    Route::prefix('sizes')->name('sizes.')->group(function () {
////        Route::get('/', [SizeController::class, 'index'])->name('index');
////        Route::post('/', [SizeController::class, 'store'])->name('store');
////        Route::put('/{id}', [SizeController::class, 'update'])->name('update');
////        Route::delete('/{id}', [SizeController::class, 'destroy'])->name('destroy');
////});
////Route::prefix('brands')->name('brands.')->group(function () {
////    Route::get('/', [BrandController::class, 'index'])->name('index');
////    Route::post('/', [BrandController::class, 'store'])->name('store');
////    Route::put('/{id}', [BrandController::class, 'update'])->name('update');
////    Route::delete('/{id}', [BrandController::class, 'destroy'])->name('destroy');
////});
////Route::prefix('categories')->name('categories.')->group(function () {
////    Route::get('/', [CategoryController::class, 'index'])->name('index');
////    Route::post('/', [CategoryController::class, 'store'])->name('store');
////    Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
////    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
////});
////// مدیریت بنرها
////Route::prefix('banners')->name('banners.')->group(function () {
////    Route::get('/', [BannerController::class, 'index'])->name('index');
////    Route::post('/', [BannerController::class, 'store'])->name('store');
////    Route::put('/{id}', [BannerController::class, 'update'])->name('update');
////    Route::delete('/{id}', [BannerController::class, 'destroy'])->name('destroy');
////});
////
////// صفحه اصلی مدیریت وبلاگ (نمایش لیست پست‌ها)
////Route::get('/admin/blog-posts', [BlogPostController::class, 'index'])->name('blog-posts.index');
////
////// افزودن پست جدید
////Route::post('/admin/blog-posts', [BlogPostController::class, 'store'])->name('blog-posts.store');
////
////// ویرایش پست
////Route::put('/admin/blog-posts/{id}', [BlogPostController::class, 'update'])->name('blog-posts.update');
////
////// حذف پست
////Route::delete('/admin/blog-posts/{id}', [BlogPostController::class, 'destroy'])->name('blog-posts.destroy');
////
////// دسته‌بندی‌ها
////Route::post('/admin/blog-categories', [BlogCategoryController::class, 'store'])->name('blog-categories.store');
////Route::put('/admin/blog-categories/{id}', [BlogCategoryController::class, 'update'])->name('blog-categories.update');
////Route::delete('/admin/blog-categories/{id}', [BlogCategoryController::class, 'destroy'])->name('blog-categories.destroy');
//
//
//use App\Http\Controllers\Admin\AuthController;
//use App\Http\Controllers\Admin\BannerController;
//use App\Http\Controllers\Admin\BlogCategoryController;
////use App\Http\Controllers\Admin\BlogPostController;
//use App\Http\Controllers\Admin\BrandController;
//use App\Http\Controllers\Admin\CategoryController;
//use App\Http\Controllers\Admin\ColorController;
//use App\Http\Controllers\Admin\ContactUserController;
//use App\Http\Controllers\Admin\DashboardController;
//use App\Http\Controllers\Admin\ProductController;
//use App\Http\Controllers\Admin\SizeController;
////use App\Http\Controllers\BlogPostController;
//use App\Http\Controllers\Admin\BlogPostController;
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\OrderController;
//
//// داشبورد ادمین
//Route::get('/', function () {
//    return view('admin.index-6');
//})->name('dashboard');
//
//// لیست پیام‌های کاربران (Contact)
//Route::get('pages/contact_userlist_grid', [ContactUserController::class, 'index'])
//    ->name('contact_userlist.grid');
//
//// 🟩 گروه محصولات
//Route::prefix('pages')->group(function () {
//    Route::get('/ecommerce_products', [ProductController::class, 'index'])->name('products.index');
//    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
//    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
//    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
//    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
//    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
//    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
//});
//
//// 🟨 رنگ‌ها
//Route::prefix('colors')->name('colors.')->group(function () {
//    Route::get('/', [ColorController::class, 'index'])->name('index');
//    Route::post('/', [ColorController::class, 'store'])->name('store');
//    Route::put('/{id}', [ColorController::class, 'update'])->name('update');
//    Route::delete('/{id}', [ColorController::class, 'destroy'])->name('destroy');
//});
//
//// 🟦 سایزها
//Route::prefix('sizes')->name('sizes.')->group(function () {
//    Route::get('/', [SizeController::class, 'index'])->name('index');
//    Route::post('/', [SizeController::class, 'store'])->name('store');
//    Route::put('/{id}', [SizeController::class, 'update'])->name('update');
//    Route::delete('/{id}', [SizeController::class, 'destroy'])->name('destroy');
//});
//
//// 🟩 برندها
//Route::prefix('brands')->name('brands.')->group(function () {
//    Route::get('/', [BrandController::class, 'index'])->name('index');
//    Route::post('/', [BrandController::class, 'store'])->name('store');
//    Route::put('/{id}', [BrandController::class, 'update'])->name('update');
//    Route::delete('/{id}', [BrandController::class, 'destroy'])->name('destroy');
//});
//
//// 🟧 دسته‌بندی محصولات
//Route::prefix('categories')->name('categories.')->group(function () {
//    Route::get('/', [CategoryController::class, 'index'])->name('index');
//    Route::post('/', [CategoryController::class, 'store'])->name('store');
//    Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
//    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
//});
//
//// 🟥 مدیریت بنرها
//Route::prefix('banners')->name('banners.')->group(function () {
//    Route::get('/', [BannerController::class, 'index'])->name('index');
//    Route::post('/', [BannerController::class, 'store'])->name('store');
//    Route::put('/{id}', [BannerController::class, 'update'])->name('update');
//    Route::delete('/{id}', [BannerController::class, 'destroy'])->name('destroy');
//});
//
//// 🟪 مدیریت وبلاگ
//// 🟪 مدیریت وبلاگ
//Route::get('/blog-posts', [BlogPostController::class, 'index'])->name('blog-posts.index');
//Route::post('/blog-posts', [BlogPostController::class, 'store'])->name('blog-posts.store');
//Route::put('/blog-posts/{id}', [BlogPostController::class, 'update'])->name('blog-posts.update');
//Route::delete('/blog-posts/{id}', [BlogPostController::class, 'destroy'])->name('blog-posts.destroy');
//
//// دسته‌بندی‌ها
//Route::post('/blog-categories', [BlogCategoryController::class, 'store'])->name('blog-categories.store');
//Route::put('/blog-categories/{id}', [BlogCategoryController::class, 'update'])->name('blog-categories.update');
//Route::delete('/blog-categories/{id}', [BlogCategoryController::class, 'destroy'])->name('blog-categories.destroy');
//
//Route::get('/orders', [ OrderController::class, 'index'])->name('orders.index');
//Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
//
//Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
//Route::post('login', [AuthController::class, 'login'])->name('admin.login.submit');
//
//Route::middleware(['admin'])->group(function () {
//    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
//    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
//});
//
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactUserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\OrderController;


/*
|--------------------------------------------------------------------------
| Admin Login Routes (بدون middleware)
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');


/*
|--------------------------------------------------------------------------
| Admin Protected Routes (نیاز به لاگین ادمین)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {

    // Dashboard
    Route::get('/', function () {
        return view('admin.index-6');
    })->name('dashboard');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    /*
    |--------------------------------------------------------------------------
    | Contact Users
    |--------------------------------------------------------------------------
    */
    Route::get('pages/contact_userlist_grid', [ContactUserController::class, 'index'])
        ->name('contact_userlist.grid');


    /*
    |--------------------------------------------------------------------------
    | Products
    |--------------------------------------------------------------------------
    */
    Route::prefix('pages')->group(function () {

        Route::get('/ecommerce_products', [ProductController::class, 'index'])
            ->name('products.index');

        Route::get('/products/create', [ProductController::class, 'create'])
            ->name('products.create');

        Route::post('/products', [ProductController::class, 'store'])
            ->name('products.store');

        Route::get('/products/{product}', [ProductController::class, 'show'])
            ->name('products.show');

        Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
            ->name('products.edit');

        Route::put('/products/{product}', [ProductController::class, 'update'])
            ->name('products.update');

        Route::delete('/products/{product}', [ProductController::class, 'destroy'])
            ->name('products.destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Colors
    |--------------------------------------------------------------------------
    */
    Route::prefix('colors')->name('colors.')->group(function () {
        Route::get('/', [ColorController::class, 'index'])->name('index');
        Route::post('/', [ColorController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ColorController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ColorController::class, 'update'])->name('update');
        Route::delete('/{id}', [ColorController::class, 'destroy'])->name('destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Sizes
    |--------------------------------------------------------------------------
    */
    Route::prefix('sizes')->name('sizes.')->group(function () {
        Route::get('/', [SizeController::class, 'index'])->name('index');
        Route::post('/', [SizeController::class, 'store'])->name('store');
        Route::put('/{id}', [SizeController::class, 'update'])->name('update');
        Route::delete('/{id}', [SizeController::class, 'destroy'])->name('destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Brands
    |--------------------------------------------------------------------------
    */
    Route::prefix('brands')->name('brands.')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('index');
        Route::post('/', [BrandController::class, 'store'])->name('store');
        Route::put('/{id}', [BrandController::class, 'update'])->name('update');
        Route::delete('/{id}', [BrandController::class, 'destroy'])->name('destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    */
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::post('/', [CategoryController::class, 'store'])->name('store');
        Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Banners
    |--------------------------------------------------------------------------
    */
    Route::prefix('banners')->name('banners.')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('index');
        Route::post('/', [BannerController::class, 'store'])->name('store');
        Route::put('/{id}', [BannerController::class, 'update'])->name('update');
        Route::delete('/{id}', [BannerController::class, 'destroy'])->name('destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Blog Posts
    |--------------------------------------------------------------------------
    */
    Route::get('/blog-posts', [BlogPostController::class, 'index'])->name('blog-posts.index');
    Route::post('/blog-posts', [BlogPostController::class, 'store'])->name('blog-posts.store');
    Route::put('/blog-posts/{id}', [BlogPostController::class, 'update'])->name('blog-posts.update');
    Route::delete('/blog-posts/{id}', [BlogPostController::class, 'destroy'])->name('blog-posts.destroy');


    /*
    |--------------------------------------------------------------------------
    | Blog Categories
    |--------------------------------------------------------------------------
    */
    Route::post('/blog-categories', [BlogCategoryController::class, 'store'])->name('blog-categories.store');
    Route::put('/blog-categories/{id}', [BlogCategoryController::class, 'update'])->name('blog-categories.update');
    Route::delete('/blog-categories/{id}', [BlogCategoryController::class, 'destroy'])->name('blog-categories.destroy');


    /*
    |--------------------------------------------------------------------------
    | Orders
    |--------------------------------------------------------------------------
    */
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

});
//
//use Illuminate\Support\Facades\Route;
//
//// Controllers
//use App\Http\Controllers\Admin\AuthController;
//use App\Http\Controllers\Admin\DashboardController;
//use App\Http\Controllers\Admin\ContactUserController;
//use App\Http\Controllers\Admin\ProductController;
//use App\Http\Controllers\Admin\ColorController;
//use App\Http\Controllers\Admin\SizeController;
//use App\Http\Controllers\Admin\BrandController;
//use App\Http\Controllers\Admin\CategoryController;
//use App\Http\Controllers\Admin\BannerController;
//use App\Http\Controllers\Admin\BlogPostController;
//use App\Http\Controllers\Admin\BlogCategoryController;
//use App\Http\Controllers\Admin\OrderController;
//
//
//// همه روت‌های ادمین
//Route::prefix('admin')->name('admin.')->group(function () {
//
//    /*
//    |--------------------------------------------------------------------------
//    | Login (بدون middleware)
//    |--------------------------------------------------------------------------
//    */
//    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
//
//
//    /*
//    |--------------------------------------------------------------------------
//    | Protected Routes (نیاز به لاگین)
//    |--------------------------------------------------------------------------
//    */
//    Route::middleware(['admin'])->group(function () {
//
//        // داشبورد
//        Route::get('/', function () {
//            return view('admin.index-6');
//        })->name('dashboard');
//
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Contact Users
//        |--------------------------------------------------------------------------
//        */
//        Route::get('pages/contact_userlist_grid', [ContactUserController::class, 'index'])
//            ->name('contact_userlist.grid');
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Products (از روت قبلیت – بدون تغییر)
//        |--------------------------------------------------------------------------
//        */
//        Route::prefix('pages')->group(function () {
//
//            Route::get('/ecommerce_products', [ProductController::class, 'index'])
//                ->name('products.index');
//
//            Route::get('/products/create', [ProductController::class, 'create'])
//                ->name('products.create');
//
//            Route::post('/products', [ProductController::class, 'store'])
//                ->name('products.store');
//
//            Route::get('/products/{product}', [ProductController::class, 'show'])
//                ->name('products.show');
//
//            Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
//                ->name('products.edit');
//
//            Route::put('/products/{product}', [ProductController::class, 'update'])
//                ->name('products.update');
//
//            Route::delete('/products/{product}', [ProductController::class, 'destroy'])
//                ->name('products.destroy');
//        });
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Colors
//        |--------------------------------------------------------------------------
//        */
//        Route::prefix('colors')->name('colors.')->group(function () {
//            Route::get('/', [ColorController::class, 'index'])->name('index');
//            Route::post('/', [ColorController::class, 'store'])->name('store');
//            Route::get('/{id}/edit', [ColorController::class, 'edit'])->name('edit');
//            Route::put('/{id}', [ColorController::class, 'update'])->name('update');
//            Route::delete('/{id}', [ColorController::class, 'destroy'])->name('destroy');
//        });
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Sizes
//        |--------------------------------------------------------------------------
//        */
//        Route::prefix('sizes')->name('sizes.')->group(function () {
//            Route::get('/', [SizeController::class, 'index'])->name('index');
//            Route::post('/', [SizeController::class, 'store'])->name('store');
//            Route::put('/{id}', [SizeController::class, 'update'])->name('update');
//            Route::delete('/{id}', [SizeController::class, 'destroy'])->name('destroy');
//        });
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Brands
//        |--------------------------------------------------------------------------
//        */
//        Route::prefix('brands')->name('brands.')->group(function () {
//            Route::get('/', [BrandController::class, 'index'])->name('index');
//            Route::post('/', [BrandController::class, 'store'])->name('store');
//            Route::put('/{id}', [BrandController::class, 'update'])->name('update');
//            Route::delete('/{id}', [BrandController::class, 'destroy'])->name('destroy');
//        });
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Categories
//        |--------------------------------------------------------------------------
//        */
//        Route::prefix('categories')->name('categories.')->group(function () {
//            Route::get('/', [CategoryController::class, 'index'])->name('index');
//            Route::post('/', [CategoryController::class, 'store'])->name('store');
//            Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
//            Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
//        });
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Banners
//        |--------------------------------------------------------------------------
//        */
//        Route::prefix('banners')->name('banners.')->group(function () {
//            Route::get('/', [BannerController::class, 'index'])->name('index');
//            Route::post('/', [BannerController::class, 'store'])->name('store');
//            Route::put('/{id}', [BannerController::class, 'update'])->name('update');
//            Route::delete('/{id}', [BannerController::class, 'destroy'])->name('destroy');
//        });
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Blog Posts
//        |--------------------------------------------------------------------------
//        */
//        Route::get('/blog-posts', [BlogPostController::class, 'index'])->name('blog-posts.index');
//        Route::post('/blog-posts', [BlogPostController::class, 'store'])->name('blog-posts.store');
//        Route::put('/blog-posts/{id}', [BlogPostController::class, 'update'])->name('blog-posts.update');
//        Route::delete('/blog-posts/{id}', [BlogPostController::class, 'destroy'])->name('blog-posts.destroy');
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Blog Categories (روت قبلت)
//        |--------------------------------------------------------------------------
//        */
//        Route::post('/blog-categories', [BlogCategoryController::class, 'store'])->name('blog-categories.store');
//        Route::put('/blog-categories/{id}', [BlogCategoryController::class, 'update'])->name('blog-categories.update');
//        Route::delete('/blog-categories/{id}', [BlogCategoryController::class, 'destroy'])->name('blog-categories.destroy');
//
//
//        /*
//        |--------------------------------------------------------------------------
//        | Orders
//        |--------------------------------------------------------------------------
//        */
//        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
//        Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
//    });
//});
