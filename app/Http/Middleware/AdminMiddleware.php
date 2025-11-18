<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // گارد admin را چک کن
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        }

        // نقش باید ادمین باشد
        if (Auth::guard('admin')->user()->role !== 'admin') {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login')->withErrors('اجازه دسترسی ندارید.');
        }

        return $next($request);
    }
}
