<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>پروفایل کاربر - فروشگاه دیجی استار</title>
</head>
<body class="max-w-[1700px] mx-auto">
<header class="max-w-[1700px] fixed w-full z-50 flex md:block bg-white md:bg-transparent">
    @include('partial.header')
    @include('partial.nav')
</header>
<main class="pt-24 md:pt-32 px-4 md:px-6 min-h-screen bg-orange-50">
    <h1 class="text-2xl font-bold mb-5">محصولات مورد علاقه شما</h1>

    @if($favorites->isEmpty())
        <p>شما هنوز محصولی را لایک نکرده‌اید.</p>
    @else
        <div class="max-w-[1700px] mx-auto pt-24 md:pt-32 px-4 md:px-6 min-h-screen bg-orange-50">

            <h1 class="text-2xl font-bold mb-6">محصولات لایک شده شما</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-5 gap-6 mb-8">
                @forelse($favorites as $favorite)
                    @php $product = $favorite->product; @endphp
                    @if($product)
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
                    @endif
                @empty
                    <div class="col-span-full text-center py-12">
                        <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m8-8V4a1 1 0 00-1-1h-2a1 1 0 00-1 1v1m4 0h-4"></path>
                        </svg>
                        <p class="text-gray-500 text-lg">شما هنوز هیچ محصولی را لایک نکرده‌اید</p>
                    </div>
                @endforelse
            </div>
        </div>
    @endif
</main>

<script>
    function toggleFavorite(event, productId) {
        const button = event.currentTarget;
        const svg = button.querySelector('svg');

        fetch(`/favorites/toggle/${productId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            }
        })
            .then(res => {
                if (!res.ok) throw new Error('Network response was not ok');
                return res.json();
            })
            .then(data => {
                if (data.status === 'removed') {
                    button.closest('div').remove(); // حذف محصول از صفحه اگر از علاقه‌مندی‌ها برداشته شد
                }
            })
            .catch(err => {
                console.error('خطا در تغییر وضعیت علاقه‌مندی:', err);
                alert('خطا در انجام عملیات. لطفاً دوباره تلاش کنید.');
            });
    }
</script>
<footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
    @include('partial.footer')
</footer>

<script>
    function logout() {
        if (confirm('آیا مطمئن هستید که می‌خواهید از حساب خود خارج شوید؟')) {
            alert('خروج انجام شد.');
        }
    }
</script>

</body>
</html>
