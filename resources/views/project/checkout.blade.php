<!DOCTYPE html>
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
{{-- {{ route('cart.index') }}--}}
 <main class="pt-24 md:pt-48 px-2 md:px-10">
     <nav class="flex items-center gap-1 md:gap-5 w-full md:w-10/12 md:mx-auto">
         <a class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-green-500 text-sm" href="#">
             <svg class="fill-green-600" width="24" height="24" viewBox="0 0 24 24">...</svg>
             سبدخرید
         </a>
         <div class="h-0.5 w-full bg-gradient-to-r from-white via-zinc-300 to-white"></div>
         <a class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-primary-500 text-sm" href="{{ route('checkout.index') }}">
             <svg class="fill-primary-700" width="24" height="24" viewBox="0 0 24 24">...</svg>
             اطلاعات پرداخت
         </a>
         <div class="h-0.5 w-full bg-gradient-to-r from-white via-zinc-300 to-white"></div>
         <span class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-zinc-700 text-sm">
            <svg class="stroke-zinc-700" width="27" height="27" viewBox="0 0 27 27">...</svg>
            اتمام خرید
        </span>
     </nav>

     <!-- ✅ فرم اصلی: همه چیز داخل این تگ باشد -->
     <form method="POST" action="{{ route('checkout.payment') }}" class="flex flex-col lg:flex-row px-4 md:px-20 mt-10 gap-5 pb-20">
         @csrf

         <div class="lg:w-9/12 border border-zinc-200 rounded-xl p-5">

             <!-- فرم اطلاعات کاربر -->
             <div class="sm:flex gap-x-5 mt-7">
                 <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                     <label class="text-zinc-700">نام</label>
                     <input name="first_name" class="rounded-2xl text-sm text-zinc-600 w-full border border-zinc-200 px-5 py-3.5" type="text" value="{{ old('first_name', auth()->user()->name) }}" required>
                 </div>
                 <div class="sm:w-1/2 flex flex-col gap-y-1">
                     <label class="text-zinc-700">نام خانوادگی</label>
                     <input name="last_name" class="rounded-2xl text-sm text-zinc-600 w-full border border-zinc-200 px-5 py-3.5" type="text" value="{{ old('last_name', auth()->user()->family) }}" required>
                 </div>
             </div>

             <!-- استان و شهر -->
             <div class="sm:flex gap-x-5 mt-7">
                 <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                     <label class="text-zinc-700">استان</label>
                     <input name="province" type="text" class="rounded-2xl text-sm text-zinc-600 w-full border border-zinc-200 px-5 py-3.5"
                            value="{{ old('province') }}" placeholder="مثال: تهران" required>
                 </div>
                 <div class="sm:w-1/2 flex flex-col gap-y-1">
                     <label class="text-zinc-700">شهر</label>
                     <input name="city" type="text" class="rounded-2xl text-sm text-zinc-600 w-full border border-zinc-200 px-5 py-3.5"
                            value="{{ old('city') }}" placeholder="مثال: کرج" required>
                 </div>
             </div>

             <!-- آدرس کامل -->
             <div class="mt-7">
                 <label class="text-zinc-700">خیابان و کوچه و شماره پلاک و واحد</label>
                 <input name="address" class="rounded-2xl text-sm text-zinc-600 w-full border border-zinc-200 px-5 py-3.5" type="text" value="{{ old('address') }}" required>
             </div>

             <!-- تلفن و کد پستی -->
             <div class="sm:flex gap-x-5 mt-5">
                 <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                     <label class="text-zinc-700">تلفن</label>
                     <input name="phone" class="rounded-2xl text-sm text-zinc-600 w-full border border-zinc-200 px-5 py-3.5" type="text" value="{{ old('phone', auth()->user()->phone) }}" required>
                 </div>
                 <div class="sm:w-1/2 flex flex-col gap-y-1">
                     <label class="text-zinc-700">کد پستی</label>
                     <input name="postal_code" class="rounded-2xl text-sm text-zinc-600 w-full border border-zinc-200 px-5 py-3.5" type="text" value="{{ old('postal_code') }}">
                 </div>
             </div>

             <!-- توضیحات -->
             <div class="mt-5">
                 <label class="text-zinc-700">توضیحات اضافه</label>
                 <textarea name="note" placeholder="نکات مهم درباره تحویل محصول" cols="30" rows="7" class="rounded-2xl text-sm text-zinc-600 w-full border border-zinc-200 px-5 py-3.5">{{ old('note') }}</textarea>
             </div>

             <!-- نوع ارسال -->
             <div class="mb-5 mt-10">
                 <div class="flex gap-x-1 items-center text-zinc-700 border-b pb-2 mb-4">نوع ارسال</div>
                 <ul class="flex flex-col md:flex-row w-full gap-5">
                     @foreach($sendTypes as $send)
                         <li class="w-full">
                             <input type="radio" id="send{{ $send->id }}" name="send_type" value="{{ $send->id }}" class="hidden peer" {{ $loop->first ? 'checked' : '' }}>
                             <label for="send{{ $send->id }}" class="flex items-center justify-center gap-x-2 w-full p-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-primary-400 peer-checked:text-primary-400 peer-checked:shadow-md hover:bg-gray-100">
                                 <div class="text-center">
                                     <span class="text-sm">{{ $send->name }} :</span>
                                     <span class="text-sm">{{ number_format($send->price) }} تومان</span>
                                 </div>
                             </label>
                         </li>
                     @endforeach
                 </ul>
             </div>
         </div>

         <!-- جمع مبلغ -->
         <div class="lg:w-3/12 lg:pt-5 my-10 lg:my-0">
             <div class="flex justify-between items-center text-primary-500">
                 <div>جمع مبلغ نهایی</div>
                 <div class="flex">
                     <div class="text-2xl md:text-4xl font-yekanBakhBold">{{ number_format($finalPrice) }}</div>
                     <div class="-rotate-90 text-xs">تومان</div>
                 </div>
             </div>
             <div class="flex justify-between items-center text-zinc-600 mt-5">
                 <div class="text-sm">جمع مبلغ کل</div>
                 <div class="flex">
                     <div class="md:text-xl">{{ number_format($totalPrice) }}</div>
                     <div class="-rotate-90 text-[0.6rem]">تومان</div>
                 </div>
             </div>
             <div class="flex justify-between items-center text-zinc-600 mt-5">
                 <div class="text-sm">هزینه ارسال</div>
                 <div class="flex">
                     <div class="md:text-xl">{{ number_format($shippingCost) }}</div>
                     <div class="-rotate-90 text-[0.6rem]">تومان</div>
                 </div>
             </div>

             <!-- ✅ دکمه داخل همان فرم -->
             <button type="submit" class="block bg-primary-500 hover:bg-primary-400 text-white text-center mt-10 px-5 md:px-2.5 py-3 md:py-4 rounded-xl shadow-lg transition-all font-yekanBakhBold md:text-lg">
                 ثبت و پرداخت
             </button>
         </div>
     </form> <!-- ✅ پایان فرم -->
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
