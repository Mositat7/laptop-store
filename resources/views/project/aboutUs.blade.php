<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/digiStar/aboutUs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:03 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

  <title>فروشگاه دیجی استار</title>
</head>
<body class="max-w-[1700px] mx-auto">

  <header class="max-w-[1700px] fixed w-full z-50 flex md:block bg-white md:bg-transparent">
   @include('partial.header')
{{--      nav--}}
      @include('partial.nav')
  </header>

  <main class="pt-24 md:pt-48 px-2 md:px-10">
      <div class="mb-8 border border-zinc-200 rounded-2xl p-4">
          @if($about)
              <img class="rounded-lg mb-6" src="{{ asset($about->image) }}" alt="{{ $about->title }}">
              <div class="text-zinc-600 text-xs md:text-sm leading-8">
                  {!! nl2br(e($about->description)) !!}
              </div>
          @else
              <p class="text-center text-gray-500">محتوایی برای نمایش وجود ندارد.</p>
          @endif
      </div>
  </main>
{{--  <main class="pt-24 md:pt-48 px-2 md:px-10">--}}
{{--    <div class="mb-8 border border-zinc-200 rounded-2xl p-4">--}}
{{--      <img class="rounded-lg mb-6" src="{{ asset('assets/image/heroSlider/1.webp')}}" alt="">--}}
{{--      <p class="text-zinc-600 text-xs md:text-sm leading-8">--}}
{{--        دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--      </p>--}}
{{--      <p class="text-zinc-600 text-xs md:text-sm leading-8">--}}
{{--        دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--      </p>--}}
{{--      <p class="text-zinc-800 md:text-lg mb-1 mt-4">--}}
{{--        فروشگاه دیجیتو--}}
{{--      </p>--}}
{{--      <p class="text-zinc-600 text-xs md:text-sm leading-8">--}}
{{--        دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--      </p>--}}
{{--      <p class="text-zinc-600 text-xs md:text-sm leading-8">--}}
{{--        دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--      </p>--}}
{{--      <p class="text-zinc-600 text-xs md:text-sm leading-8">--}}
{{--        دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--      </p>--}}
{{--      <p class="text-zinc-800 md:text-lg mb-1 mt-4">--}}
{{--        فروشگاه دیجیتو--}}
{{--      </p>--}}
{{--      <p class="text-zinc-600 text-xs md:text-sm leading-8">--}}
{{--        دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--      </p>--}}
{{--    </div>--}}
{{--  </main>--}}

  <footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
@include('partial.footer')
  </footer>

</body>

<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{--@include('script/scripts')--}}


<!-- Mirrored from amirtttk.ir/digiStar/aboutUs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:03 GMT -->
</html>
