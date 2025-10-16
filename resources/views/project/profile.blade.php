{{--<!DOCTYPE html>--}}
{{--<html lang="fa" dir="rtl">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">--}}
{{--    <title>پروفایل کاربر - فروشگاه دیجی استار</title>--}}
{{--</head>--}}

{{--<body class="max-w-[1700px] mx-auto">--}}

{{--<header class="max-w-[1700px] fixed w-full z-50 flex md:block bg-white md:bg-transparent">--}}
{{--    @include('partial.header')--}}
{{--    --}}{{----}}{{-- nav--}}
{{--    @include('partial.nav')--}}
{{--</header>--}}

{{--<main class="pt-24 md:pt-48 px-2 md:px-10 min-h-screen">--}}
{{--    <div class="max-w-6xl mx-auto">--}}

{{--        <!-- هدر پروفایل -->--}}
{{--        <div class="bg-gradient-to-l from-primary-50 to-blue-50 rounded-2xl p-6 md:p-8 mb-8 border border-primary-100">--}}
{{--            <div class="flex flex-col md:flex-row items-center gap-6">--}}
{{--                <!-- آواتار کاربر -->--}}
{{--                <div class="relative">--}}
{{--                    <div class="w-24 h-24 bg-gradient-to-br from-primary-500 to-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">--}}
{{--                        {{ substr(auth()->user()->name, 0, 1) }}--}}
{{--                    </div>--}}
{{--                    <div class="absolute bottom-2 right-2 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>--}}
{{--                </div>--}}

{{--                <!-- اطلاعات کاربر -->--}}
{{--                <div class="flex-1 text-center md:text-right">--}}
{{--                    <h1 class="text-2xl md:text-3xl font-yekanBakhBold text-zinc-800 mb-2">--}}
{{--                        {{ auth()->user()->name }} {{ auth()->user()->family ? auth()->user()->family : '' }}--}}
{{--                    </h1>--}}
{{--                    <div class="w-full p-3 bg-zinc-50 border border-zinc-200 rounded-lg text-zinc-800">--}}
{{--                        {{ auth()->user()->family ? auth()->user()->family : 'ثبت نشده' }}--}}
{{--                    </div>--}}
{{--                    <p class="text-zinc-600 mb-3">{{ auth()->user()->phone }}</p>--}}
{{--                    <div class="flex flex-wrap justify-center md:justify-start gap-3 text-sm">--}}
{{--              <span class="bg-white px-3 py-1 rounded-full border border-primary-200 text-primary-700">--}}
{{--                              عضویت از {{ \Morilog\Jalali\Jalalian::fromCarbon(auth()->user()->created_at)->format('Y/m/d') }}--}}
{{--              </span>--}}
{{--                        <span class="bg-white px-3 py-1 rounded-full border border-blue-200 text-blue-700">--}}
{{--                {{ auth()->user()->role === 'admin' ? 'مدیر' : 'کاربر' }}--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- محتوای اصلی پروفایل -->--}}
{{--        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">--}}

{{--            <!-- سایدبار منو -->--}}
{{--            <div class="lg:col-span-1">--}}
{{--                <div class="bg-white rounded-2xl border border-zinc-200 p-6 sticky top-32">--}}
{{--                    <nav class="space-y-2">--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 bg-primary-50 text-primary-700 rounded-lg border-r-4 border-primary-500">--}}
{{--                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>--}}
{{--                            </svg>--}}
{{--                            <span>پیشخوان</span>--}}
{{--                        </a>--}}

{{--                        <a href="#" class="flex items-center gap-3 p-3 text-zinc-600 hover:bg-zinc-50 rounded-lg transition">--}}
{{--                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>--}}
{{--                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>سفارش‌های من</span>--}}
{{--                        </a>--}}

{{--                        <a href="#" class="flex items-center gap-3 p-3 text-zinc-600 hover:bg-zinc-50 rounded-lg transition">--}}
{{--                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>--}}
{{--                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>نظرات من</span>--}}
{{--                        </a>--}}

{{--                        <a href="#" class="flex items-center gap-3 p-3 text-zinc-600 hover:bg-zinc-50 rounded-lg transition">--}}
{{--                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>تیکت‌های پشتیبانی</span>--}}
{{--                        </a>--}}

{{--                        <a href="#" class="flex items-center gap-3 p-3 text-zinc-600 hover:bg-zinc-50 rounded-lg transition">--}}
{{--                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>تغییر رمز عبور</span>--}}
{{--                        </a>--}}

{{--                        <button onclick="logout()" class="w-full flex items-center gap-3 p-3 text-red-600 hover:bg-red-50 rounded-lg transition mt-4">--}}
{{--                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>خروج از حساب</span>--}}
{{--                        </button>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- محتوای اصلی -->--}}
{{--            <div class="lg:col-span-2 space-y-6">--}}

{{--                <!-- کارت آمار سریع -->--}}
{{--                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">--}}
{{--                    <div class="bg-white rounded-xl border border-zinc-200 p-4 text-center">--}}
{{--                        <div class="text-2xl font-bold text-primary-600 mb-1">۳</div>--}}
{{--                        <div class="text-sm text-zinc-600">سفارش‌های فعال</div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white rounded-xl border border-zinc-200 p-4 text-center">--}}
{{--                        <div class="text-2xl font-bold text-green-600 mb-1">۱۲</div>--}}
{{--                        <div class="text-sm text-zinc-600">سفارش‌های تکمیل شده</div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white rounded-xl border border-zinc-200 p-4 text-center">--}}
{{--                        <div class="text-2xl font-bold text-blue-600 mb-1">۵</div>--}}
{{--                        <div class="text-sm text-zinc-600">نظرات ثبت شده</div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white rounded-xl border border-zinc-200 p-4 text-center">--}}
{{--                        <div class="text-2xl font-bold text-orange-600 mb-1">۲</div>--}}
{{--                        <div class="text-sm text-zinc-600">تیکت‌های باز</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- سفارش‌های اخیر -->--}}
{{--                <div class="bg-white rounded-2xl border border-zinc-200 p-6">--}}
{{--                    <div class="flex items-center justify-between mb-6">--}}
{{--                        <h2 class="text-lg font-yekanBakhBold text-zinc-800">سفارش‌های اخیر</h2>--}}
{{--                        <a href="#" class="text-primary-600 hover:text-primary-700 text-sm flex items-center gap-1">--}}
{{--                            مشاهده همه--}}
{{--                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <div class="space-y-4">--}}
{{--                        @foreach([1,2,3] as $order)--}}
{{--                            <div class="flex items-center justify-between p-4 border border-zinc-100 rounded-lg hover:bg-zinc-50 transition">--}}
{{--                                <div class="flex items-center gap-4">--}}
{{--                                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center">--}}
{{--                                        <svg class="w-6 h-6 text-primary-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <div class="font-medium text-zinc-800">سفارش #{{ 1000 + $order }}</div>--}}
{{--                                        <div class="text-sm text-zinc-500">تاریخ: ۱۴۰۳/۰۷/۲۳</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="text-left">--}}
{{--                                    <div class="font-medium text-zinc-800">۱,۲۵۰,۰۰۰ تومان</div>--}}
{{--                                    <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">تحویل شده</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- اطلاعات شخصی -->--}}
{{--                <div class="bg-white rounded-2xl border border-zinc-200 p-6">--}}
{{--                    <h2 class="text-lg font-yekanBakhBold text-zinc-800 mb-6">اطلاعات شخصی</h2>--}}

{{--                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">--}}
{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-zinc-700 mb-2">نام</label>--}}
{{--                            <div class="w-full p-3 bg-zinc-50 border border-zinc-200 rounded-lg text-zinc-800">--}}
{{--                                {{ auth()->user()->name }}--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-zinc-700 mb-2">نام خانوادگی</label>--}}
{{--                            <div class="w-full p-3 bg-zinc-50 border border-zinc-200 rounded-lg text-zinc-800">--}}
{{--                                {{ auth()->user()->family }}--}}
{{--                                {{ substr(auth()->user()->name, 0, 1) }}--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-zinc-700 mb-2">شماره تلفن</label>--}}
{{--                            <div class="w-full p-3 bg-zinc-50 border border-zinc-200 rounded-lg text-zinc-800">--}}
{{--                                {{ auth()->user()->phone }}--}}
{{--                                <p class="text-zinc-600 mb-3">{{ auth()->user()->phone }}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-zinc-700 mb-2">ایمیل</label>--}}
{{--                            <div class="w-full p-3 bg-zinc-50 border border-zinc-200 rounded-lg text-zinc-800">--}}
{{--                                {{ auth()->user()->email ?? 'ثبت نشده' }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <button class="mt-6 px-6 py-3 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition flex items-center gap-2">--}}
{{--                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>--}}
{{--                        </svg>--}}
{{--                        ویرایش اطلاعات--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</main>--}}

{{--<footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">--}}
{{--    @include('partial.footer')--}}
{{--</footer>--}}

{{--</body>--}}

{{--<script src="{{ asset('assets/js/swiper.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/sliders.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/main.js') }}"></script>--}}

{{--<script>--}}
{{--    // تابع خروج--}}
{{--    async function logout() {--}}
{{--        if (!confirm('آیا از خروج اطمینان دارید؟')) {--}}
{{--            return;--}}
{{--        }--}}

{{--        try {--}}
{{--            const token = localStorage.getItem('auth_token');--}}

{{--            await fetch('/logout', {--}}
{{--                method: 'POST',--}}
{{--                headers: {--}}
{{--                    'Authorization': `Bearer ${token}`,--}}
{{--                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')--}}
{{--                }--}}
{{--            });--}}
{{--        } catch (error) {--}}
{{--            console.error('Logout error:', error);--}}
{{--        } finally {--}}
{{--            localStorage.removeItem('auth_token');--}}
{{--            localStorage.removeItem('user');--}}
{{--            window.location.href = '/';--}}
{{--        }--}}
{{--    }--}}

{{--    // بررسی وضعیت ورود--}}
{{--    function checkAuth() {--}}
{{--        const token = localStorage.getItem('auth_token');--}}
{{--        if (!token) {--}}
{{--            window.location.href = '/';--}}
{{--        }--}}
{{--    }--}}

{{--    // اجرای بررسی هنگام لود صفحه--}}
{{--    document.addEventListener('DOMContentLoaded', checkAuth);--}}
{{--</script>--}}
{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function() {--}}
{{--        const modal = document.getElementById('modal-1');--}}
{{--        const loginPage = document.getElementById('login-page');--}}
{{--        const verifyPage = document.getElementById('verify-page');--}}
{{--        const phoneInput = document.getElementById('phone-input');--}}
{{--        const phoneDisplay = document.getElementById('phone-display');--}}
{{--        const loginBtn = document.getElementById('login-btn');--}}
{{--        const verifyBtn = document.getElementById('verify-btn');--}}
{{--        const backBtn = document.getElementById('back-btn');--}}
{{--        const codeInputs = document.querySelectorAll('.code-input');--}}
{{--        const countdownElement = document.getElementById('countdown');--}}

{{--        let countdownInterval;--}}
{{--        let currentPhoneNumber = '';--}}

{{--        // مدیریت ورود شماره تلفن--}}
{{--        phoneInput.addEventListener('input', function(e) {--}}
{{--            e.target.value = e.target.value.replace(/[^0-9]/g, '');--}}

{{--            if (e.target.value.length > 11) {--}}
{{--                e.target.value = e.target.value.slice(0, 11);--}}
{{--            }--}}

{{--            loginBtn.disabled = !isValidPhoneNumber(e.target.value);--}}
{{--        });--}}

{{--        // مدیریت کلیک روی دکمه ورود--}}
{{--        loginBtn.addEventListener('click', async function() {--}}
{{--            const phoneNumber = phoneInput.value.trim();--}}

{{--            if (!isValidPhoneNumber(phoneNumber)) {--}}
{{--                showAlert('لطفا شماره تلفن معتبر وارد کنید', 'error');--}}
{{--                phoneInput.focus();--}}
{{--                return;--}}
{{--            }--}}

{{--            currentPhoneNumber = phoneNumber;--}}
{{--            loginBtn.innerHTML = '<span class="loader"></span> در حال ارسال کد...';--}}
{{--            loginBtn.disabled = true;--}}

{{--            try {--}}
{{--                const response = await fetch('/send-otp', {--}}
{{--                    method: 'POST',--}}
{{--                    headers: {--}}
{{--                        'Content-Type': 'application/json',--}}
{{--                        'X-CSRF-TOKEN': getCsrfToken()--}}
{{--                    },--}}
{{--                    body: JSON.stringify({ phone: phoneNumber })--}}
{{--                });--}}

{{--                console.log('Response status:', response.status);--}}

{{--                const result = await response.json();--}}
{{--                console.log('Send OTP Result:', result);--}}

{{--                if (result.success) {--}}
{{--                    phoneDisplay.textContent = formatPhoneNumber(phoneNumber);--}}
{{--                    showVerifyPage();--}}
{{--                    startCountdown();--}}
{{--                    showAlert('کد تایید ارسال شد', 'success');--}}
{{--                    console.log('OTP Code:', result.otp_code);--}}
{{--                } else {--}}
{{--                    showAlert(result.message || 'خطا در ارسال کد', 'error');--}}
{{--                }--}}

{{--            } catch (error) {--}}
{{--                console.error('Error:', error);--}}
{{--                showAlert('خطا در ارتباط با سرور', 'error');--}}
{{--            } finally {--}}
{{--                loginBtn.innerHTML = 'ورود';--}}
{{--                loginBtn.disabled = false;--}}
{{--            }--}}
{{--        });--}}

{{--        // مدیریت کلیک روی دکمه تایید--}}
{{--        verifyBtn.addEventListener('click', async function() {--}}
{{--            const code = getVerificationCode();--}}

{{--            if (code.length !== 6) {--}}
{{--                showAlert('لطفا کد 6 رقمی را کامل وارد کنید', 'error');--}}
{{--                codeInputs[0].focus();--}}
{{--                return;--}}
{{--            }--}}

{{--            verifyBtn.innerHTML = '<span class="loader"></span> در حال تایید...';--}}
{{--            verifyBtn.disabled = true;--}}

{{--            try {--}}
{{--                const response = await fetch('/verify-otp', {--}}
{{--                    method: 'POST',--}}
{{--                    headers: {--}}
{{--                        'Content-Type': 'application/json',--}}
{{--                        'X-CSRF-TOKEN': getCsrfToken()--}}
{{--                    },--}}
{{--                    body: JSON.stringify({--}}
{{--                        phone: currentPhoneNumber,--}}
{{--                        otp_code: code--}}
{{--                    })--}}
{{--                });--}}

{{--                const result = await response.json();--}}
{{--                console.log('Verify OTP Result:', result);--}}

{{--                if (result.success) {--}}
{{--                    showAlert('ورود موفقیت‌آمیز!', 'success');--}}
{{--                    localStorage.setItem('auth_token', result.token);--}}
{{--                    localStorage.setItem('user', JSON.stringify(result.user));--}}

{{--                    setTimeout(() => {--}}
{{--                        closeModal();--}}
{{--                        updateHeaderUserInfo(result.user);--}}
{{--                        window.location.reload();--}}
{{--                    }, 1500);--}}

{{--                } else {--}}
{{--                    showAlert(result.message || 'کد تایید معتبر نیست', 'error');--}}
{{--                    clearCodeInputs();--}}
{{--                    codeInputs[0].focus();--}}
{{--                }--}}

{{--            } catch (error) {--}}
{{--                console.error('Error:', error);--}}
{{--                showAlert('خطا در تایید کد', 'error');--}}
{{--            } finally {--}}
{{--                verifyBtn.innerHTML = 'تایید';--}}
{{--                verifyBtn.disabled = false;--}}
{{--            }--}}
{{--        });--}}

{{--        // مدیریت کلیک روی دکمه بازگشت--}}
{{--        backBtn.addEventListener('click', function() {--}}
{{--            showLoginPage();--}}
{{--            clearCountdown();--}}
{{--        });--}}

{{--        // مدیریت inputهای کد--}}
{{--        codeInputs.forEach((input, index) => {--}}
{{--            input.addEventListener('input', function(e) {--}}
{{--                e.target.value = e.target.value.replace(/[^0-9]/g, '');--}}

{{--                if (e.target.value.length === 1 && index < codeInputs.length - 1) {--}}
{{--                    codeInputs[index + 1].focus();--}}
{{--                }--}}

{{--                verifyBtn.disabled = getVerificationCode().length !== 6;--}}
{{--            });--}}

{{--            input.addEventListener('keydown', function(e) {--}}
{{--                if (e.key === 'Backspace' && e.target.value.length === 0 && index > 0) {--}}
{{--                    codeInputs[index - 1].focus();--}}
{{--                }--}}
{{--            });--}}

{{--            input.addEventListener('paste', function(e) {--}}
{{--                e.preventDefault();--}}
{{--                const pasteData = e.clipboardData.getData('text').replace(/[^0-9]/g, '');--}}

{{--                if (pasteData.length === 6) {--}}
{{--                    codeInputs.forEach((input, i) => {--}}
{{--                        input.value = pasteData[i] || '';--}}
{{--                    });--}}
{{--                    codeInputs[5].focus();--}}
{{--                    verifyBtn.disabled = false;--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--        // توابع کمکی--}}
{{--        function showVerifyPage() {--}}
{{--            loginPage.classList.add('hidden');--}}
{{--            verifyPage.classList.remove('hidden');--}}
{{--            verifyBtn.disabled = true;--}}
{{--            setTimeout(() => codeInputs[0].focus(), 300);--}}
{{--        }--}}

{{--        function showLoginPage() {--}}
{{--            verifyPage.classList.add('hidden');--}}
{{--            loginPage.classList.remove('hidden');--}}
{{--            phoneInput.focus();--}}
{{--        }--}}

{{--        function isValidPhoneNumber(phone) {--}}
{{--            return /^09[0-9]{9}$/.test(phone);--}}
{{--        }--}}

{{--        function formatPhoneNumber(phone) {--}}
{{--            return phone.replace(/(\d{4})(\d{3})(\d{4})/, '$1 $2 $3');--}}
{{--        }--}}

{{--        function getVerificationCode() {--}}
{{--            return Array.from(codeInputs).map(input => input.value).join('');--}}
{{--        }--}}

{{--        function clearCodeInputs() {--}}
{{--            codeInputs.forEach(input => input.value = '');--}}
{{--        }--}}

{{--        function startCountdown() {--}}
{{--            let timeLeft = 120;--}}
{{--            clearInterval(countdownInterval);--}}

{{--            countdownElement.textContent = formatTime(timeLeft);--}}
{{--            countdownElement.classList.remove('text-primary-600', 'cursor-pointer', 'hover:underline');--}}
{{--            countdownElement.onclick = null;--}}

{{--            countdownInterval = setInterval(() => {--}}
{{--                timeLeft--;--}}
{{--                countdownElement.textContent = formatTime(timeLeft);--}}

{{--                if (timeLeft <= 0) {--}}
{{--                    clearInterval(countdownInterval);--}}
{{--                    countdownElement.textContent = 'ارسال مجدد کد';--}}
{{--                    countdownElement.classList.add('text-primary-600', 'cursor-pointer', 'hover:underline');--}}
{{--                    countdownElement.onclick = resendCode;--}}
{{--                }--}}
{{--            }, 1000);--}}
{{--        }--}}

{{--        function formatTime(seconds) {--}}
{{--            const minutes = Math.floor(seconds / 60);--}}
{{--            const remainingSeconds = seconds % 60;--}}
{{--            return `${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;--}}
{{--        }--}}

{{--        function clearCountdown() {--}}
{{--            clearInterval(countdownInterval);--}}
{{--        }--}}

{{--        async function resendCode() {--}}
{{--            if (!currentPhoneNumber) return;--}}

{{--            try {--}}
{{--                countdownElement.classList.remove('cursor-pointer', 'hover:underline');--}}
{{--                countdownElement.textContent = 'در حال ارسال...';--}}

{{--                const response = await fetch('/send-otp', {--}}
{{--                    method: 'POST',--}}
{{--                    headers: {--}}
{{--                        'Content-Type': 'application/json',--}}
{{--                        'X-CSRF-TOKEN': getCsrfToken()--}}
{{--                    },--}}
{{--                    body: JSON.stringify({ phone: currentPhoneNumber })--}}
{{--                });--}}

{{--                const result = await response.json();--}}

{{--                if (result.success) {--}}
{{--                    showAlert('کد تایید مجدداً ارسال شد', 'success');--}}
{{--                    startCountdown();--}}
{{--                    clearCodeInputs();--}}
{{--                    codeInputs[0].focus();--}}
{{--                    console.log('New OTP Code:', result.otp_code);--}}
{{--                } else {--}}
{{--                    showAlert(result.message || 'خطا در ارسال کد', 'error');--}}
{{--                    countdownElement.textContent = 'ارسال مجدد کد';--}}
{{--                    countdownElement.classList.add('text-primary-600', 'cursor-pointer', 'hover:underline');--}}
{{--                }--}}

{{--            } catch (error) {--}}
{{--                console.error('Error:', error);--}}
{{--                showAlert('خطا در ارتباط با سرور', 'error');--}}
{{--                countdownElement.textContent = 'ارسال مجدد کد';--}}
{{--                countdownElement.classList.add('text-primary-600', 'cursor-pointer', 'hover:underline');--}}
{{--            }--}}
{{--        }--}}

{{--        function closeModal() {--}}
{{--            modal.classList.add('hidden');--}}
{{--            showLoginPage();--}}
{{--            clearCountdown();--}}
{{--            resetForm();--}}
{{--        }--}}

{{--        function resetForm() {--}}
{{--            phoneInput.value = '';--}}
{{--            clearCodeInputs();--}}
{{--            currentPhoneNumber = '';--}}
{{--            loginBtn.disabled = true;--}}
{{--            verifyBtn.disabled = true;--}}
{{--        }--}}

{{--        function showAlert(message, type) {--}}
{{--            const alertDiv = document.createElement('div');--}}
{{--            alertDiv.className = `fixed top-4 right-4 z-50 p-4 rounded-lg text-white transform transition-all duration-300 ${--}}
{{--                type === 'success' ? 'bg-green-500' : 'bg-red-500'--}}
{{--            }`;--}}
{{--            alertDiv.innerHTML = `--}}
{{--            <div class="flex items-center gap-2">--}}
{{--                <span>${message}</span>--}}
{{--                <button onclick="this.parentElement.parentElement.remove()" class="text-lg">&times;</button>--}}
{{--            </div>--}}
{{--        `;--}}

{{--            document.body.appendChild(alertDiv);--}}

{{--            setTimeout(() => {--}}
{{--                if (alertDiv.parentElement) {--}}
{{--                    alertDiv.remove();--}}
{{--                }--}}
{{--            }, 4000);--}}
{{--        }--}}

{{--        function getCsrfToken() {--}}
{{--            return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '{{ csrf_token() }}';--}}
{{--        }--}}

{{--        // مدیریت کلیک خارج از modal--}}
{{--        modal.addEventListener('click', function(e) {--}}
{{--            if (e.target === modal) {--}}
{{--                closeModal();--}}
{{--            }--}}
{{--        });--}}

{{--        // مدیریت کلید ESC--}}
{{--        document.addEventListener('keydown', function(e) {--}}
{{--            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {--}}
{{--                closeModal();--}}
{{--            }--}}
{{--        });--}}

{{--        // بررسی وضعیت کاربر--}}
{{--        checkAuthStatus();--}}
{{--    });--}}

{{--    // تابع برای آپدیت اطلاعات کاربر در هدر--}}
{{--    function updateHeaderUserInfo(user) {--}}
{{--        const userSection = document.querySelector('.user-profile-section');--}}
{{--        if (userSection && user) {--}}
{{--            userSection.innerHTML = `--}}
{{--            <div class="flex items-center gap-2">--}}
{{--                <span class="text-sm text-zinc-700">${user.full_name}</span>--}}
{{--                <button onclick="logout()" class="text-xs text-red-500 hover:text-red-700">خروج</button>--}}
{{--            </div>--}}
{{--        `;--}}
{{--        }--}}
{{--    }--}}

{{--    // تابع برای نمایش منوی پروفایل--}}
{{--    function updateProfileMenu(user) {--}}
{{--        const profileMenu = document.querySelector('.profile-menu');--}}
{{--        if (profileMenu && user) {--}}
{{--            profileMenu.innerHTML = `--}}
{{--            <ul class="space-y-1 p-2">--}}
{{--                <li>--}}
{{--                    <a class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100" href="/profile">--}}
{{--                        <span class="flex items-center gap-x-2">--}}
{{--                            <span>--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256">--}}
{{--                                    <path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path>--}}
{{--                                </svg>--}}
{{--                            </span>--}}
{{--                            <span class="text-sm">${user.full_name}</span>--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100" href="/profile-order">--}}
{{--                        <span class="flex items-center gap-x-2">--}}
{{--                            <span>--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256">--}}
{{--                                    <path d="M237.9,198.36l-14.25-120a14.06,14.06,0,0,0-14-12.36H174V64a46,46,0,0,0-92,0v2H46.33a14.06,14.06,0,0,0-14,12.36l-14.25,120a14,14,0,0,0,14,15.64H223.92a14,14,0,0,0,14-15.64ZM94,64a34,34,0,0,1,68,0v2H94ZM225.5,201.3a2.07,2.07,0,0,1-1.58.7H32.08a2.07,2.07,0,0,1-1.58-.7,1.92,1.92,0,0,1-.49-1.53l14.26-120A2,2,0,0,1,46.33,78H209.67a2,2,0,0,1,2.06,1.77l14.26,120A1.92,1.92,0,0,1,225.5,201.3Z"></path>--}}
{{--                                </svg>--}}
{{--                            </span>--}}
{{--                            <span class="text-sm">سفارش ها</span>--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-red-500 hover:text-red-600 transition hover:bg-red-100" href="#" onclick="logout()">--}}
{{--                        <div class="flex items-center gap-x-2">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256">--}}
{{--                                <path d="M110,216a6,6,0,0,1-6,6H48a14,14,0,0,1-14-14V48A14,14,0,0,1,48,34h56a6,6,0,0,1,0,12H48a2,2,0,0,0-2,2V208a2,2,0,0,0,2,2h56A6,6,0,0,1,110,216Zm110.24-92.24-40-40a6,6,0,0,0-8.48,8.48L201.51,122H104a6,6,0,0,0,0,12h97.51l-29.75,29.76a6,6,0,1,0,8.48,8.48l40-40A6,6,0,0,0,220.24,123.76Z"></path>--}}
{{--                            </svg>--}}
{{--                            <span>خروج از حساب کاربری</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        `;--}}
{{--        }--}}
{{--    }--}}

{{--    // بررسی وضعیت ورود کاربر--}}
{{--    function checkAuthStatus() {--}}
{{--        const token = localStorage.getItem('auth_token');--}}
{{--        const user = localStorage.getItem('user');--}}

{{--        if (token && user) {--}}
{{--            try {--}}
{{--                const userData = JSON.parse(user);--}}
{{--                updateHeaderUserInfo(userData);--}}
{{--                updateProfileMenu(userData);--}}
{{--            } catch (e) {--}}
{{--                console.error('Error parsing user data:', e);--}}
{{--            }--}}
{{--        }--}}
{{--    }--}}

{{--    // تابع خروج--}}
{{--    async function logout() {--}}
{{--        if (!confirm('آیا از خروج اطمینان دارید؟')) {--}}
{{--            return;--}}
{{--        }--}}

{{--        try {--}}
{{--            const token = localStorage.getItem('auth_token');--}}

{{--            await fetch('/logout', {--}}
{{--                method: 'POST',--}}
{{--                headers: {--}}
{{--                    'Authorization': `Bearer ${token}`,--}}
{{--                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')--}}
{{--                }--}}
{{--            });--}}
{{--        } catch (error) {--}}
{{--            console.error('Logout error:', error);--}}
{{--        } finally {--}}
{{--            localStorage.removeItem('auth_token');--}}
{{--            localStorage.removeItem('user');--}}
{{--            window.location.reload();--}}
{{--        }--}}
{{--    }--}}

{{--    // استایل لودر--}}
{{--    const style = document.createElement('style');--}}
{{--    style.textContent = `--}}
{{--    .loader {--}}
{{--        width: 18px;--}}
{{--        height: 18px;--}}
{{--        border: 2px solid #ffffff;--}}
{{--        border-bottom-color: transparent;--}}
{{--        border-radius: 50%;--}}
{{--        display: inline-block;--}}
{{--        box-sizing: border-box;--}}
{{--        animation: rotation 1s linear infinite;--}}
{{--    }--}}

{{--    @keyframes rotation {--}}
{{--        0% { transform: rotate(0deg); }--}}
{{--        100% { transform: rotate(360deg); }--}}
{{--    }--}}

{{--    button:disabled {--}}
{{--        opacity: 0.6;--}}
{{--        cursor: not-allowed;--}}
{{--    }--}}

{{--    button:disabled:hover {--}}
{{--        opacity: 0.6;--}}
{{--    }--}}
{{--`;--}}
{{--    document.head.appendChild(style);--}}
{{--</script>--}}
{{--</html>--}}
{{--    <!DOCTYPE html>--}}
{{--<html lang="fa" dir="rtl">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">--}}
{{--    <title>پروفایل کاربر - فروشگاه دیجی استار</title>--}}
{{--</head>--}}

{{--<body class="max-w-[1700px] mx-auto">--}}

{{--<header class="max-w-[1700px] fixed w-full z-50 flex md:block bg-white md:bg-transparent">--}}
{{--    @include('partial.header')--}}
{{--    @include('partial.nav')--}}
{{--</header>--}}

{{--<main class="pt-24 md:pt-32 px-4 md:px-6 min-h-screen bg-gradient-to-b from-orange-50 via-white to-orange-50">--}}
{{--    <div class="max-w-7xl mx-auto">--}}

{{--        <!-- هدر پروفایل -->--}}
{{--        <div class="bg-gradient-to-r from-orange-400 to-orange-500 rounded-2xl p-6 md:p-8 mb-10 text-white shadow-lg">--}}
{{--            <div class="flex flex-col md:flex-row items-center gap-6">--}}
{{--                <!-- آواتار -->--}}
{{--                <div class="relative">--}}
{{--                    <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-md ring-2 ring-white/40">--}}
{{--                        {{ strtoupper(substr($user->name ?? 'کاربر', 0, 1)) }}--}}
{{--                    </div>--}}
{{--                    <div class="absolute bottom-2 right-2 w-4 h-4 bg-green-400 border-2 border-white rounded-full"></div>--}}
{{--                </div>--}}

{{--                <!-- اطلاعات کاربر -->--}}
{{--                <div class="flex-1 text-center md:text-right">--}}
{{--                    <h1 class="text-2xl md:text-3xl font-bold mb-2 drop-shadow-sm">--}}
{{--                        {{ $user->name ?? '' }} {{ $user->family ?? '' }}--}}
{{--                    </h1>--}}
{{--                    <p class="text-orange-100 mb-3 font-light">{{ $user->phone ?? '-' }}</p>--}}
{{--                    <div class="flex flex-wrap justify-center md:justify-start gap-3 text-sm">--}}
{{--                        <span class="bg-white/20 px-3 py-1 rounded-full border border-white/40 text-white/90 backdrop-blur-sm">--}}
{{--                            عضویت از {{ $user->created_at ? $user->created_at->format('Y/m/d') : '-' }}--}}
{{--                        </span>--}}
{{--                        <span class="bg-white/20 px-3 py-1 rounded-full border border-white/40 text-white/90 backdrop-blur-sm">--}}
{{--                            {{ ($user->role ?? 'user') === 'admin' ? 'مدیر' : 'کاربر' }}--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- گرید اصلی -->--}}
{{--        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-12">--}}

{{--            <!-- سایدبار منو -->--}}
{{--            <div class="lg:col-span-1">--}}
{{--                <div class="bg-white rounded-2xl border border-orange-100 p-6 sticky top-32 shadow-md">--}}
{{--                    <nav class="space-y-2">--}}
{{--                        @php--}}
{{--                            $menu = [--}}
{{--                                ['پیشخوان', 'home'],--}}
{{--                                ['سفارش‌های من', 'shopping-bag'],--}}
{{--                                ['نظرات من', 'chat-bubble-bottom-center-text'],--}}
{{--                                ['تیکت‌های پشتیبانی', 'lifebuoy'],--}}
{{--                                ['تغییر رمز عبور', 'lock-closed'],--}}
{{--                            ];--}}
{{--                        @endphp--}}

{{--                        @foreach($menu as [$label, $icon])--}}
{{--                            <a href="#"--}}
{{--                               class="flex items-center gap-3 p-3 rounded-xl border border-transparent hover:border-orange-300 hover:bg-orange-50 text-gray-700 hover:text-orange-600 font-medium transition-all">--}}
{{--                                @if(View::exists('components.heroicon-o-' . $icon))--}}
{{--                                    <x-dynamic-component :component="'heroicon-o-' . $icon" class="w-5 h-5 text-orange-500" />--}}
{{--                                @else--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                                    </svg>--}}
{{--                                @endif--}}
{{--                                <span>{{ $label }}</span>--}}
{{--                            </a>--}}
{{--                        @endforeach--}}

{{--                        <button onclick="logout()" class="w-full flex items-center gap-3 p-3 text-red-600 hover:bg-red-50 rounded-xl transition-all mt-4 font-medium border border-transparent hover:border-red-200">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7" />--}}
{{--                            </svg>--}}
{{--                            <span>خروج از حساب</span>--}}
{{--                        </button>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- محتوای اصلی -->--}}
{{--            <div class="lg:col-span-2 space-y-8">--}}

{{--                <!-- آمار سریع -->--}}
{{--                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">--}}
{{--                    <div class="bg-gradient-to-br from-orange-100 to-orange-50 border border-orange-200 rounded-xl text-center p-4 shadow-sm">--}}
{{--                        <div class="text-2xl font-bold text-orange-600 mb-1">{{ $stats['active_orders'] ?? 0 }}</div>--}}
{{--                        <div class="text-sm text-gray-700">سفارش‌های فعال</div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-gradient-to-br from-green-100 to-green-50 border border-green-200 rounded-xl text-center p-4 shadow-sm">--}}
{{--                        <div class="text-2xl font-bold text-green-600 mb-1">{{ $stats['completed_orders'] ?? 0 }}</div>--}}
{{--                        <div class="text-sm text-gray-700">تکمیل شده</div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-gradient-to-br from-blue-100 to-blue-50 border border-blue-200 rounded-xl text-center p-4 shadow-sm">--}}
{{--                        <div class="text-2xl font-bold text-blue-600 mb-1">{{ $stats['comments'] ?? 0 }}</div>--}}
{{--                        <div class="text-sm text-gray-700">نظرات</div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-gradient-to-br from-yellow-100 to-orange-50 border border-yellow-200 rounded-xl text-center p-4 shadow-sm">--}}
{{--                        <div class="text-2xl font-bold text-orange-600 mb-1">{{ $stats['open_tickets'] ?? 0 }}</div>--}}
{{--                        <div class="text-sm text-gray-700">تیکت‌های باز</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- سفارش‌های اخیر -->--}}
{{--                <div class="bg-white rounded-2xl border border-orange-100 p-6 shadow-md">--}}
{{--                    <div class="flex items-center justify-between mb-6">--}}
{{--                        <h2 class="text-lg font-bold text-gray-800">سفارش‌های اخیر</h2>--}}
{{--                        <a href="#" class="text-orange-600 hover:text-orange-700 text-sm flex items-center gap-1 font-medium">--}}
{{--                            مشاهده همه--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <div class="space-y-4">--}}
{{--                        @forelse($recent_orders as $order)--}}
{{--                            <div class="flex items-center justify-between p-4 border border-orange-100 rounded-xl hover:bg-orange-50 transition">--}}
{{--                                <div class="flex items-center gap-4">--}}
{{--                                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18l-2 13H5L3 3z" />--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <div class="font-medium text-gray-800">سفارش #{{ $order['id'] }}</div>--}}
{{--                                        <div class="text-sm text-gray-500">تاریخ: {{ $order['date'] ?? '-' }}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="text-left">--}}
{{--                                    <div class="font-medium text-gray-800">--}}
{{--                                        {{ is_numeric($order['amount'] ?? null) ? number_format($order['amount']) : '0' }} تومان--}}
{{--                                    </div>--}}
{{--                                    <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-700 mt-1">--}}
{{--                                        {{ $order['status'] ?? 'نامشخص' }}--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @empty--}}
{{--                            <p class="text-gray-500 text-center py-4">سفارشی یافت نشد.</p>--}}
{{--                        @endforelse--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- فرم اطلاعات شخصی -->--}}
{{--                <div class="bg-white rounded-2xl border border-orange-100 p-6 shadow-md">--}}
{{--                    <h2 class="text-lg font-bold text-gray-800 mb-6 border-b border-orange-100 pb-3">اطلاعات شخصی</h2>--}}
{{--                    <form method="POST" action="{{ route('profile.update') }}" class="grid grid-cols-1 md:grid-cols-2 gap-6">--}}
{{--                        @csrf--}}
{{--                        @method('PUT')--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-2">نام</label>--}}
{{--                            <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}"--}}
{{--                                   class="w-full p-3 bg-orange-50 border border-orange-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-2">نام خانوادگی</label>--}}
{{--                            <input type="text" name="family" value="{{ old('family', $user->family ?? '') }}"--}}
{{--                                   class="w-full p-3 bg-orange-50 border border-orange-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-2">شماره تلفن</label>--}}
{{--                            <div class="w-full p-3 bg-orange-50 border border-orange-200 rounded-lg text-gray-800">--}}
{{--                                {{ $user->phone ?? '-' }}--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-2">ایمیل</label>--}}
{{--                            <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}"--}}
{{--                                   class="w-full p-3 bg-orange-50 border border-orange-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400"--}}
{{--                                   placeholder="ایمیل">--}}
{{--                        </div>--}}

{{--                        <div class="md:col-span-2 flex justify-end">--}}
{{--                            <button type="submit" class="px-6 py-2.5 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-medium rounded-lg transition shadow-md">--}}
{{--                                ذخیره تغییرات--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</main>--}}

{{--<main class="pt-24 md:pt-32 px-4 md:px-6 min-h-screen bg-gray-50">--}}
{{--    <div class="max-w-7xl mx-auto">--}}

{{--        <!-- هدر پروفایل -->--}}
{{--        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-8">--}}
{{--            <div class="flex flex-col md:flex-row items-center gap-6">--}}
{{--                <!-- آواتار -->--}}
{{--                <div class="relative">--}}
{{--                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full flex items-center justify-center text-white text-xl font-bold shadow-md">--}}
{{--                        {{ strtoupper(substr($user->name, 0, 1)) }}--}}
{{--                    </div>--}}
{{--                    <div class="absolute bottom-1 right-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>--}}
{{--                </div>--}}

{{--                <!-- اطلاعات کاربر -->--}}
{{--                <div class="flex-1 text-center md:text-right">--}}
{{--                    <h1 class="text-xl md:text-2xl font-bold text-gray-800 mb-1">--}}
{{--                        {{ $user->name }} {{ $user->family ?? '' }}--}}
{{--                    </h1>--}}
{{--                    <p class="text-gray-600 mb-2">{{ $user->phone }}</p>--}}
{{--                    <div class="flex flex-wrap justify-center md:justify-start gap-2 text-xs">--}}
{{--                        <span class="bg-orange-50 text-orange-700 px-2 py-1 rounded-full border border-orange-200">--}}
{{--                            عضویت از {{ $user->created_at->format('Y/m/d') }}--}}
{{--                        </span>--}}
{{--                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full border border-blue-200">--}}
{{--                            {{ $user->role === 'admin' ? 'مدیر' : 'کاربر' }}--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- گرید اصلی -->--}}
{{--        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">--}}

{{--            <!-- ستون اول: آمار + سفارش‌های اخیر -->--}}
{{--            <div class="lg:col-span-8 space-y-6">--}}

{{--                <!-- آمار سریع -->--}}
{{--                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">--}}
{{--                    <!-- تکمیل شده → سبز -->--}}
{{--                    <div class="bg-white rounded-xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-md transition">--}}
{{--                        <div class="text-2xl font-bold text-green-600 mb-1">{{ $stats['completed_orders'] }}</div>--}}
{{--                        <div class="text-xs text-gray-500">تکمیل شده</div>--}}
{{--                    </div>--}}

{{--                    <!-- بقیه → مشکی/خاکستری -->--}}
{{--                    <div class="bg-white rounded-xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-md transition">--}}
{{--                        <div class="text-2xl font-bold text-gray-800 mb-1">{{ $stats['active_orders'] }}</div>--}}
{{--                        <div class="text-xs text-gray-500">سفارش‌های فعال</div>--}}
{{--                    </div>--}}

{{--                    <div class="bg-white rounded-xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-md transition">--}}
{{--                        <div class="text-2xl font-bold text-gray-800 mb-1">{{ $stats['comments'] }}</div>--}}
{{--                        <div class="text-xs text-gray-500">نظرات</div>--}}
{{--                    </div>--}}

{{--                    <div class="bg-white rounded-xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-md transition">--}}
{{--                        <div class="text-2xl font-bold text-gray-800 mb-1">{{ $stats['open_tickets'] }}</div>--}}
{{--                        <div class="text-xs text-gray-500">تیکت‌های باز</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- سفارش‌های اخیر -->--}}
{{--                <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">--}}
{{--                    <div class="flex items-center justify-between mb-4">--}}
{{--                        <h2 class="text-lg font-bold text-gray-800">سفارش‌های اخیر</h2>--}}
{{--                        <a href="#" class="text-orange-600 hover:text-orange-700 text-sm flex items-center gap-1">--}}
{{--                            مشاهده همه--}}
{{--                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="space-y-3">--}}
{{--                        @forelse($recent_orders as $order)--}}
{{--                            <div class="flex items-center justify-between p-3 border border-gray-100 rounded-lg hover:bg-gray-50 transition">--}}
{{--                                <div class="flex items-center gap-3">--}}
{{--                                    <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">--}}
{{--                                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <div class="font-medium text-gray-800">سفارش #{{ $order['id'] }}</div>--}}
{{--                                        <div class="text-xs text-gray-500">تاریخ: {{ $order['date'] }}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="text-left">--}}
{{--                                    <div class="font-medium text-gray-800">--}}
{{--                                        {{ is_numeric($order['amount']) ? number_format($order['amount']) : $order['amount'] }} تومان--}}
{{--                                    </div>--}}
{{--                                    <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 mt-1">{{ $order['status'] }}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @empty--}}
{{--                            <p class="text-gray-500 text-center py-4 text-sm">سفارشی یافت نشد.</p>--}}
{{--                        @endforelse--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- اطلاعات شخصی -->--}}
{{--                <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">--}}
{{--                    <h2 class="text-lg font-bold text-gray-800 mb-4">اطلاعات شخصی</h2>--}}
{{--                    <form method="POST" action="{{ route('profile.update') }}" class="grid grid-cols-1 md:grid-cols-2 gap-4">--}}
{{--                        @csrf--}}
{{--                        @method('PUT')--}}

{{--                        <div>--}}
{{--                            <label class="block text-xs font-medium text-gray-700 mb-1">نام</label>--}}
{{--                            <input type="text" name="name" value="{{ old('name', $user->name) }}"--}}
{{--                                   class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400 text-sm">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-xs font-medium text-gray-700 mb-1">نام خانوادگی</label>--}}
{{--                            <input type="text" name="family" value="{{ old('family', $user->family ?? '') }}"--}}
{{--                                   class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400 text-sm"--}}
{{--                                   placeholder="نام خانوادگی">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-xs font-medium text-gray-700 mb-1">شماره تلفن</label>--}}
{{--                            <div class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 text-sm">--}}
{{--                                {{ $user->phone }}--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-xs font-medium text-gray-700 mb-1">ایمیل</label>--}}
{{--                            <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}"--}}
{{--                                   class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400 text-sm"--}}
{{--                                   placeholder="ایمیل">--}}
{{--                        </div>--}}

{{--                        <div class="md:col-span-2 flex justify-end">--}}
{{--                            <button type="submit" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 text-white text-sm font-medium rounded-lg transition">--}}
{{--                                ذخیره تغییرات--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <!-- ستون دوم: منوی سمت راست -->--}}
{{--            <div class="lg:col-span-4">--}}
{{--                <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">--}}
{{--                    <div class="flex items-center justify-between mb-6">--}}
{{--                        <h2 class="text-lg font-bold text-gray-800">پیشخوان</h2>--}}
{{--                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>--}}
{{--                        </svg>--}}
{{--                    </div>--}}

{{--                    <nav class="space-y-3">--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 bg-orange-50 text-orange-700 rounded-lg border-l-4 border-orange-500 font-medium text-sm">--}}
{{--                            <svg class="w-4 h-4 text-orange-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>--}}
{{--                            </svg>--}}
{{--                            <span>پیشخوان</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 hover:text-gray-800 rounded-lg transition text-sm">--}}
{{--                            <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>--}}
{{--                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>سفارش‌های من</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 hover:text-gray-800 rounded-lg transition text-sm">--}}
{{--                            <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>--}}
{{--                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>نظرات من</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 hover:text-gray-800 rounded-lg transition text-sm">--}}
{{--                            <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>تیکت‌های پشتیبانی</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 hover:text-gray-800 rounded-lg transition text-sm">--}}
{{--                            <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>تغییر رمز عبور</span>--}}
{{--                        </a>--}}
{{--                        <button onclick="logout()" class="w-full flex items-center gap-3 p-3 text-red-600 hover:bg-red-50 rounded-lg transition mt-2 text-sm">--}}
{{--                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>خروج از حساب</span>--}}
{{--                        </button>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</main>--}}


{{--<main class="pt-24 md:pt-32 px-4 md:px-6 min-h-screen bg-gray-50">--}}
{{--    <div class="max-w-7xl mx-auto">--}}

{{--        <!-- هدر پروفایل -->--}}
{{--        <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-2xl p-6 md:p-8 mb-8 border border-orange-200 shadow-sm">--}}
{{--            <div class="flex flex-col md:flex-row items-center gap-6">--}}
{{--                <!-- آواتار -->--}}
{{--                <div class="relative">--}}
{{--                    <div class="w-24 h-24 bg-gradient-to-br from-orange-500 to-orange-700 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-md">--}}
{{--                        {{ strtoupper(substr($user->name, 0, 1)) }}--}}
{{--                    </div>--}}
{{--                    <div class="absolute bottom-2 right-2 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>--}}
{{--                </div>--}}

{{--                <!-- اطلاعات کاربر -->--}}
{{--                <div class="flex-1 text-center md:text-right">--}}
{{--                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">--}}
{{--                        {{ $user->name }} {{ $user->family ?? '' }}--}}
{{--                    </h1>--}}
{{--                    <p class="text-gray-600 mb-3">{{ $user->phone }}</p>--}}
{{--                    <div class="flex flex-wrap justify-center md:justify-start gap-3 text-sm">--}}
{{--                        <span class="bg-white px-3 py-1 rounded-full border border-orange-200 text-orange-700">--}}
{{--                            عضویت از {{ $user->created_at->format('Y/m/d') }}--}}
{{--                        </span>--}}
{{--                        <span class="bg-white px-3 py-1 rounded-full border border-orange-200 text-orange-700">--}}
{{--                            {{ $user->role === 'admin' ? 'مدیر' : 'کاربر' }}--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- گرید اصلی -->--}}
{{--        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">--}}

{{--            <!-- سایدبار منو -->--}}
{{--            <div class="lg:col-span-1">--}}
{{--                <div class="bg-white rounded-2xl border border-gray-200 p-6 sticky top-32 shadow-sm">--}}
{{--                    <nav class="space-y-2">--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 bg-orange-50 text-orange-700 rounded-lg border-r-4 border-orange-500 font-medium">--}}
{{--                            <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>--}}
{{--                            </svg>--}}
{{--                            <span>پیشخوان</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-orange-50 rounded-lg transition">--}}
{{--                            <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>--}}
{{--                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>سفارش‌های من</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-orange-50 rounded-lg transition">--}}
{{--                            <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>--}}
{{--                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>نظرات من</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-orange-50 rounded-lg transition">--}}
{{--                            <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>تیکت‌های پشتیبانی</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-orange-50 rounded-lg transition">--}}
{{--                            <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>تغییر رمز عبور</span>--}}
{{--                        </a>--}}
{{--                        <button onclick="logout()" class="w-full flex items-center gap-3 p-3 text-red-600 hover:bg-red-50 rounded-lg transition mt-4">--}}
{{--                            <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                            <span>خروج از حساب</span>--}}
{{--                        </button>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- محتوای اصلی -->--}}
{{--            <div class="lg:col-span-2 space-y-6">--}}

{{--                <!-- آمار سریع -->--}}
{{--                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">--}}
{{--                    <div class="bg-white rounded-xl border border-gray-200 p-4 text-center shadow-sm">--}}
{{--                        <div class="text-2xl font-bold text-orange-600 mb-1">{{ $stats['active_orders'] }}</div>--}}
{{--                        <div class="text-sm text-gray-600">سفارش‌های فعال</div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white rounded-xl border border-gray-200 p-4 text-center shadow-sm">--}}
{{--                        <div class="text-2xl font-bold text-green-600 mb-1">{{ $stats['completed_orders'] }}</div>--}}
{{--                        <div class="text-sm text-gray-600">تکمیل شده</div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white rounded-xl border border-gray-200 p-4 text-center shadow-sm">--}}
{{--                        <div class="text-2xl font-bold text-blue-600 mb-1">{{ $stats['comments'] }}</div>--}}
{{--                        <div class="text-sm text-gray-600">نظرات</div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white rounded-xl border border-gray-200 p-4 text-center shadow-sm">--}}
{{--                        <div class="text-2xl font-bold text-orange-500 mb-1">{{ $stats['open_tickets'] }}</div>--}}
{{--                        <div class="text-sm text-gray-600">تیکت‌های باز</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- سفارش‌های اخیر -->--}}
{{--                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">--}}
{{--                    <div class="flex items-center justify-between mb-6">--}}
{{--                        <h2 class="text-lg font-bold text-gray-800">سفارش‌های اخیر</h2>--}}
{{--                        <a href="#" class="text-orange-600 hover:text-orange-700 text-sm flex items-center gap-1">--}}
{{--                            مشاهده همه--}}
{{--                            <svg class="w-4 h-4 text-orange-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="space-y-4">--}}
{{--                        @forelse($recent_orders as $order)--}}
{{--                            <div class="flex items-center justify-between p-4 border border-gray-100 rounded-lg hover:bg-orange-50 transition">--}}
{{--                                <div class="flex items-center gap-4">--}}
{{--                                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">--}}
{{--                                        <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <div class="font-medium text-gray-800">سفارش #{{ $order['id'] }}</div>--}}
{{--                                        <div class="text-sm text-gray-500">تاریخ: {{ $order['date'] }}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="text-left">--}}
{{--                                    <div class="font-medium text-gray-800">--}}
{{--                                        {{ is_numeric($order['amount']) ? number_format($order['amount']) : $order['amount'] }} تومان--}}
{{--                                    </div>--}}
{{--                                    <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 mt-1">{{ $order['status'] }}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @empty--}}
{{--                            <p class="text-gray-500 text-center py-4">سفارشی یافت نشد.</p>--}}
{{--                        @endforelse--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- فرم اطلاعات شخصی -->--}}
{{--                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">--}}
{{--                    <h2 class="text-lg font-bold text-gray-800 mb-6">اطلاعات شخصی</h2>--}}
{{--                    <form method="POST" action="{{ route('profile.update') }}" class="grid grid-cols-1 md:grid-cols-2 gap-6">--}}
{{--                        @csrf--}}
{{--                        @method('PUT')--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-2">نام</label>--}}
{{--                            <input type="text" name="name" value="{{ old('name', $user->name) }}"--}}
{{--                                   class="w-full p-3 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-2">نام خانوادگی</label>--}}
{{--                            <input type="text" name="family" value="{{ old('family', $user->family ?? '') }}"--}}
{{--                                   class="w-full p-3 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400"--}}
{{--                                   placeholder="نام خانوادگی">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-2">شماره تلفن</label>--}}
{{--                            <div class="w-full p-3 bg-gray-50 border border-gray-200 rounded-lg text-gray-800">--}}
{{--                                {{ $user->phone }}--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-2">ایمیل</label>--}}
{{--                            <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}"--}}
{{--                                   class="w-full p-3 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400"--}}
{{--                                   placeholder="ایمیل">--}}
{{--                        </div>--}}

{{--                        <div class="md:col-span-2 flex justify-end">--}}
{{--                            <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-medium rounded-lg transition shadow-sm">--}}
{{--                                ذخیره تغییرات--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</main>--}}

{{--<script>--}}
{{--    function logout() {--}}
{{--        if (confirm('آیا مطمئن هستید که می‌خواهید از حساب خود خارج شوید؟')) {--}}
{{--            // می‌توانید فرم logout را اینجا ارسال کنید--}}
{{--            // مثال: document.getElementById('logout-form').submit();--}}
{{--            alert('عملیات خروج انجام شد.');--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
{{--<footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">--}}
{{--    @include('partial.footer')--}}
{{--</footer>--}}

{{--<script>--}}
{{--    function logout() {--}}
{{--        if (confirm('آیا مطمئن هستید که می‌خواهید از حساب خود خارج شوید؟')) {--}}
{{--            // document.getElementById('logout-form').submit();--}}
{{--            alert('خروج انجام شد.');--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}


{{--<script>--}}
{{--    // مدیریت فرم پروفایل--}}
{{--    document.getElementById('profile-form').addEventListener('submit', async function(e) {--}}
{{--        e.preventDefault();--}}

{{--        const formData = new FormData(this);--}}
{{--        const submitBtn = this.querySelector('button[type="submit"]');--}}
{{--        const originalText = submitBtn.innerHTML;--}}

{{--        submitBtn.innerHTML = '<span class="loader"></span> در حال ذخیره...';--}}
{{--        submitBtn.disabled = true;--}}

{{--        try {--}}
{{--            const response = await fetch('/profile/update', {--}}
{{--                method: 'POST',--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                },--}}
{{--                body: formData--}}
{{--            });--}}

{{--            const result = await response.json();--}}

{{--            if (result.success) {--}}
{{--                showAlert('اطلاعات با موفقیت بروزرسانی شد', 'success');--}}
{{--                // رفرش صفحه برای نمایش اطلاعات جدید--}}
{{--                setTimeout(() => window.location.reload(), 1500);--}}
{{--            } else {--}}
{{--                showAlert(result.message || 'خطا در بروزرسانی اطلاعات', 'error');--}}
{{--            }--}}

{{--        } catch (error) {--}}
{{--            console.error('Error:', error);--}}
{{--            showAlert('خطا در ارتباط با سرور', 'error');--}}
{{--        } finally {--}}
{{--            submitBtn.innerHTML = originalText;--}}
{{--            submitBtn.disabled = false;--}}
{{--        }--}}
{{--    });--}}

{{--    // تابع نمایش alert--}}
{{--    function showAlert(message, type) {--}}
{{--        const alertDiv = document.createElement('div');--}}
{{--        alertDiv.className = `fixed top-4 right-4 z-50 p-4 rounded-lg text-white transform transition-all duration-300 ${--}}
{{--            type === 'success' ? 'bg-green-500' : 'bg-red-500'--}}
{{--        }`;--}}
{{--        alertDiv.innerHTML = `--}}
{{--            <div class="flex items-center gap-2">--}}
{{--                <span>${message}</span>--}}
{{--                <button onclick="this.parentElement.parentElement.remove()" class="text-lg">&times;</button>--}}
{{--            </div>--}}
{{--        `;--}}

{{--        document.body.appendChild(alertDiv);--}}

{{--        setTimeout(() => {--}}
{{--            if (alertDiv.parentElement) {--}}
{{--                alertDiv.remove();--}}
{{--            }--}}
{{--        }, 4000);--}}
{{--    }--}}

{{--    // استایل لودر--}}
{{--    const style = document.createElement('style');--}}
{{--    style.textContent = `--}}
{{--        .loader {--}}
{{--            width: 18px;--}}
{{--            height: 18px;--}}
{{--            border: 2px solid #ffffff;--}}
{{--            border-bottom-color: transparent;--}}
{{--            border-radius: 50%;--}}
{{--            display: inline-block;--}}
{{--            box-sizing: border-box;--}}
{{--            animation: rotation 1s linear infinite;--}}
{{--        }--}}

{{--        @keyframes rotation {--}}
{{--            0% { transform: rotate(0deg); }--}}
{{--            100% { transform: rotate(360deg); }--}}
{{--        }--}}
{{--    `;--}}
{{--    document.head.appendChild(style);--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>پروفایل کاربر - فروشگاه دیجی استار</title>
</head>
<body class="max-w-[1700px] mx-auto">
<header class="max-w-[1700px] fixed w-full z-50 flex md:block bg-white md:bg-transparent">
    @include('partial.header')
    @include('partial.nav')
</header>
@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
<main class="pt-24 md:pt-32 px-4 md:px-6 min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto">

        <!-- هدر پروفایل -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-8">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <!-- آواتار -->
                <div class="relative">
                    <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center text-white text-xl font-bold shadow-md">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <div class="absolute bottom-1 right-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
                </div>
                <!-- اطلاعات کاربر -->
                <div class="flex-1 text-center md:text-right">
                    <h1 class="text-xl md:text-2xl font-bold text-gray-800 mb-1">
                        {{ $user->name }} {{ $user->family ?? '' }}
                    </h1>
                    <p class="text-gray-600 mb-2">{{ $user->phone }}</p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-2 text-xs">
                        <span class="bg-white/20 px-3 py-1 rounded-full border border-white/40 text-white/90 backdrop-blur-sm">
    عضویت از {{ \Morilog\Jalali\Jalalian::forge($user->created_at)->format('Y/m/d') }}
</span>

                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full border border-blue-200">
                            {{ $user->role === 'admin' ? 'مدیر' : 'کاربر' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- گرید اصلی -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <!-- ستون اول: آمار + سفارش‌های اخیر -->
            <div class="lg:col-span-8 space-y-6">

                <!-- آمار سریع -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <!-- فقط تکمیل شده سبز -->
                    <div class="bg-white rounded-xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-md transition">
                        <div class="text-2xl font-bold text-green-600 mb-1">{{ $stats['completed_orders'] }}</div>
                        <div class="text-xs text-gray-500">تکمیل شده</div>
                    </div>
                    <!-- بقیه خاکستری -->
                    <div class="bg-white rounded-xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-md transition">
                        <div class="text-2xl font-bold text-gray-800 mb-1">{{ $stats['active_orders'] }}</div>
                        <div class="text-xs text-gray-500">سفارش‌های فعال</div>
                    </div>
                    <div class="bg-white rounded-xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-md transition">
                        <div class="text-2xl font-bold text-gray-800 mb-1">{{ $stats['comments'] }}</div>
                        <div class="text-xs text-gray-500">نظرات</div>
                    </div>
                    <div class="bg-white rounded-xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-md transition">
                        <div class="text-2xl font-bold text-gray-800 mb-1">{{ $stats['open_tickets'] }}</div>
                        <div class="text-xs text-gray-500">تیکت‌های باز</div>
                    </div>
                </div>

                <!-- سفارش‌های اخیر -->
                <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-bold text-gray-800">سفارش‌های اخیر</h2>
                        <a href="#" class="text-primary-600 hover:text-primary-700 text-sm flex items-center gap-1">
                            مشاهده همه
                            <svg class="w-4 h-4 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                    <div class="space-y-3">
                        @forelse($recent_orders as $order)
                            <div class="flex items-center justify-between p-3 border border-gray-100 rounded-lg hover:bg-gray-50 transition">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-medium text-gray-800">سفارش #{{ $order['id'] }}</div>
                                        <div class="text-xs text-gray-500">تاریخ: {{ $order['date'] }}</div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <div class="font-medium text-gray-800">
                                        {{ is_numeric($order['amount']) ? number_format($order['amount']) : $order['amount'] }} تومان
                                    </div>
                                    <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 mt-1">{{ $order['status'] }}</span>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-center py-4 text-sm">سفارشی یافت نشد.</p>
                        @endforelse
                    </div>
                </div>

                <!-- اطلاعات شخصی -->
                <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">اطلاعات شخصی</h2>
                    <form method="POST" action="{{ route('profile.update') }}" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @csrf
{{--                        @method('PUT')--}}

                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">نام</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                   class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-primary-400 text-sm">
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">نام خانوادگی</label>
                            <input type="text" name="family" value="{{ old('family', $user->family ?? '') }}"
                                   class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-primary-400 text-sm"
                                   placeholder="نام خانوادگی">
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">شماره تلفن</label>
                            <div class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 text-sm">
                                {{ $user->phone }}
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">ایمیل</label>
                            <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}"
                                   class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-primary-400 text-sm"
                                   placeholder="ایمیل">
                        </div>

                        <div class="md:col-span-2 flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-primary-500 hover:bg-primary-600 text-white text-sm font-medium rounded-lg transition">
                                ذخیره تغییرات
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- ستون دوم: منوی سمت راست -->
            <div class="lg:col-span-4">
                <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-bold text-gray-800">پیشخوان</h2>
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                    </div>

                    <nav class="space-y-3">
                        <a href="#" class="flex items-center gap-3 p-3 bg-primary-50 text-primary-700 rounded-lg border-l-4 border-primary-500 font-medium text-sm">
                            <svg class="w-4 h-4 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                            </svg>
                            <span>پیشخوان</span>
                        </a>

                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700 rounded-lg transition text-sm">
                            <svg class="w-4 h-4 text-gray-500 hover:text-primary-600 transition" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                            </svg>
                            <span>سفارش‌های من</span>
                        </a>

                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700 rounded-lg transition text-sm">
                            <svg class="w-4 h-4 text-gray-500 hover:text-primary-600 transition" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>نظرات من</span>
                        </a>

                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700 rounded-lg transition text-sm">
                            <svg class="w-4 h-4 text-gray-500 hover:text-primary-600 transition" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <span>تیکت‌های پشتیبانی</span>
                        </a>

                        <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700 rounded-lg transition text-sm">
                            <svg class="w-4 h-4 text-gray-500 hover:text-primary-600 transition" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>تغییر رمز عبور</span>
                        </a>

                        <button onclick="logout()" class="w-full flex items-center gap-3 p-3 text-red-600 hover:bg-red-50 rounded-lg transition mt-2 text-sm">
                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                            </svg>
                            <span>خروج از حساب</span>
                        </button>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</main>

<footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
    @include('partial.footer')
</footer>

<script>
    function logout() {
        if (confirm('آیا مطمئن هستید که می‌خواهید از حساب خود خارج شوید؟')) {
            alert('خروج انجام شد.');
        }
    }
</script>

</body>
</html>
