@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/digiStar/contactUs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:03 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/main.css">

  <title>فروشگاه دیجی استار</title>
</head>
<body class="max-w-[1700px] mx-auto">

  <header class="max-w-[1700px] fixed w-full z-50 flex md:block bg-white md:bg-transparent">
  @include('partial/header')
{{--      nav--}}
      @include('partial/nav')
  </header>
  <main class="pt-24 md:pt-48 px-2 md:px-10">
    <div class="mb-8 border border-zinc-200 rounded-2xl p-4">
      <p class="text-xl md:text-3xl text-primary-600 font-DANAEXTRABOLD mt-6 mb-10 text-center md:max-w-4xl mx-auto">
        پشتیبانی و ارتباط با ما
      </p>
      <p class="text-zinc-800 font-DANALIGHT text-xs md:text-sm leading-7 md:leading-7 md:max-w-4xl mx-auto">
        خوشحالیم که از خدمات ما بهره‌مند هستید. در صورتی که سوالی برای شما پیش آمده یا پیشنهاد و ابهامی دارید، به راحتی می‌توانید با ما در تماس باشید. برای پیگیری سفارشات، لطفاً حتماً شماره سفارش خود را به پشتیبانی ارائه کنید.
      </p>
      <p class="text-xl md:text-3xl text-primary-600 font-DANAEXTRABOLD mt-6 mb-2 md:max-w-4xl mx-auto">
        روش‌های ارتباط:
      </p>
      <p class="text-zinc-800 font-DANALIGHT text-xs md:text-sm leading-7 md:leading-7 leading-7 md:max-w-4xl mx-auto">
        خوشحالیم که از خدمات ما بهره‌مند هستید. در صورتی که سوالی برای شما پیش آمده یا پیشنهاد و ابهامی دارید، به راحتی می‌توانید با ما در تماس باشید. برای پیگیری سفارشات، لطفاً حتماً شماره سفارش خود را به پشتیبانی ارائه کنید.
      </p>
      <ul class="text-zinc-800 font-DANALIGHT text-xs md:text-sm leading-7 md:leading-7 leading-7 mt-5 space-y-6 md:max-w-4xl mx-auto">
        <li>
          تلگرام: برای ارتباط سریع و مؤثر، می‌توانید با تیم پشتیبانی ما در تلگرام به آدرس (در انتهای صفحه درج شده )پیام دهید. ما متعهد هستیم که در کوتاه‌ترین زمان ممکن به پیام‌های شما پاسخ دهیم و راه‌حل‌های مناسبی ارائه کنیم.
        </li>
        <li>
          تلفن: پشتیبانی تلفنی ما در روزهای کاری از ساعت ۱۰ صبح تا ۱۶ آماده پاسخگویی به شما عزیزان است. تماس‌های شما در این بازه زمانی به دقت پاسخ داده می‌شود.
        </li>
        <li>
          چت آنلاین وب‌سایت: برای راحتی بیشتر، امکان چت آنلاین در وب‌سایت از ساعت ۹ صبح تا ۲۴ فراهم است (به جز جمعه‌ها که تعطیل هستیم و سه‌شنبه‌ها که چت آنلاین تا ساعت ۱۹ فعال است). لطفاً توجه داشته باشید که در خارج از این بازه‌های زمانی، پاسخگویی ممکن است با تأخیر انجام شود.
        </li>
        <li>
          فرم تماس با ما: در صورتی که پرسشی دارید یا نیاز به ارتباط بیشتری حس می‌کنید، می‌توانید از طریق فرم تماس موجود در وب‌سایت پیام خود را ارسال کنید. تیم پشتیبانی ما تلاش می‌کند تا در سریع‌ترین زمان ممکن به درخواست شما رسیدگی کند.
        </li>
      </ul>
        <div class="md:max-w-2xl mx-auto mt-10">
    <span class="text-primary-600 text-lg font-DANABOLD">
        ارسال نظرات
    </span>
            <div class="py-3">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mt-6 mb-2 text-sm text-zinc-700">
                        ما آماده انتقادات و پیشنهادات شما هستم
                    </div>
                    <input type="text" name="name" placeholder="نام و نام خانوادگی" class="mb-4 focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all focus:border-primary-300 focus:outline-none" required>
                    <input type="email" name="email" placeholder="ایمیل" class="mb-4 focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all focus:border-primary-300 focus:outline-none" required>
                    <input type="tel" name="phone" placeholder="شماره تماس" class="mb-4 focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all focus:border-primary-300 focus:outline-none" required>
                    <input type="text" name="subject" placeholder="موضوع" class="mb-4 focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all focus:border-primary-300 focus:outline-none" required>
                    <textarea name="message" placeholder="متن پیام" cols="30" rows="7" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all focus:border-primary-400 focus:outline-none" required></textarea>
                    <button type="submit" class="mx-auto w-full cursor-pointer px-2 py-3 mt-5 text-sm bg-primary-500 hover:bg-primary-400 transition text-gray-100 rounded-lg">
                        ارسال پیام
                    </button>
                </form>
            </div>
        </div>
    </div>
  </main>

  <footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
   @include('partial/footer')
  </footer>

</body>

<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{--@include('script/scripts')--}}>

<!-- Mirrored from amirtttk.ir/digiStar/contactUs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:03 GMT -->
</html>
