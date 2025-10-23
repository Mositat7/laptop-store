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
