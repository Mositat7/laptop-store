<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/digiStar/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:03 GMT -->
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

  </header>

  <main class="pt-24 md:pt-48 px-2 md:px-10">
    <div class="text-lg md:text-2xl text-zinc-800 px-4 md:px-20 pb-6 pt-5 md:py-2">
      نتیجه جستجو برای "لپ تاپ گیمینگ"
    </div>
    <div class="flex flex-col lg:flex-row md:px-8 md:mt-10 gap-5 pb-20">
      <!-- filters -->
      <div class="lg:w-3/12">
        <!-- filter btn -->
        <a href="#" class="filter-mobile md:hidden border border-zinc-200 bg-primary-500 fixed p-4 bottom-5 right-5 z-10 rounded-2xl">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M230.6,49.53A15.81,15.81,0,0,0,216,40H40A16,16,0,0,0,28.19,66.76l.08.09L96,139.17V216a16,16,0,0,0,24.87,13.32l32-21.34A16,16,0,0,0,160,194.66V139.17l67.74-72.32.08-.09A15.8,15.8,0,0,0,230.6,49.53ZM40,56h0Zm106.18,74.58A8,8,0,0,0,144,136v58.66L112,216V136a8,8,0,0,0-2.16-5.47L40,56H216Z"></path></svg>
        </a>
        <div id="mobile-filter" class="space-y-5 fixed transform translate-y-full md:translate-y-0 transition-transform duration-300 ease-in-out md:static bottom-0 right-4 z-[15] bg-white w-11/12 md:w-full shadow-2xl md:shadow-none border border-zinc-300 md:border-0 pb-5 px-5 md:px-0 rounded-t-2xl md:rounded-none">
          <button id="closeFilter" type="button" class="md:hidden mt-5 text-gray-400 cursor-pointer bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="border border-zinc-100 h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
            <button class="menu-toggle flex justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
              <span class="text-zinc-700 text-sm">دسته بندی</span>
              <img class="w-4 transition-transform opacity-80" src="{{ asset('assets/image/icons/arrowDown.svg')}}" alt="">
            </button>
            <ul class="submenu hidden mt-2">
              <li>
                <button class="menu-toggle text-xs flex justify-between w-full py-2 px-4 text-zinc-700">
                  <a href="#">طراحی گرافیک</a>
                </button>
              </li>
              <li>
                <button class="menu-toggle text-xs flex justify-between w-full py-2 px-4 text-zinc-700">
                  <a href="#">طراحی گرافیک</a>
                </button>
              </li>
              <li>
                <button class="menu-toggle text-xs flex justify-between w-full py-2 px-4 text-zinc-700">
                  <a href="#">طراحی گرافیک</a>
                </button>
              </li>
              <li>
                <button class="menu-toggle text-xs flex justify-between w-full py-2 px-4 text-zinc-700">
                  <a href="#">طراحی گرافیک</a>
                </button>
              </li>
              <li>
                <button class="menu-toggle text-xs flex justify-between w-full py-2 px-4 text-zinc-700">
                  <a href="#">طراحی گرافیک</a>
                </button>
              </li>
              <li>
                <button class="menu-toggle text-xs flex justify-between w-full py-2 px-4 text-zinc-700">
                  <a href="#">طراحی گرافیک</a>
                </button>
              </li>
            </ul>
          </div>
          <div class="border border-zinc-100 h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
            <button class="menu-toggle flex justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
              <span class="text-zinc-700 text-sm">برند ها</span>
              <img class="w-4 transition-transform opacity-80" src="{{ asset('assets/image/icons/arrowDown.svg')}}" alt="">
            </button>
            <ul class="submenu hidden mt-2">
              <li>
                <div class="flex w-full items-center gap-x-2 py-1 px-4">
                  <input id="c1" type="checkbox" value="" class="h-4 w-4 accent-primary-500 cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                  <label for="c1" class="w-full cursor-pointer py-2 pl-4 text-zinc-600 text-xs">
                    <span>
                      کالای دیجیتال
                    </span>
                  </label>
                </div>
              </li>
              <li>
                <div class="flex w-full items-center gap-x-2 py-1 px-4">
                  <input id="c2" type="checkbox" value="" class="h-4 w-4 accent-primary-500 cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                  <label for="c2" class="w-full cursor-pointer py-2 pl-4 text-zinc-600 text-xs">
                    <span>
                      کالای دیجیتال
                    </span>
                  </label>
                </div>
              </li>
              <li>
                <div class="flex w-full items-center gap-x-2 py-1 px-4">
                  <input id="c3" type="checkbox" value="" class="h-4 w-4 accent-primary-500 cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                  <label for="c3" class="w-full cursor-pointer py-2 pl-4 text-zinc-600 text-xs">
                    <span>
                      کالای دیجیتال
                    </span>
                  </label>
                </div>
              </li>
              <li>
                <div class="flex w-full items-center gap-x-2 py-1 px-4">
                  <input id="c4" type="checkbox" value="" class="h-4 w-4 accent-primary-500 cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                  <label for="c4" class="w-full cursor-pointer py-2 pl-4 text-zinc-600 text-xs">
                    <span>
                      کالای دیجیتال
                    </span>
                  </label>
                </div>
              </li>
              <li>
                <div class="flex w-full items-center gap-x-2 py-1 px-4">
                  <input id="c5" type="checkbox" value="" class="h-4 w-4 accent-primary-500 cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                  <label for="c5" class="w-full cursor-pointer py-2 pl-4 text-zinc-600 text-xs">
                    <span>
                      کالای دیجیتال
                    </span>
                  </label>
                </div>
              </li>
            </ul>
          </div>
          <div class="border border-zinc-100 h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
            <button class="menu-toggle flex justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
              <span class="text-zinc-700 text-sm">فیلتر بر اساس قیمت</span>
              <img class="w-4 transition-transform opacity-80" src="{{ asset('assets/image/icons/arrowDown.svg')}}" alt="">
            </button>
            <ul class="submenu hidden mt-2">
              <div class="space-y-4 px-6">
                <div id="shop-price-slider"></div>
                <div class="flex items-center justify-between">
                  <div
                    class="text-primary-400">
                    <span
                      class="text-xs font-semibold xl:text-sm"
                      id="shop-price-slider-min">
                    </span>
                    <span class="text-xs">تومان</span>
                  </div>
                  <div
                    class="text-primary-400">
                    <span
                      class="text-xs font-semibold xl:text-sm"
                      id="shop-price-slider-max">
                    </span>
                    <span class="text-xs">تومان</span>
                  </div>
                </div>
              </div>
            </ul>
          </div>
          <label class="border border-zinc-100 h-fit rounded-2xl hover:shadow-sm transition-all flex justify-between w-full py-5 px-4 cursor-pointer" for="onlyAvailableDesktop">
            <div class="text-zinc-700 text-sm">
              فقط کالا های موجود
            </div>
            <div class="relative inline-flex cursor-pointer items-center">
              <input class="peer sr-only" id="onlyAvailableDesktop" type="checkbox">
              <div class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all after:content-[''] peer-checked:bg-primary-400 peer-checked:after:translate-x-full peer-focus:ring-primary-400"></div>
            </div>
          </label>
        </div>
      </div>
      <!-- products -->
      <div class="lg:w-9/12">
        <div class="flex flex-wrap gap-3 md:gap-5 justify-start items-center bg-white shadow-box-sm rounded-3xl px-5 py-6 border border-zinc-100 mb-5">
          <div class="text-zinc-600 text-sm">
            مرتب سازی:
          </div>
          <div class="text-xs hover:text-primary-500 transition cursor-pointer text-primary-500">
            محبوب ترین
          </div>
          <div class="text-zinc-500 text-xs hover:text-primary-400 transition cursor-pointer">
            پرفروش ترین
          </div>
          <div class="text-zinc-500 text-xs hover:text-primary-400 transition cursor-pointer">
            ارزان ترین
          </div>
          <div class="text-zinc-500 text-xs hover:text-primary-400 transition cursor-pointer">
            گران ترین
          </div>
          <div class="text-zinc-500 text-xs hover:text-primary-400 transition cursor-pointer">
            جدیدترین
          </div>
          <div class="text-zinc-500 text-xs hover:text-primary-400 transition cursor-pointer">
            پربازدیدترین
          </div>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
          <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
            <a href="#" class="text-zinc-800">
              <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/1.webp')}}">
            </a>
            <p class="text-zinc-400 text-xs">
              Lap Top Lenovo Laser 107W
            </p>
            <a href="#" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
              لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی
            </a>
            <div class="flex items-center justify-between mt-4">
              <div class="flex gap-1.5">
                <div class="size-4 bg-zinc-800 rounded-full"></div>
                <div class="size-4 bg-zinc-500 rounded-full"></div>
                <div class="size-4 bg-zinc-300 rounded-full"></div>
              </div>
              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                <span>
                  <span>
                    (72)
                  </span>
                  <span>
                    4.4
                  </span>
                </span>
                <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
              </div>
            </div>
            <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
              <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
                17,270,000
                <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
              </div>
            </div>
          </div>
          <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
            <a href="#" class="text-zinc-800">
              <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/2.webp')}}">
            </a>
            <p class="text-zinc-400 text-xs">
              PS5 slim
            </p>
            <a href="#" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
              کنسول بازی ps5
            </a>
            <div class="flex items-center justify-between mt-4">
              <div class="flex gap-1.5">
                <div class="size-4 bg-zinc-800 rounded-full"></div>
                <div class="size-4 bg-zinc-300 rounded-full"></div>
              </div>
              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                <span>
                  <span>
                    (25)
                  </span>
                  <span>
                    4.2
                  </span>
                </span>
                <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
              </div>
            </div>
            <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
              <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
                24,500,000
                <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
              </div>
            </div>
          </div>
          <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
            <a href="#" class="text-zinc-800">
              <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/3.webp')}}">
            </a>
            <p class="text-zinc-400 text-xs">
              TSCO 726
            </p>
            <a href="#" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
              هنذفری تسکو مدل 726 TSCO
            </a>
            <div class="flex items-center justify-between mt-4">
              <div class="flex gap-1.5">
                <div class="size-4 bg-zinc-800 rounded-full"></div>
                <div class="size-4 bg-blue-500 rounded-full"></div>
                <div class="size-4 bg-pink-500 rounded-full"></div>
              </div>
              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                <span>
                  <span>
                    (97)
                  </span>
                  <span>
                    4.5
                  </span>
                </span>
                <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
              </div>
            </div>
            <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
              <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
                1,270,000
                <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
              </div>
            </div>
          </div>
          <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
            <a href="#" class="text-zinc-800">
              <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/4.webp')}}">
            </a>
            <p class="text-zinc-400 text-xs">
              Lap Top Lenovo Laser 107W
            </p>
            <a href="#" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
              لپ تاپ اچ پی مدل 2023 اورجینال ویتنام
            </a>
            <div class="flex items-center justify-between mt-4">
              <div class="flex gap-1.5">
                <div class="size-4 bg-zinc-800 rounded-full"></div>
                <div class="size-4 bg-zinc-500 rounded-full"></div>
                <div class="size-4 bg-zinc-300 rounded-full"></div>
              </div>
              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                <span>
                  <span>
                    (12)
                  </span>
                  <span>
                    3.9
                  </span>
                </span>
                <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
              </div>
            </div>
            <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
              <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
                23,000,000
                <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
              </div>
            </div>
          </div>
          <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
            <a href="#" class="text-zinc-800">
              <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/5.webp')}}">
            </a>
            <p class="text-zinc-400 text-xs">
              Lap Top Lenovo Laser 107W
            </p>
            <a href="#" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
              موبایل شیائومی مدل پوکو
            </a>
            <div class="flex items-center justify-between mt-4">
              <div class="flex gap-1.5">
                <div class="size-4 bg-zinc-800 rounded-full"></div>
                <div class="size-4 bg-zinc-500 rounded-full"></div>
                <div class="size-4 bg-green-300 rounded-full"></div>
              </div>
              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                <span>
                  <span>
                    (44)
                  </span>
                  <span>
                    4.2
                  </span>
                </span>
                <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
              </div>
            </div>
            <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
              <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
                15,750,000
                <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
              </div>
            </div>
          </div>
          <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
            <a href="#" class="text-zinc-800">
              <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/6.webp')}}">
            </a>
            <p class="text-zinc-400 text-xs">
              apple
            </p>
            <a href="#" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
              اپل واچ مدل ویتنام
            </a>
            <div class="flex items-center justify-between mt-4">
              <div class="flex gap-1.5">
                <div class="size-4 bg-zinc-800 rounded-full"></div>
                <div class="size-4 bg-red-500 rounded-full"></div>
                <div class="size-4 bg-green-500 rounded-full"></div>
              </div>
              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                <span>
                  <span>
                    (5)
                  </span>
                  <span>
                    4.8
                  </span>
                </span>
                <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
              </div>
            </div>
            <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
              <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
                35,000,000
                <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- pagination -->
    <div class="flex justify-center mb-12">
      <a href="#" class="flex items-center justify-center px-3.5 md:px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md -scale-x-100 hover:bg-primary-500 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 md:size-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
      </a>
      <a href="#" class="border border-zinc-100 text-sm md:text-base px-3.5 md:px-4 py-2 mx-1 transition-colors duration-300 transform bg-primary-500 text-white rounded-md">
          1
      </a>
      <a href="#" class="border border-zinc-100 text-sm md:text-base px-3.5 md:px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md hover:bg-primary-500 hover:text-white">
          2
      </a>
      <a href="#" class="border border-zinc-100 text-sm md:text-base px-3.5 md:px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md hover:bg-primary-500 hover:text-white">
          ...
      </a>
      <a href="#" class="border border-zinc-100 text-sm md:text-base px-3.5 md:px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md hover:bg-primary-500 hover:text-white">
          9
      </a>
      <a href="#" class="border border-zinc-100 text-sm md:text-base px-3.5 md:px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md hover:bg-primary-500 hover:text-white">
          10
      </a>
      <a href="#" class="flex items-center justify-center px-3.5 md:px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md -scale-x-100 hover:bg-primary-500 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 md:size-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg>
      </a>
    </div>
  </main>

  <footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
@include('partial/footer')
  </footer>

</body>

<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{--@include('script/scripts')--}}

<!-- Mirrored from amirtttk.ir/digiStar/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:04 GMT -->
</html>
