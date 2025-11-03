<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

  <title>فروشگاه دیجی استار</title>
</head>
<body class="max-w-[1700px] mx-auto">

  <!-- bg blur mobile -->
  <div id="overlay" class="fixed z-10 inset-0 bg-black/35 hidden transition-opacity duration-300"></div>
  <!-- Sidebar -->
  <div id="mobile-menu" class="z-20 fixed top-0 right-0 w-10/12 md:w-6/12 lg:w-[17%] h-screen bg-white shadow-lg transform translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
    <div class="p-5 flex flex-col gap-y-3 justify-center items-center">
      <!-- logo -->
      <div class="flex justify-center">
        <a href="https://amirtttk.ir/">
          <img src="{{ asset('assets/image/logo.png') }}" class="max-w-24 md:max-w-28 h-fit" alt="">
        </a>
      </div>
    </div>
    <ul class="p-5 space-y-1 text-sm text-zinc-800 overflow-y-auto pb-48">
      <li>
        <a href="/" class="py-3 px-4 hover:bg-gradient-to-l hover:from-zinc-100 hover:to-transparent rounded-lg flex gap-x-2">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="fill-gray-700" d="M11.25 18C11.25 18.1989 11.329 18.3897 11.4697 18.5303C11.6103 18.671 11.8011 18.75 12 18.75C12.1989 18.75 12.3897 18.671 12.5303 18.5303C12.671 18.3897 12.75 18.1989 12.75 18V15C12.75 14.8011 12.671 14.6103 12.5303 14.4697C12.3897 14.329 12.1989 14.25 12 14.25C11.8011 14.25 11.6103 14.329 11.4697 14.4697C11.329 14.6103 11.25 14.8011 11.25 15V18Z" fill=""/>
            <path class="fill-gray-700" fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C11.292 1.25 10.649 1.453 9.95 1.792C9.276 2.12 8.496 2.604 7.523 3.208L5.456 4.491C4.536 5.063 3.797 5.521 3.229 5.956C2.64 6.406 2.188 6.866 1.861 7.463C1.535 8.058 1.389 8.692 1.318 9.441C1.25 10.166 1.25 11.054 1.25 12.167V13.78C1.25 15.684 1.25 17.187 1.403 18.362C1.559 19.567 1.889 20.54 2.633 21.309C3.38 22.082 4.33 22.428 5.508 22.591C6.648 22.75 8.106 22.75 9.942 22.75H14.058C15.894 22.75 17.352 22.75 18.492 22.591C19.669 22.428 20.62 22.082 21.368 21.309C22.111 20.54 22.441 19.567 22.598 18.362C22.75 17.187 22.75 15.684 22.75 13.78V12.167C22.75 11.054 22.75 10.167 22.682 9.441C22.612 8.691 22.465 8.058 22.139 7.463C21.812 6.866 21.359 6.407 20.771 5.956C20.203 5.52 19.465 5.063 18.544 4.491L16.477 3.208C15.504 2.604 14.724 2.12 14.049 1.792C13.352 1.452 12.709 1.25 12 1.25ZM8.28 4.504C9.295 3.874 10.01 3.432 10.607 3.141C11.188 2.858 11.6 2.75 12 2.75C12.4 2.75 12.812 2.858 13.393 3.141C13.991 3.431 14.705 3.874 15.72 4.504L17.72 5.745C18.681 6.342 19.356 6.761 19.86 7.147C20.349 7.522 20.63 7.831 20.823 8.183C21.016 8.536 21.129 8.949 21.188 9.581C21.249 10.229 21.25 11.046 21.25 12.204V13.725C21.25 15.695 21.248 17.101 21.11 18.168C20.974 19.216 20.717 19.824 20.29 20.267C19.865 20.706 19.287 20.967 18.286 21.106C17.26 21.248 15.907 21.25 14 21.25H10C8.092 21.25 6.74 21.248 5.714 21.106C4.713 20.966 4.135 20.706 3.711 20.266C3.283 19.824 3.026 19.216 2.891 18.168C2.751 17.101 2.75 15.696 2.75 13.725V12.204C2.75 11.046 2.75 10.229 2.812 9.581C2.871 8.949 2.984 8.536 3.177 8.183C3.37 7.831 3.651 7.522 4.141 7.147C4.644 6.761 5.319 6.342 6.28 5.745L8.28 4.504Z" fill=""/>
          </svg>
          صفحه اصلی
        </a>
      </li>
      <li>
        <a href="#" class="py-3 px-4 hover:bg-gradient-to-l hover:from-zinc-100 hover:to-transparent rounded-lg flex gap-x-2">
          <svg class="fill-gray-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M104,216a16,16,0,1,1-16-16A16,16,0,0,1,104,216Zm88-16a16,16,0,1,0,16,16A16,16,0,0,0,192,200ZM239.71,74.14l-25.64,92.28A24.06,24.06,0,0,1,191,184H92.16A24.06,24.06,0,0,1,69,166.42L33.92,40H16a8,8,0,0,1,0-16H40a8,8,0,0,1,7.71,5.86L57.19,64H232a8,8,0,0,1,7.71,10.14ZM221.47,80H61.64l22.81,82.14A8,8,0,0,0,92.16,168H191a8,8,0,0,0,7.71-5.86Z"></path></svg>
         سفارشات
        </a>
      </li>
      <li>
        <a href="#" class="py-3 px-4 hover:bg-gradient-to-l hover:from-zinc-100 hover:to-transparent rounded-lg flex gap-x-2">
          <svg class="fill-gray-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z"></path></svg>
          علاقه مندی ها
        </a>
      </li>
      <li>
        <a href="#" class="py-3 px-4 hover:bg-gradient-to-l hover:from-zinc-100 hover:to-transparent rounded-lg flex gap-x-2">
          <svg class="fill-gray-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M112,80a16,16,0,1,1,16,16A16,16,0,0,1,112,80ZM64,80a64,64,0,0,1,128,0c0,59.95-57.58,93.54-60,94.95a8,8,0,0,1-7.94,0C121.58,173.54,64,140,64,80Zm16,0c0,42.2,35.84,70.21,48,78.5,12.15-8.28,48-36.3,48-78.5a48,48,0,0,0-96,0Zm122.77,67.63a8,8,0,0,0-5.54,15C213.74,168.74,224,176.92,224,184c0,13.36-36.52,32-96,32s-96-18.64-96-32c0-7.08,10.26-15.26,26.77-21.36a8,8,0,0,0-5.54-15C29.22,156.49,16,169.41,16,184c0,31.18,57.71,48,112,48s112-16.82,112-48C240,169.41,226.78,156.49,202.77,147.63Z"></path></svg>
          آدرس ها
        </a>
      </li>
      <li>
        <a href="#" class="py-3 px-4 hover:bg-gradient-to-l hover:from-zinc-100 hover:to-transparent rounded-lg flex gap-x-2">
          <svg class="fill-gray-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path></svg>
          اطلاعات شخصی
        </a>
      </li>
      <li>
        <a href="#" class="py-3 px-4 hover:bg-gradient-to-l hover:from-red-200 text-red-500 hover:text-red-600 hover:to-transparent rounded-lg flex gap-x-2 group">
          <svg class="fill-gray-700 group-hover:fill-red-600 transition" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z"></path></svg>
          خروج
        </a>
      </li>
    </ul>
  </div>
  <div class="w-full lg:w-[83%] mr-auto flex flex-col min-h-screen">
    <!-- header -->
    <header class="bg-white w-full h-14 flex justify-between items-center px-4 shrink-0">
   @include('partial/header_dashboard')
    </header>
    <main class="p-6 flex-1 overflow-y-auto">
      <div class="bg-white rounded-2xl min-h-80 h-auto shadow-custom p-4">
        <div class="px-2 md:px-3 pt-3 pb-5 mb-3 text-zinc-700 text-sm md:text-base flex items-center gap-x-2 border-b border-zinc-200">
          <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg>
          صفحه اصلی
        </div>
        <div class="grid grid-cols-2 md:flex gap-5 text-xs md:text-sm">
          <div class="flex md:w-1/4 gap-x-2 items-center bg-gradient-to-bl from-red-500 to-red-700 rounded-2xl p-3">
            <svg class="fill-zinc-100 bg-red-600 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="" viewBox="0 0 256 256"><path d="M232,96v96a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V96Z" opacity="0.2"></path><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>
            <div class="text-zinc-50 space-y-1">
              <div>
                موجودی حساب
              </div>
              <div>
                75,000 تومان
              </div>
            </div>
          </div>
          <div class="flex md:w-1/4 gap-x-2 items-center bg-gradient-to-bl from-yellow-500 to-yellow-700 rounded-2xl p-3">
            <svg class="fill-zinc-100 bg-yellow-600 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M240,104,128,224,80,104l48-64h56Z" opacity="0.2"></path><path d="M246,98.73l-56-64A8,8,0,0,0,184,32H72a8,8,0,0,0-6,2.73l-56,64a8,8,0,0,0,.17,10.73l112,120a8,8,0,0,0,11.7,0l112-120A8,8,0,0,0,246,98.73ZM222.37,96H180L144,48h36.37ZM74.58,112l30.13,75.33L34.41,112Zm89.6,0L128,202.46,91.82,112ZM96,96l32-42.67L160,96Zm85.42,16h40.17l-70.3,75.33ZM75.63,48H112L76,96H33.63Z"></path></svg>
            <div class="text-zinc-100 space-y-1">
              <div>
                امتیاز ها
              </div>
              <div>
                735 امتیاز
              </div>
            </div>
          </div>
          <div class="flex md:w-1/4 gap-x-2 items-center bg-gradient-to-bl from-blue-500 to-blue-700 rounded-2xl p-3">
            <svg class="fill-zinc-100 bg-blue-600 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M216,64l-12.16,66.86A16,16,0,0,1,188.1,144H62.55L48,64Z" opacity="0.2"></path><path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path></svg>
            <div class="text-zinc-100 space-y-1">
              <div>
               سفارشات کل
              </div>
              <div>
                16
              </div>
            </div>
          </div>
          <div class="flex md:w-1/4 gap-x-2 items-center bg-gradient-to-bl from-green-500 to-green-700 rounded-2xl p-3">
            <svg class="fill-zinc-100 bg-green-600 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M16,152H48v56H16a8,8,0,0,1-8-8V160A8,8,0,0,1,16,152ZM204,56a28,28,0,0,0-12,2.71h0A28,28,0,1,0,176,85.29h0A28,28,0,1,0,204,56Z" opacity="0.2"></path><path d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z"></path></svg>
            <div class="text-zinc-100 space-y-1">
              <div>
                تحویل داده شده
              </div>
              <div>
                16
              </div>
            </div>
          </div>
        </div>
        <div class="px-2 md:px-3 pt-16 pb-5 mb-3 text-zinc-700 text-sm md:text-base flex items-center gap-x-2 border-b border-zinc-200">
          <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg>
          آخرین سفارشات
        </div>
        <div
          class="relative flex flex-col w-full h-full overflow-scroll text-gray-700">
          <table class="w-full text-right table-auto min-w-max">
            <thead>
              <tr>
                <th class="p-4 border-b border-b-zinc-400">
                  <p class="block text-sm opacity-70">
                    شماره سفارش
                  </p>
                </th>
                <th class="p-4 border-b border-b-zinc-400">
                  <p class="block text-sm opacity-70">
                    تاریخ
                  </p>
                </th>
                <th class="p-4 border-b border-b-zinc-400">
                  <p class="block text-sm opacity-70">
                    مبلغ
                  </p>
                </th>
                <th class="p-4 border-b border-b-zinc-400">
                  <p class="block text-sm opacity-70">
                    جزئیات
                  </p>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="even:bg-zinc-100">
                <td class="p-4">
                  <p class="block text-sm">
                    #234561
                  </p>
                </td>
                <td class="p-4">
                  <p class="block text-sm">
                    1404/01/23
                  </p>
                </td>
                <td class="p-4">
                  <p class="block text-sm">
                    175,000 تومان
                  </p>
                </td>
                <td class="p-4">
                  <a href="#" class="block text-xs">مشاهده</a>
                </td>
              </tr>
              <tr class="even:bg-zinc-100">
                <td class="p-4">
                  <p class="block text-sm">
                    #234561
                  </p>
                </td>
                <td class="p-4">
                  <p class="block text-sm">
                    1404/01/23
                  </p>
                </td>
                <td class="p-4">
                  <p class="block text-sm">
                    175,000 تومان
                  </p>
                </td>
                <td class="p-4">
                  <a href="#" class="block text-xs">مشاهده</a>
                </td>
              </tr>
              <tr class="even:bg-zinc-100">
                <td class="p-4">
                  <p class="block text-sm">
                    #234561
                  </p>
                </td>
                <td class="p-4">
                  <p class="block text-sm">
                    1404/01/23
                  </p>
                </td>
                <td class="p-4">
                  <p class="block text-sm">
                    175,000 تومان
                  </p>
                </td>
                <td class="p-4">
                  <a href="#" class="block text-xs">مشاهده</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- slider 1 -->
    <div class="mt-12 md:mt-20">
      <!-- top slider -->
      <div class="flex gap-x-4 justify-between items-center mb-7">
        <div class="w-48 min-w-fit text-zinc-700 md:font-yekanBakhBold">
          محصولات پیشنهادی برای شما
        </div>
      </div>
      <!-- main slider -->
      <div class="containerPSlider swiper">
        <div class="productSliderDashboard">
          <div class="card-wrapper swiper-wrapper pb-10">
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
                  1,270,000
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
                  1,270,000
                  <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
              <a href="#" class="text-zinc-800">
                <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/6.webp')}}">
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
                  1,270,000
                  <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
              <a href="#" class="text-zinc-800">
                <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/7.webp')}}">
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
                  1,270,000
                  <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
              <a href="#" class="text-zinc-800">
                <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/8.webp')}}">
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
                  1,270,000
                  <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
              <a href="#" class="text-zinc-800">
                <img class="rounded-xl mb-3" src="{{ asset('assets/image/products/2.webp')}}">
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
                  1,270,000
                  <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </main>
    <footer class="bg-white h-12 flex items-center justify-end px-5 w-full text-zinc-500 text-xs shrink-0">
      تمامی حقوق توسط تیم برنامه نویسی امیران محفوظ است.
    </footer>
  </div>

</body>

<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{--@include('script/scripts')--}}>
</html>
