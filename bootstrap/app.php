<?php
//
//use Illuminate\Foundation\Application;
//use Illuminate\Foundation\Configuration\Exceptions;
//use Illuminate\Foundation\Configuration\Middleware;
//use Illuminate\Support\Facades\Route;
//
//return Application::configure(basePath: dirname(__DIR__))
//    ->withRouting(
//        web: __DIR__.'/../routes/web.php',
////        admin: __DIR__.'/../routes/admin.php',
//        commands: __DIR__.'/../routes/console.php',
//        health: '/up',
//        then: function () {
//            // 👇 اینجا admin.php رو اضافه می‌کنیم
//            Route::middleware('web')
//                ->prefix('admin')
//                ->name('admin.')
//                ->group(base_path('routes/admin.php'));
//        },
//    )
//    ->withMiddleware(function (Middleware $middleware): void {
//        //
//    })
//    ->withExceptions(function (Exceptions $exceptions): void {
//        //
//    })->create();


use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            // 👇 اضافه کردن فایل admin.php برای مسیرهای پنل ادمین
            Route::middleware('web')
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // در صورت نیاز می‌تونی اینجا middleware اضافه کنی
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // در صورت نیاز می‌تونی هندل خطاها رو اینجا تنظیم کنی
    })
    ->create();
