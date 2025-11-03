<!DOCTYPE html>
<html lang="fa" dir="rtl">
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
  <main class="pt-24 md:pt-32 px-4 md:px-6 min-h-screen bg-gradient-to-b from-orange-50 via-white to-orange-50">
      <div class="container mx-auto">
          <h1 class="text-xl font-bold mb-8 text-zinc-800">
              نتایج جستجو برای: <span class="text-primary-500">{{ $query }}</span>
          </h1>

          <div class="card-wrapper grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 pb-10">
              @if($products->count() > 0)
                  @foreach($products as $product)
                      <div class="card bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
                          <a href="{{ route('product.show', $product->slug) }}" class="text-zinc-800">
                              @if($product->main_image)
                                  <img class="rounded-xl mb-3 w-full h-40 object-cover" src="{{ asset($product->main_image) }}" alt="{{ $product->title }}">
                              @else
                                  <div class="rounded-xl mb-3 w-full h-40 bg-gray-200 flex items-center justify-center">
                                      بدون تصویر
                                  </div>
                              @endif
                          </a>

                          <p class="text-zinc-400 text-xs">{{ $product->brand->name ?? 'بدون برند' }}</p>

                          <a href="{{ route('product.show', $product->slug) }}" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
                              {{ $product->title }}
                          </a>

                          <div class="flex items-center justify-between mt-4">
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
                                      <span class="text-zinc-400 line-through text-sm mr-2">{{ number_format($product->price) }}</span>
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
                  <div class="col-span-full text-center py-8">
                      <p class="text-gray-500">هیچ محصولی مطابق با جستجوی شما یافت نشد.</p>
                  </div>
              @endif
          </div>

          <div class="mt-8">
              {{ $products->links() }}
          </div>
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
</html>
