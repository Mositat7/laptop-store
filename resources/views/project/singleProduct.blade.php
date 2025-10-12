<!DOCTYPE html>
<html lang="fa" dir="rtl" class="scroll-smooth">

<!-- Mirrored from amirtttk.ir/digiStar/singleProduct.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:04 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

  <title>فروشگاه دیجی استار</title>
</head>
<body class="max-w-[1700px] mx-auto">

  <header class="max-w-[1700px] fixed w-full z-50 flex md:block bg-white md:bg-transparent">
@include('partial/header')
{{--      nav--}}
      @include('partial/nav')
  </header>
  <main class="pt-24 md:pt-48 px-2 md:px-10">
      <div class="pb-20">
          <div class="flex flex-col lg:flex-row gap-8">
              <!-- photo -->
              <div class="lg:w-4/12">
                  <div class="flex gap-x-5 pr-10">
                      <!-- دکمه علاقه‌مندی (غیرفعال موقت) -->
                      <div class="relative">
                          <div class="group cursor-not-allowed relative inline-block text-center opacity-50">
                              <svg class="fill-zinc-400" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 256 256">
                                  <path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path>
                              </svg>
                              <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                                  برای استفاده وارد حساب کاربری شوید
                                  <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255">
                                      <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                                  </svg>
                              </div>
                          </div>
                      </div>

                      <!-- دکمه مقایسه (غیرفعال موقت) -->
                      <div class="relative">
                          <div class="group cursor-not-allowed relative inline-block text-center opacity-50">
                              <svg class="fill-zinc-400" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 256 256">
                                  <path d="M112,152a8,8,0,0,0-8,8v28.69L75.72,160.4A39.71,39.71,0,0,1,64,132.12V95a32,32,0,1,0-16,0v37.13a55.67,55.67,0,0,0,16.4,39.6L92.69,200H64a8,8,0,0,0,0,16h48a8,8,0,0,0,8-8V160A8,8,0,0,0,112,152ZM40,64A16,16,0,1,1,56,80,16,16,0,0,1,40,64Zm168,97V123.88a55.67,55.67,0,0,0-16.4-39.6L163.31,56H192a8,8,0,0,0,0-16H144a8,8,0,0,0-8,8V96a8,8,0,0,0,16,0V67.31L180.28,95.6A39.71,39.71,0,0,1,192,123.88V161a32,32,0,1,0,16,0Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,200,208Z"></path>
                              </svg>
                              <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                                  برای استفاده وارد حساب کاربری شوید
                                  <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255">
                                      <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                                  </svg>
                              </div>
                          </div>
                      </div>

                      <!-- دکمه اشتراک‌گذاری (فعال) -->
                      <div class="relative">
                          <div class="group cursor-pointer relative inline-block text-center">
                              <svg class="fill-zinc-700 hover:fill-zinc-800 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 256 256">
                                  <path d="M176,160a39.89,39.89,0,0,0-28.62,12.09l-46.1-29.63a39.8,39.8,0,0,0,0-28.92l46.1-29.63a40,40,0,1,0-8.66-13.45l-46.1,29.63a40,40,0,1,0,0,55.82l46.1,29.63A40,40,0,1,0,176,160Zm0-128a24,24,0,1,1-24,24A24,24,0,0,1,176,32ZM64,152a24,24,0,1,1,24-24A24,24,0,0,1,64,152Zm112,72a24,24,0,1,1,24-24A24,24,0,0,1,176,224Z"></path>
                              </svg>
                              <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                                  اشتراک گذاری
                                  <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255">
                                      <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                                  </svg>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- گالری تصاویر -->
                  <div class="relative">
                      <div class="flex gap-4 justify-center">
                          <div id="zoomBox" class="hidden absolute -left-56 top-0 md:size-64 bg-no-repeat bg-cover border-2 border-gray-300 rounded-md bg-white"></div>
                          <div class="relative overflow-hidden group">
                              @if($product->main_image)
                                  <img id="mainImage" src="{{ asset($product->main_image) }}"
                                       class="w-full max-w-96 object-cover rounded-lg"
                                       alt="{{ $product->title }}">
                              @else
                                  <div class="w-full max-w-96 h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                                      <span class="text-gray-500">بدون تصویر</span>
                                  </div>
                              @endif
                              <div id="zoomLens" class="hidden absolute w-20 h-20 bg-gray-300 opacity-30 pointer-events-none"></div>
                          </div>
                      </div>

                      <!-- تصاویر کوچک -->
                      @if($product->gallery)
                          @php
                              $galleryImages = json_decode($product->gallery, true);
                          @endphp
                          <div class="flex justify-start gap-2 mt-4 pb-4 overflow-x-auto">
                              @foreach($galleryImages as $image)
                                  <img src="{{ asset($image) }}"
                                       class="w-20 h-20 object-cover rounded-md cursor-pointer border border-zinc-200 hover:border-zinc-400 opacity-80 hover:opacity-100 transition-all"
                                       onclick="changeImage(this)"
                                       alt="{{ $product->title }}">
                              @endforeach
                          </div>
                      @else
                          <div class="flex justify-start gap-2 mt-4 pb-4 overflow-x-auto">
                              @if($product->main_image)
                                  <img src="{{ asset($product->main_image) }}"
                                       class="w-20 h-20 object-cover rounded-md cursor-pointer border border-zinc-200 hover:border-zinc-400 opacity-80 hover:opacity-100 transition-all"
                                       onclick="changeImage(this)"
                                       alt="{{ $product->title }}">
                              @endif
                          </div>
                      @endif
                  </div>
              </div>

              <!-- info -->
              <div class="lg:w-5/12">
                  <!-- مسیر ناوبری -->
                  <div class="mb-7 text-xs flex flex-wrap space-y-2 md:space-y-0 items-center gap-x-2 opacity-90">
                      <a href="{{ route('home') }}" class="text-zinc-500 hover:text-primary-500 transition">
                          خانه
                      </a>
                      <svg class="size-3 fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
                          <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path>
                      </svg>
                      @if($product->category)
                          <a href="#" class="text-zinc-500 hover:text-primary-500 transition">
                              {{ $product->category->name }}
                          </a>
                          <svg class="size-3 fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
                              <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path>
                          </svg>
                      @endif
                      <span class="text-primary-500">
                        {{ $product->title }}
                    </span>
                  </div>
            <div class="text-zinc-800 md:text-2xl font-semibold leading-7">
                {{ $product->title }}
            </div>
            <div class="text-zinc-400 text-xs md:text-sm mt-4">
                {{ $product->short_description }}
            </div>
            <div class="flex gap-x-5 items-center mt-3">
                <a href="#" class="flex items-start gap-x-1 text-sm text-primary-500">
                    <svg class="fill-primary-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256">
                        <path d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path>
                    </svg>
                    <span>
            <span>{{ $product->reviews_count }}</span>
            <span>دیدگاه</span>
        </span>
                </a>
                <div class="flex items-start gap-x-1 text-sm text-zinc-500">
        <span>
            <span>({{ $product->reviews_count }})</span>
            <span>{{ number_format($product->rating, 1) }}</span>
        </span>
                    <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256">
                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                    </svg>
                </div>
            </div>

            @if($product->description)
                <div class="mt-8 text-zinc-700">
                    ویژگی های محصول:
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 max-w-md py-3 mb-5 gap-3">
                    @if($product->cpu)
                        <div class="flex flex-col gap-x-2 justify-center bg-gray-100 rounded-md px-2 py-3">
                            <div class="text-zinc-500 text-xs">پردازنده:</div>
                            <div class="text-zinc-700 text-sm">{{ $product->cpu }}</div>
                        </div>
                    @endif

                    @if($product->ram)
                        <div class="flex flex-col gap-x-2 justify-center bg-gray-100 rounded-md px-2 py-3">
                            <div class="text-zinc-500 text-xs">مقدار حافظه RAM:</div>
                            <div class="text-zinc-700 text-sm">{{ $product->ram }}</div>
                        </div>
                    @endif

                    @if($product->storage)
                        <div class="flex flex-col gap-x-2 justify-center bg-gray-100 rounded-md px-2 py-3">
                            <div class="text-zinc-500 text-xs">حافظه داخلی:</div>
                            <div class="text-zinc-700 text-sm">{{ $product->storage }}</div>
                        </div>
                    @endif

                    @if($product->display)
                        <div class="flex flex-col gap-x-2 justify-center bg-gray-100 rounded-md px-2 py-3">
                            <div class="text-zinc-500 text-xs">نمایشگر:</div>
                            <div class="text-zinc-700 text-sm">{{ $product->display }}</div>
                        </div>
                    @endif

                    @if($product->gpu)
                        <div class="flex flex-col gap-x-2 justify-center bg-gray-100 rounded-md px-2 py-3">
                            <div class="text-zinc-500 text-xs">کارت گرافیک:</div>
                            <div class="text-zinc-700 text-sm">{{ $product->gpu }}</div>
                        </div>
                    @endif

                    @if($product->battery)
                        <div class="flex flex-col gap-x-2 justify-center bg-gray-100 rounded-md px-2 py-3">
                            <div class="text-zinc-500 text-xs">باتری:</div>
                            <div class="text-zinc-700 text-sm">{{ $product->battery }}</div>
                        </div>
                    @endif
                </div>
            @endif

            <div class="flex gap-x-2 mt-2 pt-2 text-zinc-500 text-xs md:text-sm border-t border-t-zinc-200 leading-6">
                <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="" viewBox="0 0 256 256">
                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path>
                </svg>
                درخواست مرجوع کردن کالا در گروه لپ تاپ با دلیل "انصراف از خرید" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).
            </div>
        </div>

          <!-- buy -->
          <div class="lg:w-3/12">
              <div class="lg:mt-8 mb-8">
                  <div class="text-zinc-700">رنگ:</div>
                  @if($product->colors->count() > 0)
                      <ul class="flex flex-wrap gap-2">
                          @foreach($product->colors as $index => $color)
                              <li>
                                  <input type="radio" id="color_{{ $color->id }}" name="color" value="{{ $color->id }}" class="hidden peer" {{ $index === 0 ? 'checked' : '' }}>
                                  <label for="color_{{ $color->id }}" class="inline-flex items-center justify-center px-2 py-3 text-gray-600 bg-white border-2 border-gray-200 rounded-2xl cursor-pointer peer-checked:border-primary-300 hover:text-gray-600 hover:bg-gray-100">
                                      <div class="flex gap-x-2">
                                          <div class="w-5 h-5 rounded-full border border-gray-300" style="background-color: {{ $color->code }}"></div>
                                          <div class="text-sm">{{ $color->name }}</div>
                                      </div>
                                  </label>
                              </li>
                          @endforeach
                      </ul>
                  @else
                      <p class="text-zinc-500 text-sm">رنگی برای این محصول تعریف نشده است.</p>
                  @endif
              </div>

              <div class="p-3 border border-zinc-300 rounded-xl mx-auto divide-y divide-zinc-200">
                  <div class="flex gap-x-1 items-center text-zinc-600 text-sm pb-5 pt-3">
                      <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256">
                          <path d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"></path>
                      </svg>
                      <div>گارانتی 12 ماهه</div>
                  </div>

                  <div class="flex gap-x-1 items-center text-zinc-600 text-sm py-5">
                      <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256">
                          <path d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"></path>
                      </svg>
                      <div>ارسال 3 روز کاری</div>
                  </div>

                  <div class="flex gap-x-1 items-center text-green-500 text-sm py-5">
                      <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256">
                          <path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path>
                      </svg>
                      <div>رضایت از محصول:</div>
                      <span>97%</span>
                  </div>

                  <div class="flex flex-col justify-center py-5">
                      <div class="text-zinc-800 text-left">
                          @if($product->discount_price)
                              <span class="font-yekanBakhExtraBold text-3xl">{{ number_format($product->discount_price) }}</span>
                              <span class="text-xs line-through text-zinc-400 mr-2">{{ number_format($product->price) }}</span>
                          @else
                              <span class="font-yekanBakhExtraBold text-3xl">{{ number_format($product->price) }}</span>
                          @endif
                          <span class="text-xs">تومان</span>
                      </div>

                      <div class="text-xs {{ $product->stock > 0 ? 'text-green-500' : 'text-red-400' }} mt-2">
                          @if($product->stock > 0)
                              {{ $product->stock }} عدد در انبار باقی مانده
                          @else
                              موجودی تمام شده
                          @endif
                      </div>

                      <div class="quantity-container mt-5 flex h-10 w-full items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                          <button class="cursor-pointer" type="button" data-action="decrement">
                              <svg class="fill-red-500 size-5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                  <path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path>
                              </svg>
                          </button>
                          <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm md:text-lg font-yekanBakhExtraBold text-zinc-600 outline-none">
                          <button class="cursor-pointer" type="button" data-action="increment">
                              <svg class="fill-green-500 size-5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                  <path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path>
                              </svg>
                          </button>
                      </div>
                  </div>

                  @if($product->stock > 0)
                      <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-primary-400 to-primary-600 hover:opacity-80 transition text-gray-100 rounded-lg">
                          افزودن به سبد خرید
                      </button>
                  @else
                      <button class="hidden lg:block mx-auto w-full px-2 py-3 text-sm bg-gradient-to-bl from-primary-500 to-primary-400 opacity-80 cursor-not-allowed transition text-gray-100 rounded-lg">
                          محصول موجود نیست!
                      </button>
                  @endif
              </div>
          <div class="flex items-center gap-x-1 mt-4 text-zinc-600 text-xs">
            <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path></svg>
            هزینه پست برای سبد خرید بالای 400 هزار تومان رایگان میباشد.
          </div>
          <!-- fixed div buy mobile -->
          <div class="fixed flex bottom-0 right-0 lg:hidden bg-white border-t border-t-zinc-300 w-full px-5 py-3 gap-x-2 z-50">
            <button class="mx-auto 5 w-1/2 px-2 py-3 text-sm bg-gradient-to-bl from-primary-400 to-primary-600 hover:opacity-80 transition text-gray-100 rounded-lg">
              افزودن به سبد خرید
            </button>
            <!-- <button class="mx-auto 5 w-1/2 px-2 py-3 text-sm bg-gradient-to-bl from-primary-500 to-primary-400 opacity-80 cursor-not-allowed transition text-gray-100 rounded-lg">
              محصول موجود نیست!
            </button> -->
            <span class="flex flex-col justify-center items-end w-1/2">
              <div class="text-zinc-700 text-left">
                <span class="font-yekanBakhExtraBold text-xl">23,380,000</span>
                <span class="text-xs">تومان</span>
              </div>
              <div class="text-xs text-red-400">
                تنها 1 عدد در انبار باقی مانده
              </div>
            </span>
          </div>
        </div>
      </div>
      <div class="flex gap-x-8 mt-20 pb-2 border-b border-zinc-200">
        <a class="text-zinc-600 hover:text-zinc-800 transition" href="#details">
          توضیحات
        </a>
        <a class="text-zinc-600 hover:text-zinc-800 transition" href="#proper">
          مشخصات
        </a>
        <a class="text-zinc-600 hover:text-zinc-800 transition" href="#comments">
          دیدگاه ها
        </a>
        <a class="text-zinc-600 hover:text-zinc-800 transition" href="#comments2">
          پرسش ها
        </a>
      </div>
{{--      <div class="p-4 border-b border-zinc-200 scroll-mt-36" id="details">--}}
{{--        <p class="text-zinc-800 md:text-lg mb-1 mt-4">--}}
{{--          توضیحات این محصول--}}
{{--        </p>--}}
{{--        <p class="text-zinc-600 text-xs md:text-sm leading-8 my-2">--}}
{{--          دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--        </p>--}}
{{--        <p class="text-zinc-600 text-xs md:text-sm leading-8 my-2">--}}
{{--          دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--        </p>--}}
{{--        <img class="rounded-xl w-full" src="{{ asset('assets/image/heroSlider/1.webp')}}" alt="">--}}
{{--        <p class="text-zinc-600 text-xs md:text-sm leading-8 my-2">--}}
{{--          دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--        </p>--}}
{{--        <p class="text-zinc-600 text-xs md:text-sm leading-8 my-2">--}}
{{--          دیجیتو فروشگاه آنلاین معتبری است که انواع کالاهای دیجیتال مانند گوشی، لپ‌تاپ، تبلت و لوازم جانبی را با ضمانت اصالت و ارسال سریع ارائه می‌دهد. با تنوع گسترده محصولات، قیمت‌های رقابتی و پشتیبانی حرفه‌ای، خریدی آسان و مطمئن را تجربه کنید. بررسی تخصصی، مقایسه و انتخاب آگاهانه از مزایای خرید از دیجیتو است. برای دسترسی به جدیدترین محصولات دیجیتال، همین حالا به دیجیتو سر بزنید!--}}
{{--        </p>--}}
{{--      </div>--}}
{{--      <div class="p-4 border-b border-zinc-200 scroll-mt-36" id="proper">--}}
{{--        <p class="text-zinc-800 md:text-lg mb-1 mt-4">--}}
{{--          مشخصات محصول--}}
{{--        </p>--}}
{{--        <div class="text-gray-500 text-sm divide-y divide-zinc-200">--}}
{{--          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">--}}
{{--            <div class="text-sm md:text-basetext-zinc-700 w-3/12 font-yekanBakhRegular">--}}
{{--              پردازنده:--}}
{{--            </div>--}}
{{--            <div class="md:text-lg text-zinc-600 w-9/12 font-yekanBakhExtraBold">--}}
{{--              AM32x new product AM32x new product AM32x new product AM32x new product--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">--}}
{{--            <div class="text-sm md:text-basetext-zinc-700 w-3/12 font-yekanBakhRegular">--}}
{{--              پردازنده:--}}
{{--            </div>--}}
{{--            <div class="md:text-lg text-zinc-600 w-9/12 font-yekanBakhExtraBold">--}}
{{--              AM32x new product--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">--}}
{{--            <div class="text-sm md:text-basetext-zinc-700 w-3/12 font-yekanBakhRegular">--}}
{{--              پردازنده:--}}
{{--            </div>--}}
{{--            <div class="md:text-lg text-zinc-600 w-9/12 font-yekanBakhExtraBold">--}}
{{--              AM32x new product--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">--}}
{{--            <div class="text-sm md:text-basetext-zinc-700 w-3/12 font-yekanBakhRegular">--}}
{{--              پردازنده:--}}
{{--            </div>--}}
{{--            <div class="md:text-lg text-zinc-600 w-9/12 font-yekanBakhExtraBold">--}}
{{--              AM32x new product--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">--}}
{{--            <div class="text-sm md:text-basetext-zinc-700 w-3/12 font-yekanBakhRegular">--}}
{{--              پردازنده:--}}
{{--            </div>--}}
{{--            <div class="md:text-lg text-zinc-600 w-9/12 font-yekanBakhExtraBold">--}}
{{--              AM32x new product--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">--}}
{{--            <div class="text-sm md:text-basetext-zinc-700 w-3/12 font-yekanBakhRegular">--}}
{{--              پردازنده:--}}
{{--            </div>--}}
{{--            <div class="md:text-lg text-zinc-600 w-9/12 font-yekanBakhExtraBold">--}}
{{--              AM32x new product--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">--}}
{{--            <div class="text-sm md:text-basetext-zinc-700 w-3/12 font-yekanBakhRegular">--}}
{{--              پردازنده:--}}
{{--            </div>--}}
{{--            <div class="md:text-lg text-zinc-600 w-9/12 font-yekanBakhExtraBold">--}}
{{--              AM32x new product--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
          <!-- بخش توضیحات محصول -->
          <section id="details" class="mt-12 pt-8 border-t border-zinc-200">
              <h3 class="text-xl font-bold text-zinc-800 mb-6">توضیحات محصول</h3>
              <div class="prose max-w-none text-zinc-600 leading-7">
                  @if($product->description)
                      {!! nl2br(e($product->description)) !!}
                  @else
                      <p class="text-zinc-500">توضیحاتی برای این محصول وجود ندارد.</p>
                  @endif
              </div>
          </section>

          <!-- بخش مشخصات فنی -->
          <section id="specs" class="mt-12 pt-8 border-t border-zinc-200">
              <h3 class="text-xl font-bold text-zinc-800 mb-6">مشخصات فنی</h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  @if($product->cpu)
                      <div class="flex justify-between py-3 border-b border-zinc-100">
                          <span class="text-zinc-600">پردازنده (CPU)</span>
                          <span class="text-zinc-800 font-medium">{{ $product->cpu }}</span>
                      </div>
                  @endif

                  @if($product->gpu)
                      <div class="flex justify-between py-3 border-b border-zinc-100">
                          <span class="text-zinc-600">کارت گرافیک (GPU)</span>
                          <span class="text-zinc-800 font-medium">{{ $product->gpu }}</span>
                      </div>
                  @endif

                  @if($product->ram)
                      <div class="flex justify-between py-3 border-b border-zinc-100">
                          <span class="text-zinc-600">حافظه RAM</span>
                          <span class="text-zinc-800 font-medium">{{ $product->ram }}</span>
                      </div>
                  @endif

                  @if($product->storage)
                      <div class="flex justify-between py-3 border-b border-zinc-100">
                          <span class="text-zinc-600">حافظه داخلی</span>
                          <span class="text-zinc-800 font-medium">{{ $product->storage }}</span>
                      </div>
                  @endif

                  @if($product->display)
                      <div class="flex justify-between py-3 border-b border-zinc-100">
                          <span class="text-zinc-600">نمایشگر</span>
                          <span class="text-zinc-800 font-medium">{{ $product->display }}</span>
                      </div>
                  @endif

                  @if($product->battery)
                      <div class="flex justify-between py-3 border-b border-zinc-100">
                          <span class="text-zinc-600">باتری</span>
                          <span class="text-zinc-800 font-medium">{{ $product->battery }}</span>
                      </div>
                  @endif
              </div>
          </section>
      <div class="p-4 scroll-mt-36" id="comments">
        <p class="text-zinc-800 md:text-lg mb-1 mt-4">
          دیدگاه ها
        </p>
        <div class="lg:flex gap-5">
          <div class="lg:w-3/12 py-5">
            <div class="mt-4 mb-2 text-sm text-zinc-700">
              شما هم دیدگاه خود را ثبت کنید
            </div>
            <ul class="grid my-3 gap-5 grid-cols-2">
              <li>
                <input type="radio" id="yes" name="hosting" value="yes" class="hidden peer" required="">
                <label for="yes" class="inline-flex items-center justify-center w-full px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 peer-checked:text-green-500 hover:text-gray-600 hover:bg-gray-100">
                  <div class="flex items-center gap-x-1">
                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    <div class="text-sm">پیشنهاد میشود</div>
                  </div>
                </label>
              </li>
              <li>
                <input type="radio" id="no" name="hosting" value="no" class="hidden peer" required="">
                <label for="no" class="inline-flex items-center justify-center w-full px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                  <div class="flex items-center gap-x-1">
                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    <div class="text-sm">پیشنهاد نمیشود</div>
                  </div>
                </label>
              </li>
            </ul>
            <textarea placeholder="متن دیدگاه" name="mailTicket" cols="30" rows="7" class="rounded-2xl rounded-tr-sm text-sm text-zinc-600 w-full bg-white border border-zinc-200 px-5 py-3.5 placeholder:text-zinc-400 placeholder:text-xs focus:outline-1 focus:outline-zinc-300"></textarea>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-primary-400 to-primary-600 hover:opacity-80 transition text-gray-100 rounded-lg">
              ارسال دیدگاه
            </button>
          </div>
          <div class="lg:w-9/12 divide-y-2 divide-zinc-300">
            <div class="px-2 pt-5">
              <div class="text-lg text-zinc-700">
                خوب بود ارزش خرید داره
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-zinc-200 pb-3">
                <div class="text-xs text-zinc-600">
                  11 بهمن 1402
                </div>
                <div class="text-xs text-zinc-600">
                  امیررضا کریمی
                </div>
                <div class="text-xs text-zinc-50 bg-green-400 rounded-full px-2 py-1">
                  خریدار
                </div>
              </div>
              <div class="flex items-center gap-x-1 pt-3">
                <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                <div class="text-sm text-green-500">پیشنهاد میشود</div>
              </div>
              <div class="mt-2 text-zinc-600 text-sm">
                واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-zinc-400">
                  آیا این دیدگاه برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="isgood" name="what" value="isgood" class="hidden peer" required="">
                    <label for="isgood" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">
                      <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad" name="what" value="isbad" class="hidden peer" required="">
                    <label for="isbad" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="px-2 pt-5">
              <div class="text-lg text-zinc-700">
                تاچ پدش خراب بود، اجازه ی مرجوعی هم ندادن
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-zinc-200 pb-3">
                <div class="text-xs text-zinc-600">
                  10 بهمن 1402
                </div>
                <div class="text-xs text-zinc-600">
                  امیررضا کریمی
                </div>
                <div class="text-xs text-zinc-50 bg-green-400 rounded-full px-2 py-1">
                  خریدار
                </div>
              </div>
              <div class="flex items-center gap-x-1 pt-3">
                <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                <div class="text-sm text-red-500">پیشنهاد نمیشود</div>
              </div>
              <div class="mt-2 text-zinc-600 text-sm">
                واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-zinc-400">
                  آیا این دیدگاه برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="isgood2" name="what2" value="isgood2" class="hidden peer" required="">
                    <label for="isgood2" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">
                      <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad2" name="what2" value="isbad2" class="hidden peer" required="">
                    <label for="isbad2" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 scroll-mt-36" id="comments2">
        <p class="text-zinc-800 md:text-lg mb-1 mt-4">
          پرسش و پاسخ
        </p>
        <div class="lg:flex gap-5">
          <div class="lg:w-3/12 py-5">
            <div class="mt-4 mb-2 text-sm text-zinc-700">
              اگر سوالی دارید بپرسید
            </div>
            <textarea placeholder="متن سوال" name="mailTicket" cols="30" rows="7" class="rounded-2xl rounded-tr-sm text-sm text-zinc-600 w-full bg-white border border-zinc-200 px-5 py-3.5 placeholder:text-zinc-400 placeholder:text-xs focus:outline-1 focus:outline-zinc-300"></textarea>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-primary-400 to-primary-600 hover:opacity-80 transition text-gray-100 rounded-lg">
              ارسال پرسش
            </button>
          </div>
          <div class="lg:w-9/12 divide-y-2 divide-zinc-300">
            <div class="px-2 pt-5">
              <div class="text-lg text-zinc-700">
                خوب بود ارزش خرید داره
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-zinc-200 pb-3">
                <div class="text-xs text-zinc-600">
                  11 بهمن 1402
                </div>
                <div class="text-xs text-zinc-600">
                  امیررضا کریمی
                </div>
              </div>
              <div class="mt-4 text-zinc-600 text-sm">
                آیا ویندوز به صورت پیش فرض روش نصبه یا باید خودمون نصب کنیم؟
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-zinc-400">
                  آیا این سوال برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="isgood" name="what" value="isgood" class="hidden peer" required="">
                    <label for="isgood" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">
                      <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad" name="what" value="isbad" class="hidden peer" required="">
                    <label for="isbad" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
{{--      <!-- sldier products -->--}}
          <!-- محصولات مرتبط -->
          <div class="mt-12 md:mt-20">
              <!-- top slider -->
              <div class="flex gap-x-4 justify-between items-center mb-7">
                  <div class="w-48 min-w-fit text-zinc-700 md:font-yekanBakhBold">
                      محصولات مرتبط
                  </div>
                  <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
                  </div>
                  <div class="w-32 min-w-fit text-left">
                      <a href="{{ route('category.show', $product->category->slug ?? '') }}" class="group transition flex items-center justify-center gap-x-1 md:gap-x-2 text-zinc-600 hover:text-primary-500 text-xs md:text-sm text-center">
                          مشاهده همه
                          <svg class="fill-zinc-600 group-hover:-translate-x-1 transition group-hover:fill-primary-500 size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                              <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                          </svg>
                      </a>
                  </div>
              </div>

              <!-- main slider -->
              <div class="containerPSlider swiper">
                  <div class="productSlider1">
                      <div class="card-wrapper swiper-wrapper pb-10">
                          @if($relatedProducts->count() > 0)
                              @foreach($relatedProducts as $relatedProduct)
                                  <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
                                      <a href="{{ route('product.show', $relatedProduct->slug) }}" class="text-zinc-800">
                                          @if($relatedProduct->main_image)
                                              <img class="rounded-xl mb-3 w-full h-40 object-cover" src="{{ asset($relatedProduct->main_image) }}" alt="{{ $relatedProduct->title }}">
                                          @else
                                              <div class="rounded-xl mb-3 w-full h-40 bg-gray-200 flex items-center justify-center">
                                                  <span class="text-gray-500 text-sm">بدون تصویر</span>
                                              </div>
                                          @endif
                                      </a>

                                      <p class="text-zinc-400 text-xs">
                                          {{ $relatedProduct->brand->name ?? 'بدون برند' }}
                                      </p>

                                      <a href="{{ route('product.show', $relatedProduct->slug) }}" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
                                          {{ $relatedProduct->title }}
                                      </a>

                                      <div class="flex items-center justify-between mt-4">
                                          <div class="flex gap-1.5">
                                              @if($relatedProduct->colors->count() > 0)
                                                  @foreach($relatedProduct->colors->take(2) as $color)
                                                      <div class="size-4 rounded-full border border-gray-300"
                                                           style="background-color: {{ $color->code }}"
                                                           title="{{ $color->name }}"></div>
                                                  @endforeach
                                                  @if($relatedProduct->colors->count() > 2)
                                                      <div class="size-4 rounded-full bg-gray-200 border border-gray-300 flex items-center justify-center text-xs text-gray-600">
                                                          +{{ $relatedProduct->colors->count() - 2 }}
                                                      </div>
                                                  @endif
                                              @endif
                                          </div>

                                          <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                                    <span>
                                        <span>({{ $relatedProduct->reviews_count ?? 0 }})</span>
                                        <span>{{ number_format($relatedProduct->rating ?? 0, 1) }}</span>
                                    </span>
                                              <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256">
                                                  <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                              </svg>
                                          </div>
                                      </div>

                                      <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
                                          <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
                                              @if($relatedProduct->discount_price)
                                                  <span class="text-zinc-400 line-through text-sm mr-2">
                                            {{ number_format($relatedProduct->price) }}
                                        </span>
                                                  {{ number_format($relatedProduct->discount_price) }}
                                              @else
                                                  {{ number_format($relatedProduct->price) }}
                                              @endif
                                              <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="تومان">
                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          @else
                              <div class="col-span-4 text-center py-8">
                                  <p class="text-gray-500">محصول مرتبطی یافت نشد</p>
                              </div>
                          @endif
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
   @include('partial/footer')
  </footer>

</body>
<script>
    // مقداردهی اولیه اسلایدر محصولات مرتبط
    document.addEventListener('DOMContentLoaded', function() {
        const productSlider = new Swiper('.productSlider1', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 25,
                },
            },
        });
    });
</script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{--@include('script/scripts')--}}>


<!-- Mirrored from amirtttk.ir/digiStar/singleProduct.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:04 GMT -->
</html>
