<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <title>جدیدترین محصولات - دیجی استار</title>
    <style>
        .desktop-sidebar {
            width: 300px;
            min-width: 300px;
        }
        .desktop-content {
            width: calc(100% - 300px);
        }
        .product-card {
            transition: all 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50">

<header>
    @include('partial.header')
    @include('partial.nav')
</header>

<main class="pt-32 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="bg-gradient-to-r from-white to-blue-50 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 p-6 mb-10 border border-zinc-100">
            <div class="flex justify-between items-center">
                <!-- عنوان و توضیح -->
                <div>
                    <h1 class="text-3xl font-extrabold text-gray-800 mb-1 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        پرفروش‌ترین محصولات
                    </h1>
                    <p class="text-gray-500 text-sm md:text-base">
                        محصولات پرفروش و محبوب در فروشگاه
                    </p>
                </div>

                <!-- شمارنده محصولات -->
                <div class="bg-blue-100 text-blue-700 px-6 py-3 rounded-xl flex items-center gap-2 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                    <span class="text-lg">{{ $products->total() }}</span>
                    <span class="text-sm">محصول</span>
                </div>
            </div>
        </div>

        <div class="flex gap-8">
@include('helper/filter-products')
            <!-- محتوای اصلی -->
            <div class="desktop-content">

                <!-- هدر محصولات -->
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
                <!-- گرید محصولات -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-5 gap-6 mb-8">
                    @forelse($products as $product)
                        <div class="product-card bg-white rounded-xl border border-gray-200 p-4 hover:border-blue-200">
                            <a href="{{ route('product.show', $product->slug) }}" class="block mb-3">
                                @if($product->main_image)
                                    <img class="w-full h-40 object-cover rounded-lg mb-3"
                                         src="{{ asset($product->main_image) }}"
                                         alt="{{ $product->title }}">
                                @else
                                    <div class="w-full h-40 bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg flex items-center justify-center mb-3">
                                        <span class="text-gray-400 text-sm">بدون تصویر</span>
                                    </div>
                                @endif
                            </a>

                            <div class="mb-3">
                                <p class="text-gray-500 text-xs mb-1">
                                    {{ $product->brand->name ?? 'بدون برند' }}
                                </p>

                                <a href="{{ route('product.show', $product->slug) }}"
                                   class="block text-gray-900 font-medium text-sm mb-2 leading-6 line-clamp-2 hover:text-blue-600 transition min-h-[3rem]">
                                    {{ $product->title }}
                                </a>
                            </div>

                            <div class="flex items-center justify-between mb-3">
                                <div class="flex gap-1">
                                    @if($product->colors && $product->colors->count() > 0)
                                        @foreach($product->colors->take(2) as $color)
                                            <div class="w-4 h-4 rounded-full border border-white shadow-sm"
                                                 style="background-color: {{ $color->code }}"
                                                 title="{{ $color->name }}"></div>
                                        @endforeach
                                    @endif
                                </div>

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
                    @empty
                        <div class="col-span-full text-center py-12">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m8-8V4a1 1 0 00-1-1h-2a1 1 0 00-1 1v1m4 0h-4"></path>
                            </svg>
                            <p class="text-gray-500 text-lg">هیچ محصول جدیدی یافت نشد</p>
                        </div>
                    @endforelse
                </div>

                <!-- صفحه‌بندی -->
                @if($products->hasPages())
                    <div class="bg-white rounded-xl shadow-sm p-4">
                        {{ $products->links('vendor.pagination.tailwind') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // مدیریت باز و بسته شدن منو
        const menuToggles = document.querySelectorAll('.menu-toggle');

        menuToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const submenu = this.parentElement.querySelector('.submenu');
                const arrow = this.querySelector('img');

                submenu.classList.toggle('hidden');
                arrow.style.transform = submenu.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
            });
        });

        // مدیریت فیلتر برندها
        const brandCheckboxes = document.querySelectorAll('input[type="checkbox"][value]');
        let selectedBrands = [];

        brandCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    selectedBrands.push(this.value);
                } else {
                    selectedBrands = selectedBrands.filter(brand => brand !== this.value);
                }

                // فیلتر کردن محصولات بر اساس برند
                filterProductsByBrand(selectedBrands);
            });
        });

        function filterProductsByBrand(brands) {
            if (brands.length === 0) {
                // اگر هیچ برندی انتخاب نشده، همه محصولات را نشان بده
                console.log('نمایش همه محصولات');
                // اینجا می‌توانید محصولات را ریست کنید
                return;
            }

            console.log('فیلتر بر اساس برندها:', brands);

            // برای صفحه جدیدترین محصولات
            fetch(`/api/products/newest/filter?brands=${brands.join(',')}`)
                .then(response => response.json())
                .then(data => {
                    // آپدیت لیست محصولات
                    updateProductsList(data.products);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function updateProductsList(productsHtml) {
            const productsGrid = document.querySelector('.grid');
            if (productsGrid && productsHtml) {
                productsGrid.innerHTML = productsHtml;
            }
        }
    });
</script>
<script>
    function applyPriceFilter() {
        const minPrice = document.getElementById('minPrice').value;
        const maxPrice = document.getElementById('maxPrice').value;

        // اعتبارسنجی
        if (minPrice && maxPrice && parseInt(minPrice) > parseInt(maxPrice)) {
            alert('حداقل قیمت نمی‌تواند از حداکثر قیمت بیشتر باشد');
            return;
        }

        if (minPrice && parseInt(minPrice) < 0) {
            alert('قیمت نمی‌تواند منفی باشد');
            return;
        }

        if (maxPrice && parseInt(maxPrice) < 0) {
            alert('قیمت نمی‌تواند منفی باشد');
            return;
        }

        let queryParams = new URLSearchParams(window.location.search);

        if (minPrice) {
            queryParams.set('min_price', minPrice);
        } else {
            queryParams.delete('min_price');
        }

        if (maxPrice) {
            queryParams.set('max_price', maxPrice);
        } else {
            queryParams.delete('max_price');
        }

        // حفظ فیلتر برند اگر وجود دارد
        const currentBrand = queryParams.get('brand');
        if (currentBrand) {
            queryParams.set('brand', currentBrand);
        }

        window.location.href = '{{ request()->url() }}?' + queryParams.toString();
    }
</script>
<footer class="mt-12">
    @include('partial.footer')
</footer>

</body>
</html>
