<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/digiStar/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:53:47 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="handheldfriendly" content="true">
    <meta name="mobileoptimized" content="width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <!-- hero slider -->
    <div class="w-full">
        <div class="swiper heroSlider rounded-2xl md:rounded-4xl relative">
            @if($banners->count() > 0)
                <div class="swiper-wrapper">
                    @foreach($banners as $banner)
                        <a href="{{ $banner->url ?? '#' }}" class="swiper-slide">
                            <img class="w-full h-44 md:h-80 object-cover object-bottom"
                                 src="{{ asset($banner->image_path) }}"
                                 alt="{{ $banner->title }}">
                        </a>
                    @endforeach
                </div>
            @else
                <!-- Fallback اگر بنری وجود نداشت -->
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide">
                        <img class="w-full h-44 md:h-80 object-cover object-bottom"
                             src="{{ asset('assets/image/heroSlider/1.webp') }}" alt="">
                    </a>
                </div>
            @endif
            <svg class="absolute -left-2 rotate-180 top-10 z-10 w-auto hidden md:block" width="70" height="255" viewBox="0 0 76 285" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_6_41)">
                    <path d="M70 275V10C70 86 14 91.0878 14 142.752C14 194.416 70 201 70 275Z" fill="white"></path>
                </g>
                <defs>
                    <filter id="filter0_d_6_41" x="0" y="0" width="76" height="285" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                        <feOffset dx="-4"></feOffset>
                        <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_41"></feBlend>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_41" result="shape"></feBlend>
                    </filter>
                </defs>
            </svg>
            <svg class="absolute -right-2 top-10 z-10 w-auto hidden md:block" width="70" height="255" viewBox="0 0 76 285" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_6_41)">
                    <path d="M70 275V10C70 86 14 91.0878 14 142.752C14 194.416 70 201 70 275Z" fill="white"></path>
                </g>
                <defs>
                    <filter id="filter0_d_6_41" x="0" y="0" width="76" height="285" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                        <feOffset dx="-4"></feOffset>
                        <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_41"></feBlend>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_41" result="shape"></feBlend>
                    </filter>
                </defs>
            </svg>
            <svg  class="absolute left-1/2 -translate-x-1/2 w-96 -bottom-3 z-10 rotate-180 hidden md:block" style="filter: drop-shadow( 0 -7px 25px rgba(0, 0, 0, .3) );" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 480 110" width="480" height="110">
                <defs>
                    <path d="M-607 -202L1073 -202L1073 0C679.8 0 461.36 0 417.67 0C368 0 358 50 327.34 50C310.37 50 174.64 50 157.67 50C128 50 118 0 67 0C22.07 0 -202.6 0 -607 0L-607 -202Z" id="dixoAXFOW"></path>
                </defs>
                <use xlink:href="#dixoAXFOW" opacity="1" fill="#ffffff" fill-opacity="1"></use>
            </svg>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- category -->
    <div class="grid grid-cols-3 md:flex flex-wrap justify-center gap-4 md:gap-8 mt-20">
        @foreach($categories as $category)
            <a href="{{ route('category.show', $category->slug) ?? '#' }}" class="flex flex-col justify-center items-center">
                <div class="size-28 md:size-32 p-3 flex justify-center bg-white shadow-none md:shadow-none hover:shadow-custom-sm border-2 border-zinc-200 transition-all hover:border-primary-500 hover:shadow-primary-500 rounded-2xl">
                    <img class="w-16 md:w-20 h-fit" src="{{ asset($category->image) }}" alt="{{ $category->name }}">
                </div>
                <p class="text-center text-zinc-700 pt-2 text-sm">
                    {{ $category->name }}
                </p>
            </a>
        @endforeach
    </div>
    <!-- filter products -->
    <div class="mt-12 md:mt-20">
        <div class="flex flex-col gap-4">
            <div class="bg-white px-4 pt-4 w-fit md:w-full">
                <!-- filter btn -->
                <a href="#selectCategory" class="filter-mobile md:hidden border border-zinc-200 bg-primary-500 p-4 block z-10 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M230.6,49.53A15.81,15.81,0,0,0,216,40H40A16,16,0,0,0,28.19,66.76l.08.09L96,139.17V216a16,16,0,0,0,24.87,13.32l32-21.34A16,16,0,0,0,160,194.66V139.17l67.74-72.32.08-.09A15.8,15.8,0,0,0,230.6,49.53ZM40,56h0Zm106.18,74.58A8,8,0,0,0,144,136v58.66L112,216V136a8,8,0,0,0-2.16-5.47L40,56H216Z"></path></svg>
                </a>
                <!-- product slider 1 -->
                <div class="mt-12 md:mt-20">
                    <!-- top slider -->
                    <div class="flex gap-x-4 justify-between items-center mb-7">
                        <div class="w-48 min-w-fit text-zinc-700 text-sm md:text-base md:font-yekanBakhBold">
                            محصولات پرفروش
                        </div>
                        <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
                        </div>
                        <div class="w-32 min-w-fit text-left">
                            <a href="{{ route('products.best-selling') }}" class="text-blue-500 hover:text-blue-600 transition">
                                مشاهده همه
                            </a>
                        </div>
                    </div>
                    <!-- main slider -->
                    <div class="containerPSlider swiper">
                        <div class="productSlider1">
                            <div class="card-wrapper swiper-wrapper pb-10">
                                @if($bestSellingProducts->count() > 0)
                                    @foreach($bestSellingProducts as $product)
                                        <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
                                            <a href="{{ route('product.show', $product->slug) }}" class="text-zinc-800">
                                                @if($product->main_image)
                                                    <img class="rounded-xl mb-3 w-full h-40 object-cover" src="{{ asset($product->main_image) }}" alt="{{ $product->title }}">
                                                @else
                                                    <div class="rounded-xl mb-3 w-full h-40 bg-gray-200 flex items-center justify-center">
                                                        بدون تصویر
                                                    </div>
                                                @endif
                                            </a>
                                            <p class="text-zinc-400 text-xs">
                                                {{ $product->brand->name ?? 'بدون برند' }}
                                            </p>
                                            <a href="#" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
                                                {{ $product->title }}
                                            </a>
                                            <div class="flex items-center justify-between mt-4">
                                                <div class="flex gap-1.5">
                                                    @if($product->color)
                                                        <div class="size-4 rounded-full" style="background-color: {{ $product->color }}"></div>
                                                    @endif
                                                </div>
                                                <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                                <span>
                                    <span>({{ $product->reviews_count ?? 0 }})</span>
                                    <span>{{ number_format($product->rating ?? 0, 1) }}</span>
                                </span>
                                                    <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256">
                                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
                                                <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
                                                    @if($product->discount_price)
                                                        <span class="text-zinc-400 line-through text-sm mr-2">
                                        {{ number_format($product->price) }}
                                    </span>
                                                        {{ number_format($product->discount_price) }}
                                                    @else
                                                        {{ number_format($product->price) }}
                                                    @endif
                                                    <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="تومان">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-span-6 text-center py-8">
                                        <p class="text-gray-500">هیچ محصولی یافت نشد</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 banner -->
                @if($banners->count() > 0)
                    <div class="flex flex-col md:flex-row gap-5 mt-12 md:mt-20">
                        @foreach($banners_middle as $banners_middles)
                            <a href="{{ $banners_middles->link ?? '#' }}">
                                <img class="rounded-xl md:rounded-3xl h-fit w-full"
                                     src="{{ asset('storage/' . $banners_middles->image) }}"
                                     alt="{{ $banners_middles->title }}">
                            </a>
                        @endforeach
                    </div>
                @endif
                <!-- product slider 2 -->
                <div class="mt-12 md:mt-20">
                    <!-- top slider -->
                    <div class="flex gap-x-4 justify-between items-center mb-7">
                        <div class="w-48 min-w-fit text-zinc-700 text-sm md:text-base md:font-yekanBakhBold">
                            جدیدترین محصولات
                        </div>
                        <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
                        </div>
                        <div class="w-32 min-w-fit text-left">
                            <a href="{{ route('products.newest') }}" class="text-blue-500 hover:text-blue-600 transition">
                                مشاهده همه
                            </a>
                        </div>
                    </div>
                    <!-- main slider -->
                    <div class="containerPSlider swiper">
                        <div class="productSlider2">
                            <div class="card-wrapper swiper-wrapper pb-10">
                                @if($newestProducts->count() > 0)
                                    @foreach($newestProducts as $product)
                                        <div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
                                            <a href="{{ route('product.show', $product->slug) }}" class="text-zinc-800">
                                                @if($product->main_image)
                                                    <img class="rounded-xl mb-3 w-full h-40 object-cover" src="{{ asset($product->main_image) }}" alt="{{ $product->title }}">
                                                @else
                                                    <div class="rounded-xl mb-3 w-full h-40 bg-gray-200 flex items-center justify-center">
                                                        بدون تصویر
                                                    </div>
                                                @endif
                                            </a>
                                            <p class="text-zinc-400 text-xs">
                                                {{ $product->brand->name ?? 'بدون برند' }}
                                            </p>
                                            {{--                                  <p class="text-zinc-400 text-xs">--}}
                                            {{--                                      {{ $product->brand->name ?? 'بدون برند' }} {{ $product->cpu ?? '' }}--}}
                                            {{--                                  </p>--}}
                                            <a href="#" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
                                                {{ $product->title }}
                                            </a>
                                            <div class="flex items-center justify-between mt-4">
                                                <div class="flex gap-1.5">
                                                    @if($product->color)
                                                        @php
                                                            $colors = is_array($product->color) ? $product->color : explode(',', $product->color);
                                                        @endphp
                                                        @foreach($colors as $colorItem)
                                                            <div class="size-4 rounded-full" style="background-color: {{ trim($colorItem) }}"></div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                                    <span>
                                        <span>({{ $product->reviews_count ?? 0 }})</span>
                                        <span>{{ number_format($product->rating ?? 0, 1) }}</span>
                                    </span>
                                                    <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256">
                                                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
                                                <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
                                                    @if($product->discount_price)
                                                        <span class="text-zinc-400 line-through text-sm mr-2">
                                            {{ number_format($product->price) }}
                                        </span>
                                                        {{ number_format($product->discount_price) }}
                                                    @else
                                                        {{ number_format($product->price) }}
                                                    @endif
                                                    <img class="size-4" src="{{ asset('assets/image/icons/toman.png') }}" alt="تومان">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-span-6 text-center py-8">
                                        <p class="text-gray-500">هیچ محصول جدیدی یافت نشد</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- brands -->
                <div class="mt-12 md:mt-20">
                    <!-- top slider -->
                    <div class="flex gap-x-4 justify-between items-center mb-7">
                        <div class="w-48 min-w-fit text-zinc-700 text-sm md:text-base md:font-yekanBakhBold">
                            برترین برند ها
                        </div>
                        <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
                        </div>
                        <div class="w-32 min-w-fit text-left">
                            <a  class="group transition flex items-center justify-center gap-x-1 md:gap-x-2 text-zinc-600 hover:text-primary-500 text-xs md:text-sm text-center">
                                مشاهده همه
                                <svg class="fill-zinc-600 group-hover:-translate-x-1 transition group-hover:fill-primary-500 size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <!-- main slider -->
                    <div class="containerPSlider swiper">
                        <div class="brands">
                            <div class="card-wrapper swiper-wrapper pb-10">
                                @if($brands->count() > 0)
                                    @foreach($brands as $brand)
                                        <div class="card swiper-slide shiny">
                                            {{--                                  href="{{ url('/products?brand=' . $brand->slug) }}"--}}
                                            <a  class="flex flex-col justify-between items-center gap-3 w-full h-36 md:h-48 md:px-4 border border-zinc-100 rounded-2xl hover:shadow-lg transition">
                                                <div class="w-full h-44 flex justify-center items-center">
                                                    <img class="max-w-24 md:max-w-32 w-full mx-auto" src="{{ asset('assets/image/' . $brand->logo) }}" alt="{{ $brand->name }}" onerror="this.src='{{ asset('assets/image/placeholder.jpg') }}'">
                                                </div>
                                                <p class="text-xs md:text-sm text-zinc-700 h-16">
                                                    {{ $brand->name }}
                                                </p>
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-span-12 text-center py-8">
                                        <p class="text-gray-500">هیچ برندی یافت نشد</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 md:mt-20">
                    <!-- top slider -->
                    <div class="flex gap-x-4 justify-between items-center mb-7">
                        <div class="w-48 min-w-fit text-zinc-700 text-sm md:text-base md:font-yekanBakhBold">
                            مقالات و اخبار
                        </div>
                        <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
                        </div>
                        <div class="w-32 min-w-fit text-left">
                            <a href="{{ route('blog.index') ?? '#' }}" class="group transition flex items-center justify-center gap-x-1 md:gap-x-2 text-zinc-600 hover:text-primary-500 text-xs md:text-sm text-center">
                                مشاهده همه
                                <svg class="fill-zinc-600 group-hover:-translate-x-1 transition group-hover:fill-primary-500 size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                            </a>
                        </div>
                    </div>

                    <div class="blog1 pb-16 px-4">
                        <div class="card-wrapper swiper-wrapper">
                            @if($blogPosts->count() > 0)
                                @foreach($blogPosts as $post)
                                    <div class="card swiper-slide bg-white min-h-60 rounded-2xl border hover:border-primary-500 transition border-zinc-300 group p-2 md:p-3 hover:drop-shadow-lg">
                                        <a href="{{ route('blog.show', $post->slug) ?? '#' }}" class="image-box block overflow-hidden rounded-lg md:rounded-2xl">
                                            <img class="rounded-lg md:rounded-2xl max-h-56 w-full transition-transform duration-300 ease-in-out group-hover:rotate-3 group-hover:scale-110"
                                                 src="{{ asset('assets/image/' . $post->image) }}"
                                                 alt="{{ $post->title }}"
                                                 onerror="this.src='{{ asset('assets/image/placeholder.jpg') }}'">
                                        </a>
                                        <div class="p-2 mt-2">
                                            <a href="{{ route('blog.show', $post->slug) ?? '#' }}" class="text-xs md:text-sm font-normal md:font-semibold text-zinc-700 group-hover:text-primary-500 h-12 line-clamp-2 leading-6">
                                                {{ $post->title }}
                                            </a>
                                            <div class="flex justify-between mt-8">
                                                <div class="text-xs flex gap-x-1 items-center text-zinc-400">
                                                    <svg class="fill-zinc-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256">
                                                        <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                                                    </svg>
                                                    {{--                                          {{ $post->publish_date->format('Y/m/d') }}--}}
                                                    {{ jdate($post->publish_date)->format('Y/m/d') }}
                                                    {{--                                          {{ jdate($post->publish_date)->format('Y/m/d') }}--}}
                                                </div>
                                                <a href="{{ route('blog.show', $post->slug) ?? '#' }}" class="flex justify-center items-center gap-x-1 group w-fit text-xs md:text-sm transition text-zinc-600 group-hover:text-primary-500">
                                                    ادامه مطلب
                                                    <svg class="fill-zinc-600 transition group-hover:fill-primary-500 size-2 md:size-4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256">
                                                        <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-span-5 text-center py-8">
                                    <p class="text-gray-500">هیچ مقاله ای یافت نشد</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
    @include('partial/footer')
</footer>
</body>
</html>
