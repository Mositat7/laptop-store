<!-- top -->
<div class="flex items-center justify-between bg-white px-4 md:px-8 lg:px-20 py-5 shadow-lg relative order-2 md:order-none w-full border-b border-zinc-200">
    <!-- logo -->
    <a href="#" class="flex justify-end md:justify-center z-10 pl-2 md:pl-0">
        <img src="{{ asset('assets/image/logo.png') }}" class="max-w-28 md:max-w-36 h-fit" alt="">
    </a>
    <!-- icon -->
    <svg class="hidden md:block absolute top-full md:right-4 lg:right-10" width="158" height="19" viewBox="0 0 158 19" fill="white" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_4623_10410)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M101.486 -121.419C121.078 -114.984 140.312 -105 160.935 -105H506.5C535.495 -105 559 -81.4949 559 -52.5V-52.5C559 -23.5051 535.495 0 506.5 0H158.936C138.871 0 120.093 9.46189 100.984 15.5822C94.0537 17.8017 86.6668 19 79 19C71.3332 19 63.9463 17.8017 57.0164 15.5822C37.9074 9.46189 19.1287 0 -0.936457 0H-1468.5C-1497.49 0 -1521 -23.5051 -1521 -52.5V-52.5C-1521 -81.4949 -1497.49 -105 -1468.5 -105H-2.93493C17.6877 -105 36.9216 -114.984 56.5145 -121.419C63.5893 -123.743 71.1478 -125 79 -125C86.8522 -125 94.4107 -123.743 101.486 -121.419Z" fill="white"></path>
        </g>
        <defs>
            <clipPath id="clip0_4623_10410">
                <rect width="158" height="19" fill="white"></rect>
            </clipPath>
        </defs>
    </svg>
{{--    <!-- search -->--}}
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="q" value="{{ request('q') }}" placeholder="جستجوی محصول ..." class="rounded-2xl text-zinc-700 bg-zinc-100 px-5 py-2.5 w-64 focus:outline-0">
        <button type="submit" class="text-white bg-primary-500 px-4 py-2 rounded-2xl">
            جستجو
        </button>
    </form>
    <!-- buttons -->
    <div class="flex gap-x-2">
        <!-- login / register -->
        <div class="flex items-center py-2.5 px-2.5 md:px-4 rounded-xl border border-zinc-200 group relative cursor-pointer transition-all hover:shadow-xl">
            @auth
                <!-- کاربر لاگین کرده -->
                <div class="user-profile-section">
                    <span class="hidden md:block text-sm text-zinc-700">
                        {{ auth()->user()->name }} {{ auth()->user()->family }}
                    </span>
                </div>
            @else
                <!-- کاربر لاگین نکرده -->
                <button data-modal-id="modal-1" class="show-modal-btn text-gray-700 flex gap-x-1.5 items-center cursor-pointer" type="button">
                    <span class="hidden md:block text-sm">حساب کاربری</span>
                    <svg width="22px" height="22px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 64 (93537) - https://sketch.com -->
                        <title>@1xIconly/Light/Profile</title>
                        <desc>Created with Sketch.</desc>
                        <g id="Iconly/Light/Profile" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                            <g class="stroke-gray-800" id="Profile" transform="translate(4.000000, 2.500000)" stroke="#200E32" stroke-width="1.5">
                                <circle id="Ellipse_736" cx="7.57896359" cy="4.77803206" r="4.77803206"></circle>
                                <path d="M5.32907052e-15,16.2013731 C-0.00126760558,15.8654831 0.0738531734,15.5336997 0.219695816,15.2311214 C0.677361723,14.3157895 1.96797958,13.8306637 3.0389178,13.610984 C3.81127745,13.4461621 4.59430539,13.3360488 5.38216724,13.2814646 C6.84083861,13.1533327 8.30793524,13.1533327 9.76660662,13.2814646 C10.5544024,13.3366774 11.3373865,13.4467845 12.1098561,13.610984 C13.1807943,13.8306637 14.4714121,14.270023 14.929078,15.2311214 C15.2223724,15.8479159 15.2223724,16.5639836 14.929078,17.1807781 C14.4714121,18.1418765 13.1807943,18.5812358 12.1098561,18.7917621 C11.3383994,18.9634099 10.5550941,19.0766219 9.76660662,19.1304349 C8.57936754,19.2310812 7.38658584,19.2494317 6.19681255,19.1853548 C5.92221301,19.1853548 5.65676678,19.1853548 5.38216724,19.1304349 C4.59663136,19.077285 3.8163184,18.9640631 3.04807112,18.7917621 C1.96797958,18.5812358 0.686515041,18.1418765 0.219695816,17.1807781 C0.0745982583,16.8746908 -0.000447947969,16.5401098 5.32907052e-15,16.2013731 Z" id="Path_33945"></path>
                            </g>
                        </g>
                    </svg>
                </button>
            @endauth

            <!-- Modal file -->
            <div id="modal-1" class="Mymodal fixed inset-0 z-50 hidden bg-black/40 flex items-center justify-center">
                <div class="modal-content relative w-full max-w-7xl max-h-[90vh] transform scale-95 opacity-0 transition-all duration-300">

                    <!-- صفحه اول: ورود با شماره تلفن -->
                    <div id="login-page" class="bg-white rounded-2xl mx-auto border border-zinc-200 w-11/12 sm:w-7/12 md:w-6/12 lg:w-4/12 h-auto py-5 px-4">
                        <img class="w-32 mx-auto" src="{{ asset('assets/image/logo.png') }}" alt="">
                        <div class="mt-5 text-lg font-semibold text-zinc-800">
                            ورود یا ثبت نام
                        </div>
                        <div class="my-4 text-xs text-zinc-500">
                            لطفا شماره موبایل خود را وارد کنید
                        </div>
                        <div class="flex flex-col gap-y-1">
                            <input type="tel" id="phone-input" placeholder="09*********" class="placeholder:text-right text-sm block w-full rounded-md border border-gray-300 px-3 py-3 font-normal text-gray-700 outline-none transition-all focus:border-primary-500 focus:outline-none">
                        </div>
                        <button id="login-btn" class="flex items-center justify-center gap-x-1 text-sm max-w-md mt-10 py-3 rounded-lg text-white bg-gradient-to-bl from-primary-600 to-primary-800 hover:opacity-85 transition w-full">
                            ورود
                        </button>
                    </div>

                    <!-- صفحه دوم: تایید کد -->
                    <div id="verify-page" class="bg-white rounded-2xl mx-auto border border-zinc-200 w-11/12 sm:w-7/12 md:w-6/12 lg:w-4/12 h-auto py-5 px-4 hidden">
                        <img class="w-32 mx-auto" src="{{ asset('assets/image/logo.png') }}" alt="">
                        <div class="mt-5 text-lg font-semibold text-zinc-800">
                            تایید شماره موبایل
                        </div>
                        <div class="my-4 text-xs text-zinc-500">
                            لطفا کد 6 رقمی ارسال شده به شماره تلفن
                            <span id="phone-display" class="font-semibold text-zinc-800"></span>
                            را وارد کنید.
                        </div>
                        <div class="input-field mb-5 flex flex-row-reverse gap-x-4 justify-center">
                            <input name="code" type="text" maxlength="1" class="code-input border border-zinc-200 focus:border-primary-500 w-12 h-12 rounded-md outline-none text-center text-lg font-semibold focus:outline-0 focus:border-2 focus:shadow-lg transition-all" required/>
                            <input name="code" type="text" maxlength="1" class="code-input border border-zinc-200 focus:border-primary-500 w-12 h-12 rounded-md outline-none text-center text-lg font-semibold focus:outline-0 focus:border-2 focus:shadow-lg transition-all" required/>
                            <input name="code" type="text" maxlength="1" class="code-input border border-zinc-200 focus:border-primary-500 w-12 h-12 rounded-md outline-none text-center text-lg font-semibold focus:outline-0 focus:border-2 focus:shadow-lg transition-all" required/>
                            <input name="code" type="text" maxlength="1" class="code-input border border-zinc-200 focus:border-primary-500 w-12 h-12 rounded-md outline-none text-center text-lg font-semibold focus:outline-0 focus:border-2 focus:shadow-lg transition-all" required/>
                            <input name="code" type="text" maxlength="1" class="code-input border border-zinc-200 focus:border-primary-500 w-12 h-12 rounded-md outline-none text-center text-lg font-semibold focus:outline-0 focus:border-2 focus:shadow-lg transition-all" required/>
                            <input name="code" type="text" maxlength="1" class="code-input border border-zinc-200 focus:border-primary-500 w-12 h-12 rounded-md outline-none text-center text-lg font-semibold focus:outline-0 focus:border-2 focus:shadow-lg transition-all" required/>
                        </div>
                        <div class="text-center text-xs text-zinc-500 mb-4">
                            <span id="countdown">02:00</span> تا دریافت مجدد کد
                        </div>
                        <button id="verify-btn" class="flex items-center justify-center gap-x-1 text-sm max-w-md mt-4 py-3 rounded-lg text-white bg-gradient-to-bl from-primary-600 to-primary-800 hover:opacity-85 transition w-full">
                            تایید
                        </button>
                        <button id="back-btn" class="flex items-center justify-center gap-x-1 text-sm max-w-md mt-2 py-3 rounded-lg text-zinc-600 border border-zinc-300 hover:bg-zinc-50 transition w-full">
                            بازگشت
                        </button>
                    </div>

                </div>
            </div>
                @auth
                    <!-- فرم مخفی برای logout -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
            <!-- منوی پروفایل -->
            <div class="z-50 group-hover:block left-0 top-[37px] w-60 rounded-lg bg-white shadow-lg hidden absolute profile-menu">
                @auth
                    <ul class="space-y-1 p-2">
                        <li>
                            <a class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100" href="/profile">
                                <span class="flex items-center gap-x-2">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256">
                                            <path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm">{{ auth()->user()->name }} {{ auth()->user()->family }}</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-red-500 hover:text-red-600 transition hover:bg-red-100" href="#" onclick="logout()">
                                <div class="flex items-center gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256">
                                        <path d="M110,216a6,6,0,0,1-6,6H48a14,14,0,0,1-14-14V48A14,14,0,0,1,48,34h56a6,6,0,0,1,0,12H48a2,2,0,0,0-2,2V208a2,2,0,0,0,2,2h56A6,6,0,0,1,110,216Zm110.24-92.24-40-40a6,6,0,0,0-8.48,8.48L201.51,122H104a6,6,0,0,0,0,12h97.51l-29.75,29.76a6,6,0,1,0,8.48,8.48l40-40A6,6,0,0,0,220.24,123.76Z"></path>
                                    </svg>
                                    <span>خروج از حساب کاربری</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                @else
                    <ul class="space-y-1 p-2">
                        <li>
                            <button onclick="openLoginModal()" class="w-full flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100">
                                <span class="flex items-center gap-x-2">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256">
                                            <path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm">ورود به حساب کاربری</span>
                                </span>
                            </button>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>

        <!-- cart -->
        <div class="flex items-center py-2 px-2.5 rounded-xl border border-zinc-200 group relative cursor-pointer transition-all hover:shadow-xl">
            <button class="relative">
        <span class="cursor-pointer">
            <svg width="22px" height="22px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
{{--        <div class="flex items-center py-2 px-2.5 rounded-xl border border-zinc-200 group relative cursor-pointer transition-all hover:shadow-xl">--}}
{{--            <button class="relative">--}}
{{--                <span class="cursor-pointer">--}}
{{--                    <svg width="22px" height="22px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
                        <g id="Iconly/Light/Bag" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                            <g class="stroke-gray-800" id="Bag" transform="translate(2.500000, 1.500000)" stroke="#200E32" stroke-width="1.5">
                                <path d="M14.01373,20.0000001 L5.66590392,20.0000001 C2.59954235,20.0000001 0.247139589,18.8924486 0.915331812,14.4347827 L1.69336385,8.39359272 C2.10526317,6.16933642 3.52402748,5.31807783 4.76887874,5.31807783 L14.9473685,5.31807783 C16.2105264,5.31807783 17.5469108,6.23340964 18.0228834,8.39359272 L18.8009154,14.4347827 C19.3684211,18.3890161 17.0800916,20.0000001 14.01373,20.0000001 Z" id="Path_33955"></path>
                                <path d="M14.1510298,5.09839819 C14.1510298,2.71232585 12.216736,0.7779932 9.83066366,0.7779932 L9.83066366,0.7779932 C8.68166274,0.773163349 7.57805185,1.22619323 6.76386233,2.03694736 C5.9496728,2.84770148 5.49199087,3.94938696 5.49199087,5.09839819 L5.49199087,5.09839819" id="Path_33956"></path>
                                <line x1="12.7963387" y1="9.60183071" x2="12.7505721" y2="9.60183071" id="Line_192"></line>
                                <line x1="6.96567509" y1="9.60183071" x2="6.9199085" y2="9.60183071" id="Line_193"></line>
                            </g>
                        </g>
                    </svg>
                </span>
            </button>
            @include('components.cart-dropdown')
        </div>
    </div>
</div>
<script>
    function logout() {
        if (confirm('آیا از خروج اطمینان دارید؟؟؟')) {
            document.getElementById('logout-form').submit();
        }
    }
</script>
<script>
    document.addEventListener('click', async function(e) {
        if (e.target.closest('.update-cart')) {
            const btn = e.target.closest('.update-cart');
            const action = btn.dataset.action;
            const cartId = btn.dataset.cartId;
            const input = btn.closest('.quantity-container').querySelector('input');

            let newQty = parseInt(input.value);
            if (action === 'increment') newQty++;
            if (action === 'decrement') newQty--;

            if (newQty < 1) return;

            try {
                const res = await fetch('/cart/update', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ cart_id: cartId, quantity: newQty })
                });

                const data = await res.json();
                if (data.success) {
                    input.value = newQty;
                    // به‌روزرسانی شماره سبد خرید در آیکون (اگر دارید)
                    const cartCount = document.querySelector('.cart-count-badge');
                    if (cartCount) cartCount.textContent = data.total_items;
                } else {
                    alert(data.message || 'خطا در بروزرسانی');
                }
            } catch (err) {
                console.error(err);
                alert('خطا در ارتباط با سرور');
            }
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('modal-1');
        if (!modal) return;

        const loginPage = document.getElementById('login-page');
        const verifyPage = document.getElementById('verify-page');
        const phoneInput = document.getElementById('phone-input');
        const phoneDisplay = document.getElementById('phone-display');
        const loginBtn = document.getElementById('login-btn');
        const verifyBtn = document.getElementById('verify-btn');
        const backBtn = document.getElementById('back-btn');
        const codeInputs = document.querySelectorAll('.code-input');
        const countdownElement = document.getElementById('countdown');
        let countdownInterval;
        let currentPhoneNumber = '';

        // اعتبارسنجی ورودی شماره
        phoneInput?.addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/\D/g, '').slice(0, 11);
            loginBtn.disabled = !/^09\d{9}$/.test(e.target.value);
        });

        // ارسال کد
        loginBtn?.addEventListener('click', async function () {
            const phone = phoneInput.value.trim();
            if (!/^09\d{9}$/.test(phone)) {
                alert('شماره موبایل معتبر نیست');
                return;
            }
            currentPhoneNumber = phone;
            loginBtn.disabled = true;
            loginBtn.textContent = 'در حال ارسال...';

            try {
                const res = await fetch('/api/send-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ phone })
                });
                const data = await res.json();

                if (data.success) {
                    phoneDisplay.textContent = phone.replace(/(\d{4})(\d{3})(\d{4})/, '$1 $2 $3');
                    showVerifyPage();
                    startCountdown();
                } else {
                    alert(data.message || 'خطا در ارسال کد');
                }
            } catch (err) {
                console.error(err);
                alert('خطا در ارتباط با سرور');
            } finally {
                loginBtn.textContent = 'ورود';
                loginBtn.disabled = false;
            }
        });

        // تایید کد
        verifyBtn?.addEventListener('click', async function () {
            const code = Array.from(codeInputs).map(i => i.value).join('');
            if (code.length !== 6) {
                alert('کد 6 رقمی را کامل وارد کنید');
                return;
            }

            verifyBtn.disabled = true;
            verifyBtn.textContent = 'در حال تایید...';

            try {
                const res = await fetch('/api/verify-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ phone: currentPhoneNumber, otp_code: code })
                });
                const data = await res.json();

                if (data.success) {
                    // ✅ بستن مودال و رفرش
                    closeModal();
                    setTimeout(() => window.location.reload(), 300);
                } else {
                    alert(data.message || 'کد نامعتبر است');
                    codeInputs.forEach(i => i.value = '');
                    codeInputs[0].focus();
                }
            } catch (err) {
                console.error(err);
                alert('خطا در تایید کد');
            } finally {
                verifyBtn.textContent = 'تایید';
                verifyBtn.disabled = false;
            }
        });

        // بازگشت
        backBtn?.addEventListener('click', function () {
            showLoginPage();
            clearCountdown();
        });

        // مدیریت inputهای کد
        codeInputs.forEach((input, i) => {
            input.addEventListener('input', function (e) {
                e.target.value = e.target.value.replace(/\D/g, '');
                if (e.target.value && i < codeInputs.length - 1) {
                    codeInputs[i + 1].focus();
                }
            });
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Backspace' && !e.target.value && i > 0) {
                    codeInputs[i - 1].focus();
                }
            });
        });

        // توابع کمکی
        function showVerifyPage() {
            loginPage?.classList.add('hidden');
            verifyPage?.classList.remove('hidden');
            codeInputs[0]?.focus();
        }
        function showLoginPage() {
            verifyPage?.classList.add('hidden');
            loginPage?.classList.remove('hidden');
            phoneInput?.focus();
        }
        function startCountdown() {
            let timeLeft = 120;
            clearInterval(countdownInterval);
            countdownInterval = setInterval(() => {
                const min = Math.floor(timeLeft / 60);
                const sec = timeLeft % 60;
                countdownElement.textContent = `${min.toString().padStart(2, '0')}:${sec.toString().padStart(2, '0')}`;
                if (--timeLeft < 0) {
                    clearInterval(countdownInterval);
                    countdownElement.textContent = 'ارسال مجدد کد';
                }
            }, 1000);
        }
        function clearCountdown() {
            clearInterval(countdownInterval);
        }
        function closeModal() {
            modal.classList.add('hidden');
            showLoginPage();
            clearCountdown();
            phoneInput.value = '';
            codeInputs.forEach(i => i.value = '');
        }
        modal.addEventListener('click', e => e.target === modal && closeModal());
        document.addEventListener('keydown', e => e.key === 'Escape' && !modal.classList.contains('hidden') && closeModal());
    });
</script>
