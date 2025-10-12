
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/digiStar/aboutUs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:03 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

  <title>فروشگاه دیجی استار</title>
</head>
<body class="max-w-[1700px] mx-auto">

  <header class="max-w-[1700px] fixed w-full z-50 flex md:block bg-white md:bg-transparent">
   @include('partial.header')
{{--      nav--}}
      @include('partial.nav')
  </header>
  <main class="pt-24 md:pt-48 px-2 md:px-10">
      <article class="mb-8 border border-zinc-200 rounded-2xl p-4 md:p-6">
          @if($blog->image)
              <img class="rounded-lg mb-6 w-full h-64 md:h-96 object-cover"
                   src="{{ asset('assets/image/' . $blog->image) }}"

                   alt="{{ $blog->title }}">
          @endif

          <!-- هدر مقاله -->
          <header class="mb-6">
              <h1 class="text-xl md:text-3xl font-yekanBakhBold text-zinc-800 mb-4">
                  {{ $blog->title }}
              </h1>

              <!-- متا اطلاعات مقاله -->
              <div class="flex flex-wrap items-center gap-4 md:gap-6 text-zinc-500 text-xs md:text-sm">
                  @if($blog->author)
                      <div class="flex items-center gap-2">
                          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                          </svg>
                          <span>نویسنده: {{ $blog->author }}</span>
                      </div>
                  @endif

                  @if($blog->publish_date)
                      <div class="flex items-center gap-2">
                          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                          </svg>
                          <span>{{ jdate($blog->publish_date)->format('Y/m/d') }}</span>
                      </div>
                  @endif

                  @if($blog->reading_time)
                      <div class="flex items-center gap-2">
                          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                          </svg>
                          <span>زمان مطالعه: {{ $blog->reading_time }} دقیقه</span>
                      </div>
                  @endif

                  <div class="flex items-center gap-2">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                          <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                      </svg>
                      <span>بازدید: {{ number_format($blog->views) }}</span>
                  </div>

                  @if($blog->category)
                      <div class="flex items-center gap-2">
                          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                          </svg>
                          <span>{{ $blog->category->name }}</span>
                      </div>
                  @endif
              </div>
          </header>

          <!-- توضیح کوتاه -->
          @if($blog->short_description)
              <div class="bg-blue-50 border-r-4 border-blue-500 p-4 mb-6 rounded">
                  <p class="text-blue-800 text-sm md:text-base leading-7">
                      {{ $blog->short_description }}
                  </p>
              </div>
          @endif

          <!-- محتوای اصلی -->
          <div class="prose prose-lg max-w-none text-zinc-700 leading-8 text-justify">
              {!! $blog->content !!}
          </div>

          <!-- تگ‌ها و اشتراک گذاری -->
          <footer class="mt-8 pt-6 border-t border-zinc-200">
              <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                  <!-- دکمه‌های اشتراک گذاری -->
                  <div class="flex items-center gap-3">
                      <span class="text-zinc-600 text-sm">اشتراک گذاری:</span>
                      <div class="flex gap-2">
                          <a href="#" class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                              </svg>
                          </a>
                          <a href="#" class="w-8 h-8 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition">
                              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.016 10.016 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"/>
                              </svg>
                          </a>
                          <a href="#" class="w-8 h-8 bg-blue-800 text-white rounded-full flex items-center justify-center hover:bg-blue-900 transition">
                              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                  <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                              </svg>
                          </a>
                      </div>
                  </div>

                  <!-- دکمه بازگشت -->
                  <a href="{{ route('blog.index') }}"
                     class="flex items-center gap-2 px-4 py-2 bg-zinc-100 text-zinc-700 rounded-lg hover:bg-zinc-200 transition text-sm">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                      </svg>
                      بازگشت به بلاگ
                  </a>
              </div>
          </footer>
      </article>
  </main>
  <footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
@include('partial.footer')
  </footer>

</body>

<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{--@include('script/scripts')--}}


<!-- Mirrored from amirtttk.ir/digiStar/aboutUs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 12:54:03 GMT -->
</html>
