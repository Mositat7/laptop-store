
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/digiStar/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:02 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

  <title>فروشگاه دیجی استار</title>
</head>
<body class="max-w-[1700px] mx-auto">

 @include('partial.header')
{{--     nav--}}
     @include('partial.nav')
  </header>
    <main class="min-h-screen flex flex-col items-center justify-center text-center">
        <h1 class="text-2xl font-bold text-green-600 mb-4">سفارش شما با موفقیت ثبت شد ✅</h1>
        <p class="text-gray-600 mb-2">شماره سفارش: {{ $order->order_number }}</p>
        <a href="{{ route('home') }}" class="text-primary-500 underline">بازگشت به صفحه اصلی</a>
    </main>


<footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
    @include('partial/footer')
</footer>

</body>

<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{--@include('script/scripts')--}}>


<!-- Mirrored from amirtttk.ir/digiStar/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:02 GMT -->
</html>
