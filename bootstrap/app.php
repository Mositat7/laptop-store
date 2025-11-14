<?php
//use Illuminate\Foundation\Application;
//use Illuminate\Foundation\Configuration\Exceptions;
//use Illuminate\Foundation\Configuration\Middleware;
//use Illuminate\Support\Facades\Route;
//
//return Application::configure(basePath: dirname(__DIR__))
//    ->withRouting(
//        web: __DIR__ . '/../routes/web.php',
//        commands: __DIR__ . '/../routes/console.php',
//        health: '/up',
//        then: function () {
//            // 👇 اضافه کردن مسیرهای پنل ادمین
//            Route::middleware('web')
//                ->prefix('admin')
//                ->name('admin.')
//                ->group(base_path('routes/admin.php'));
//        }
//    ) // 👈 اینجا نباید کاما (,) باشه
//    ->withMiddleware(function (Middleware $middleware): void {
//        //
//    })
//    ->withExceptions(function (Exceptions $exceptions): void {
//        //
//    })
//    ->create();


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
            // 👇 اضافه کردن مسیرهای پنل ادمین
            Route::middleware('web')
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));
        }
    ) // کاما حذف شد
    ->withMiddleware(function (Middleware $middleware): void {
        // می‌توانید middleware دلخواه را اضافه کنید
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // می‌توانید handling دلخواه برای exceptions اضافه کنید
    })
    ->create();
