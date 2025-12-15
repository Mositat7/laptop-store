<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * نمایش فرم لاگین ادمین
     */
    public function showLoginForm()
    {
        return view('admin.pages.auth_login'); // مسیر view خودت
    }

    /**
     * لاگین ادمین
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // شرط ساده‌تر بدون چک کردن role
        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            // بعد از لاگین موفق، چک کنیم که کاربر واقعاً ادمین باشد
            $user = Auth::guard('admin')->user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::guard('admin')->logout();
                return back()->withErrors(['email' => 'شما دسترسی ادمین ندارید.']);
            }
        }

        return back()->withErrors([
            'email' => 'ایمیل یا پسورد اشتباه است.',
        ])->withInput();
    }
    /**
     * خروج از پنل ادمین
     */
    public function logout(Request $request)
    {
        // Logout از guard admin
        Auth::guard('admin')->logout();

        // پاک کردن session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // ریدایرکت به صفحه لاگین ادمین
        return redirect()->route('admin.login');
    }


}
