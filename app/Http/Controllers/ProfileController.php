<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * نمایش صفحه پروفایل کاربر
     */
    public function index()
    {
        // بررسی دستی که کاربر لاگین هست
        if (!Auth::check()) {
            return redirect('/')->with('error', 'لطفا ابتدا وارد شوید');
        }

        $user = Auth::user();

        // آمار کاربر
        $stats = [
            'active_orders' => 3,
            'completed_orders' => 12,
            'comments' => 5,
            'open_tickets' => 2,
        ];

        // سفارش‌های اخیر
        $recent_orders = [
            [
                'id' => 1001,
                'date' => '۱۴۰۳/۰۷/۲۳',
                'amount' => '۱,۲۵۰,۰۰۰',
                'status' => 'تحویل شده'
            ],
            [
                'id' => 1002,
                'date' => '۱۴۰۳/۰۷/۲۲',
                'amount' => '۲,۵۰۰,۰۰۰',
                'status' => 'در حال ارسال'
            ],
            [
                'id' => 1003,
                'date' => '۱۴۰۳/۰۷/۲۰',
                'amount' => '۱,۸۰۰,۰۰۰',
                'status' => 'تحویل شده'
            ]
        ];

        return view('project.profile', compact('user', 'stats', 'recent_orders'));
    }

    /**
     * بروزرسانی اطلاعات پروفایل
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // اعتبارسنجی
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'family' => 'nullable|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ], [
            'name.required' => 'لطفا نام را وارد کنید.',
            'email.required' => 'لطفا ایمیل را وارد کنید.',
            'email.unique' => 'این ایمیل قبلاً استفاده شده است.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('success', 'اطلاعات با موفقیت بروزرسانی شد.');
        }

        // ذخیره تغییرات
        $user->update([
            'name' => $request->name,
            'family' => $request->family,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'اطلاعات با موفقیت بروزرسانی شد.');
    }
}
