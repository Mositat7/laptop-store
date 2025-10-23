<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use Verta;
class ProfileController extends Controller
{
    private function translateOrderStatus(string $status): string
    {
        return match ($status) {
            'pending' => 'پرداخت شده',
            'paid' => 'پرداخت شده',
            'processing' => 'در حال پردازش',
            'shipped' => 'ارسال شده',
            'delivered' => 'تحویل شده',
            'completed' => 'کامل شده',
            'cancelled' => 'لغو شده',
            default => $status,
        };
    }
    /**
     * نمایش صفحه پروفایل کاربر
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/')->with('error', 'لطفاً ابتدا وارد شوید.');
        }

        $user = Auth::user();

        // آمار کاربر (اگر بخواهی بعداً از دیتابیس بگیری، می‌تونی اینجا هم کوئری بزنی)
        $stats = [
            'active_orders' => $user->orders()->whereNotIn('status', ['completed', 'cancelled'])->count(),
            'completed_orders' => $user->orders()->where('status', 'completed')->count(),
            'comments' => $user->reviews()->count(), // ✅ تعداد نظرات واقعی
            'open_tickets' => 0, // اگر سیستم تیکت داری، اینجا هم کوئری بزن
        ];

        // ✅ سفارش‌های اخیر از دیتابیس (۳ تا آخرین سفارش)
        $recent_orders = $user->orders()
            ->select('id', 'created_at', 'total', 'status')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get()
            ->map(function ($order) {
                return [
                    'id' => $order->id,
                    // ✅ تاریخ میلادی ساده — بدون نیاز به پکیج اضافه
                    'date' => $order->created_at ? $order->created_at->format('Y/m/d') : '—',
                    'amount' => number_format($order->total),
                    'status' => $this->translateOrderStatus($order->status),
                ];
            });

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
