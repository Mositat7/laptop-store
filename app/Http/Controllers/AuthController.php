<?php

namespace App\Http\Controllers;

use App\Models\LoginPhone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|regex:/^09[0-9]{9}$/',
            'otp_code' => 'required|digits:6'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'داده‌های ورودی معتبر نیست',
                'errors' => $validator->errors()
            ], 422);
        }

        $phone = $request->phone;
        $otpCode = $request->otp_code;

        try {
            // 🔥 لاگ برای دیباگ
            Log::info('=== OTP VERIFICATION START ===');
            Log::info('Input:', [
                'phone' => $phone,
                'otp_code' => $otpCode
            ]);

            // 🔥 اول همه OTP های این شماره رو ببینیم
            $allOtps = LoginPhone::where('phone_number', $phone)->get();
            Log::info('All OTPs for this phone:', $allOtps->toArray());

            // پیدا کردن OTP در دیتابیس
            $loginPhone = LoginPhone::where('phone_number', $phone)
                ->where('otp_code', $otpCode)
                ->where('is_verified', false)
                ->where('otp_expires_at', '>', now())
                ->where('attempts', '<', 5)
                ->first();

            Log::info('Query result:', [
                'found' => $loginPhone ? 'YES' : 'NO',
                'otp_details' => $loginPhone ? [
                    'id' => $loginPhone->id,
                    'otp_code' => $loginPhone->otp_code,
                    'is_verified' => $loginPhone->is_verified,
                    'expires_at' => $loginPhone->otp_expires_at,
                    'attempts' => $loginPhone->attempts,
                    'is_expired' => $loginPhone->otp_expires_at < now() ? 'YES' : 'NO'
                ] : 'NOT_FOUND'
            ]);

            // 🔥 اگر OTP پیدا نشد، دلیل رو بررسی کنیم
            if (!$loginPhone) {
                // بررسی دلایل مختلف
                $reason = 'unknown';

                $expiredOtp = LoginPhone::where('phone_number', $phone)
                    ->where('otp_code', $otpCode)
                    ->where('otp_expires_at', '<', now())
                    ->first();

                if ($expiredOtp) {
                    $reason = 'expired';
                }

                $verifiedOtp = LoginPhone::where('phone_number', $phone)
                    ->where('otp_code', $otpCode)
                    ->where('is_verified', true)
                    ->first();

                if ($verifiedOtp) {
                    $reason = 'already_verified';
                }

                $wrongCode = LoginPhone::where('phone_number', $phone)
                    ->where('otp_code', '!=', $otpCode)
                    ->first();

                if ($wrongCode) {
                    $reason = 'wrong_code';
                }

                Log::warning('OTP validation failed:', [
                    'reason' => $reason,
                    'phone' => $phone,
                    'entered_code' => $otpCode
                ]);

                LoginPhone::where('phone_number', $phone)
                    ->where('is_verified', false)
                    ->where('otp_expires_at', '>', now())
                    ->increment('attempts');

                return response()->json([
                    'success' => false,
                    'message' => 'کد تایید معتبر نیست یا منقضی شده است'
                ], 422);
            }

            Log::info('OTP validation successful, updating...');

            $loginPhone->update([
                'is_verified' => true,
                'attempts' => 0
            ]);

            $user = User::where('phone', $phone)->first();

            if (!$user) {
                $user = User::create([
                    'name' => 'کاربر',
                    'family' => '',
                    'phone' => $phone,
                    'password' => Hash::make(Str::random(10)),
                    'role' => 'user',
                    'is_active' => true,
                ]);

                Log::info('New user created:', ['user_id' => $user->id]);
            } else {
                Log::info('Existing user found:', ['user_id' => $user->id]);
            }

            // لاگین کردن کاربر با session
            Auth::login($user, true);

            Log::info('User authentication:', [
                'auth_check' => Auth::check() ? 'YES' : 'NO',
                'user_id' => Auth::id()
            ]);


            Log::info('=== OTP VERIFICATION SUCCESS ===');

            return response()->json([
                'success' => true,
                'message' => 'ورود موفقیت‌آمیز',
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'family' => $user->family,
                    'phone' => $user->phone,
                    'role' => $user->role,
                    'full_name' => $user->name . ' ' . $user->family,
                ],
//                'token' => $token
            ]);

        } catch (\Exception $e) {
            Log::error('OTP Verification Error: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return response()->json([
                'success' => false,
                'message' => 'خطا در تایید کد'
            ], 500);
        }
    }
    public function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|regex:/^09[0-9]{9}$/',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'شماره تلفن معتبر نیست',
                'errors' => $validator->errors()
            ], 422);
        }

        $phone = $request->phone;
        $otpCode = rand(100000, 999999);

        try {
            Log::info('=== SEND OTP START ===');
            Log::info('Request:', ['phone' => $phone]);

            // حذف OTP های قدیمی برای این شماره
            $deletedCount = LoginPhone::where('phone_number', $phone)
                ->where('is_verified', false)
                ->where('otp_expires_at', '<', now())
                ->delete();

            Log::info('Deleted expired OTPs:', ['count' => $deletedCount]);

            $loginPhone = LoginPhone::updateOrCreate(
                ['phone_number' => $phone],
                [
                    'otp_code' => $otpCode,
                    'is_verified' => false,
                    'otp_expires_at' => now()->addMinutes(5),
                    'attempts' => 0
                ]
            );

            Log::info('OTP saved to database:', [
                'phone' => $phone,
                'otp_code' => $otpCode,
                'db_id' => $loginPhone->id,
                'expires_at' => $loginPhone->otp_expires_at->format('Y-m-d H:i:s')
            ]);

            // TODO: افزودن سرویس SMS
            Log::info("OTP Code for {$phone}: {$otpCode}");

            Log::info('=== SEND OTP SUCCESS ===');

            return response()->json([
                'success' => true,
                'message' => 'کد تایید ارسال شد',
                'otp_code' => $otpCode // در production حذف شود
            ]);

        } catch (\Exception $e) {
            Log::error('Send OTP Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'خطا در ارسال کد'
            ], 500);
        }
    }
    public function logout(Request $request)
    {
        try {
            // لاگ کردن برای دیباگ
            Log::info('Logout process started for user: ' . auth()->id());

            // ذخیره اطلاعات کاربر قبل از logout
            $userId = auth()->id();

            // انجام logout
            Auth::logout();

            // Invalidate session
            $request->session()->invalidate();

            // Regenerate token
            $request->session()->regenerateToken();

            Log::info('Logout process completed for user: ' . $userId);

            return redirect('/')->with('success', 'خروج از حساب کاربری با موفقیت انجام شد.');

        } catch (\Exception $e) {
            Log::error('Logout error: ' . $e->getMessage());
            return redirect('/')->with('error', 'خطا در خروج از حساب کاربری');
        }
    }
}
