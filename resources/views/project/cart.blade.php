<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
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
      <div class="px-2 md:px-12">
          <nav class="flex items-center gap-1 md:gap-5 w-full md:w-10/12 md:mx-auto mt-2 md:mt-0">
              <a class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-primary-500 text-sm" href="{{ route('cart.show') }}">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <!-- (همان SVG قبلی بدون تغییر) -->
                  </svg>
                  سبدخرید
              </a>
              <div class="h-0.5 w-full bg-gradient-to-r from-white via-zinc-300 to-white"></div>
              <a class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-zinc-700 text-sm" href="#">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <!-- (همان SVG قبلی) -->
                  </svg>
                  اطلاعات پرداخت
              </a>
              <div class="h-0.5 w-full bg-gradient-to-r from-white via-zinc-300 to-white"></div>
              <a class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-zinc-700 text-sm" href="#">
                  <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <!-- (همان SVG قبلی) -->
                  </svg>
                  اتمام خرید
              </a>
          </nav>

          <div class="flex flex-col lg:flex-row px-4 md:px-10 mt-10 gap-5 pb-20">
              <div class="lg:w-9/12 border border-zinc-200 rounded-xl divide-y divide-zinc-200">
                  @forelse($cartItems as $item)
                      <div class="mt-7 flex flex-col md:flex-row gap-y-5 p-4" data-cart-item="{{ $item['id'] }}">
                          <div class="w-10/12 mx-auto max-w-52 md:max-w-36">
                              <img class="rounded-lg" src="{{ $item['product_image'] }}" alt="{{ $item['product_name'] }}">
                          </div>
                          <div class="mr-2 md:mr-5 w-full flex flex-wrap gap-y-3">
                              <div class="md:w-9/12 h-fit">
                                  <a href="{{ route('product.show', $item['product_slug']) }}" class="w-full text-sm sm:text-base text-zinc-700 mb-5">
                                      {{ $item['product_name'] }}
                                  </a>
                                  <div class="flex gap-1.5 mt-7">
                                      <div class="size-4 bg-zinc-800 rounded-full"></div>
                                      <div class="size-4 bg-zinc-500 rounded-full"></div>
                                      <div class="size-4 bg-zinc-300 rounded-full"></div>
                                  </div>
                              </div>
                              <div class="w-full md:w-3/12 flex justify-end">
                                  <div class="text-gray-700">
                                      <div class="quantity-container flex mr-auto h-10 w-24 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                                          <button class="cursor-pointer update-qty" data-cart-id="{{ $item['id'] }}" data-action="decrement">
                                              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                                  <path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path>
                                              </svg>
                                          </button>
                                          <input value="{{ $item['quantity'] }}" type="number" min="1"
                                                 class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none"
                                                 readonly>
                                          <button class="cursor-pointer update-qty" data-cart-id="{{ $item['id'] }}" data-action="increment">
                                              <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                                  <path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path>
                                              </svg>
                                          </button>
                                      </div>
                                      <div class="flex mt-5 price-display" data-unit-price="{{ $item['product_price'] }}">
                                          <div class="text-2xl md:text-3xl text-zinc-700">
                                              {{ number_format($item['product_price'] * $item['quantity']) }}
                                          </div>
                                          <div class="-rotate-90 text-zinc-400 text-xs">تومان</div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- Delete Button -->
                          <button type="button" class="mt-3 px-4 text-red-500 text-sm hover:underline delete-item" data-cart-id="{{ $item['id'] }}">
                              حذف
                          </button>
                      </div>
                  @empty
                      <div class="p-8 text-center text-zinc-500">سبد خرید شما خالی است.</div>
                  @endforelse
              </div>

              <!-- Total Section -->
              <div class="lg:w-3/12 lg:pt-5 my-10 lg:my-0">
                  <div class="flex justify-between items-center text-primary-500">
                      <div>جمع مبلغ نهایی</div>
                      <div class="flex">
                          <div class="text-2xl md:text-4xl font-yekanBakhBold total-price">{{ number_format($totalPrice) }}</div>
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
                  <a href="{{ route('checkout.index') }}" class="block bg-gradient-to-bl from-primary-400 to-primary-600 hover:opacity-80 text-white text-center mt-10 px-5 md:px-2.5 py-3 md:py-4 rounded-xl shadow-lg transition-all font-yekanBakhBold md:text-lg">
                      ثبت و ادامه
                  </a>
              </div>
          </div>
      </div>
  </main>

  <footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
@include('partial.footer')
  </footer>
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

          // Update quantity
          document.querySelectorAll('.update-qty').forEach(button => {
              button.addEventListener('click', function () {
                  const cartId = this.dataset.cartId;
                  const action = this.dataset.action;
                  const itemRow = this.closest('[data-cart-item]');
                  const input = itemRow.querySelector('input[type="number"]');
                  const currentQty = parseInt(input.value);
                  const newQty = action === 'increment' ? currentQty + 1 : Math.max(1, currentQty - 1);

                  if (newQty === currentQty) return;

                  fetch("{{ route('cart.update') }}", {
                      method: "POST",
                      headers: {
                          "Content-Type": "application/json",
                          "X-CSRF-TOKEN": csrfToken
                      },
                      body: JSON.stringify({ cart_id: cartId, quantity: newQty })
                  })
                      .then(response => response.json())
                      .then(data => {
                          if (data.success) {
                              input.value = newQty;
                              // Update item price
                              const priceDisplay = itemRow.querySelector('.price-display');
                              const unitPrice = parseInt(priceDisplay.dataset.unitPrice);
                              priceDisplay.querySelector('.text-zinc-700').textContent =
                                  (unitPrice * newQty).toLocaleString('fa-IR');
                              // Update total
                              document.querySelector('.total-price').textContent =
                                  data.total_price.toLocaleString('fa-IR');
                          } else {
                              alert(data.message || 'خطا در بروزرسانی');
                          }
                      })
                      .catch(err => {
                          console.error(err);
                          alert('خطایی رخ داد.');
                      });
              });
          });

          // Delete item
          document.querySelectorAll('.delete-item').forEach(button => {
              button.addEventListener('click', function () {
                  if (!confirm('آیا مطمئنید؟')) return;

                  const cartId = this.dataset.cartId;
                  const itemRow = this.closest('[data-cart-item]');

                  fetch("{{ route('cart.remove') }}", {
                      method: "POST",
                      headers: {
                          "Content-Type": "application/json",
                          "X-CSRF-TOKEN": csrfToken
                      },
                      body: JSON.stringify({ cart_id: cartId })
                  })
                      .then(response => response.json())
                      .then(data => {
                          if (data.success) {
                              itemRow.remove();
                              document.querySelector('.total-price').textContent =
                                  data.total_price.toLocaleString('fa-IR');
                              // If cart is empty
                              if (data.total_items === 0) {
                                  document.querySelector('.lg\\:w-9\\/12').innerHTML =
                                      '<div class="p-8 text-center text-zinc-500">سبد خرید شما خالی است.</div>';
                              }
                          }
                      })
                      .catch(err => {
                          console.error(err);
                          alert('خطا در حذف محصول.');
                      });
              });
          });
      });
  </script>
</body>

<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@include('script/scripts')>

</html>
