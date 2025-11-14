@php
    $cartItems = Auth::check()
        ? \App\Models\CartItem::with('product')
            ->where('user_id', Auth::id())
            ->get()
        : collect();
    $totalItems = $cartItems->sum('quantity');
    $totalPrice = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
@endphp
<div class="z-50 group-hover:block -left-4 md:left-0 top-[39px] w-96 md:w-[400px] rounded-lg bg-white shadow-lg hidden absolute" id="cart-dropdown">
{{--<div class="z-50 group-hover:block -left-4 md:left-0 top-[39px] w-96 md:w-[400px] rounded-lg bg-white shadow-lg hidden absolute">--}}
    <!-- Head -->
    <div class="flex items-center justify-between p-4 pb-2 border-b border-zinc-200 mx-5">
        <div class="text-sm text-zinc-500">
            {{ $totalItems }} کالا
        </div>
        @if($totalItems > 0)
            <a href="/cart" class="text-primary-600 text-sm hover:underline">مشاهده سبد خرید</a>
        @endif
    </div>

    <!-- Items -->
    <div class="h-60">
        @if($cartItems->isNotEmpty())
            <ul class="main-scroll h-full space-y-2 divide-y divide-gray-100 overflow-y-auto p-5 pl-2">
                @foreach($cartItems as $item)
                    <li>
                        <div class="flex gap-x-2 py-5">
                            <!-- Product Image -->
                            <div class="relative min-w-fit">
                                <a href="{{ route('product.show', $item->product->slug) }}">
                                    <img alt="{{ $item->product->title }}"
                                         class="h-[120px] w-[120px] rounded-xl object-cover"
                                         src="{{ asset($item->product->main_image ?? 'assets/image/placeholder.webp') }}">
                                </a>
                            </div>
                            <div class="w-full space-y-1.5">
                                <!-- Title -->
                                <a class="line-clamp-2 h-12 text-zinc-700 font-yekanBakhRegular"
                                   href="{{ route('product.show', $item->product->slug) }}">
                                    {{ $item->product->title }} <!-- تغییر از name به title -->
                                </a>
                                <!-- Attribute -->
                                <div class="flex items-center justify-between gap-x-2">
                                    <!-- Price -->
                                    <div class="text-gray-700">
                                        <span class="text-sm">{{ number_format($item->product->price) }}</span>
                                        <span class="text-sm">تومان</span>
                                    </div>
                                    <!-- Quantity -->
                                    <div class="quantity-container flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                                        <button class="cursor-pointer update-cart" type="button"
                                                data-action="increment"
                                                data-cart-id="{{ $item->id }}">
                                            <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                                <path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path>
                                            </svg>
                                        </button>
                                        <input value="{{ $item->quantity }}" disabled type="number"
                                               class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
                                        <button class="cursor-pointer update-cart" type="button"
                                                data-action="decrement"
                                                data-cart-id="{{ $item->id }}">
                                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                                <path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="h-full flex items-center justify-center text-zinc-500 text-sm p-5">
                سبد خرید شما خالی است.
            </div>
        @endif
    </div>

    <!-- Down Price -->
    @if($totalItems > 0)
        <div class="flex items-center justify-between border-t border-gray-100 p-5">
            <div class="flex flex-col items-center gap-y-1">
                <div class="text-sm text-zinc-600">مبلغ قابل پرداخت</div>
                <div class="text-zinc-600">
                    <span class="font-bold">{{ number_format($totalPrice) }}</span>
                    <span class="text-xs">تومان</span>
                </div>
            </div>
            <a href="{{ route('checkout.index') }}"
               class="w-28 py-3 text-sm bg-primary-600 hover:bg-primary-500 transition text-gray-100 rounded-xl text-center">
                ثبت سفارش
            </a>

        </div>
    @endif
</div>
