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
{{--      nav--}}
      @include('partial/nav')
  </header>


  <main class="pt-24 md:pt-48 px-2 md:px-10">
    <!-- new blogs slider -->
    <div class="md:mt-10 px-4 md:px-14">
      <!-- top blog -->
      <div class="flex gap-x-4 justify-between items-center mb-7">
        <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
        </div>
        <div class="w-48 min-w-fit text-zinc-700 md:font-yekanBakhBold md:text-lg">
          جدیدترین مقالات
        </div>
        <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
        </div>
      </div>
        <div class="blog1 pb-16 px-4">
            <div class="card-wrapper swiper-wrapper">
                @if($blogPost->count() > 0)
                    @foreach($blogPost as $post)
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
                                       {{ jdate($post->publish_date)->format('Y/m/d') }}
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
      <!-- main blog -->
    </div>
      <div class="flex gap-x-4 justify-between items-center mb-7">
          <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
          </div>
          <div class="w-48 min-w-fit text-zinc-700 md:font-yekanBakhBold md:text-lg">
              همه مقالات
          </div>
          <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
          </div>
      </div>
      <!-- main blogs -->
      <div class="px-3 lg:px-10 md:flex gap-x-5 pt-10">
          <div class="md:w-3/12">
              <div class="px-2 sm:px-3 py-3 bg-white rounded-xl border border-zinc-300 space-y-3">
                  @if(isset($blogCategories) && $blogCategories->count() > 0)
                      <!-- دکمه همه مقالات -->
                      <a href="{{ url('/blogs') }}"
                         class="mx-auto flex gap-x-1 group items-center md:font-semibold text-right w-full px-2 py-3 text-sm cursor-pointer {{ !request('category') ? 'bg-primary-500 text-white' : 'text-zinc-700 hover:bg-primary-500 hover:text-white' }} transition rounded-lg">
                          <span class="text-lg">📰</span>
                          همه مقالات
                      </a>

                      @foreach($blogCategories as $category)
                          <a href="{{ route('blog.show', $post->slug) ?? '#' }}"
                             class="mx-auto flex gap-x-1 group items-center md:font-semibold text-right w-full px-2 py-3 text-sm cursor-pointer {{ request('category') == $category->slug ? 'bg-primary-500 text-white' : 'text-zinc-700 hover:bg-primary-500 hover:text-white' }} transition rounded-lg">
                              <span class="text-lg">{{ $category->icon }}</span>
                              {{ $category->name }}
                          </a>
                      @endforeach
                  @else
                      <p class="text-center text-gray-500 py-4">هیچ دسته‌بندی یافت نشد</p>
                  @endif
              </div>
          </div>

          <div class="md:w-9/12 mt-5 md:mt-0">
              <!-- section blog -->
              <div class="rounded-2xl mx-auto text-gray-100">
                  <!-- main blog -->
                  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-5">
                      @if($blogPosts->count() > 0)
                          @foreach($blogPosts as $post)
                              <div class="card swiper-slide bg-white min-h-60 rounded-2xl border hover:border-primary-500 transition border-zinc-300 group p-2 md:p-3 hover:drop-shadow-lg">
                                  <a href="{{ url('/blogs/' . $post->slug) }}" class="image-box block overflow-hidden rounded-lg md:rounded-2xl">
                                      <img class="rounded-lg md:rounded-2xl max-h-56 w-full transition-transform duration-300 ease-in-out group-hover:rotate-3 group-hover:scale-110"
                                           src="{{ asset('assets/image/' . $post->image) }}"
                                           alt="{{ $post->title }}"
                                           onerror="this.src='{{ asset('assets/image/placeholder.jpg') }}'">
                                  </a>
                                  <div class="p-2 mt-2">
                                      <a href="{{ url('/blog/' . $post->slug) }}" class="text-xs md:text-sm font-normal md:font-semibold text-zinc-700 group-hover:text-primary-500 h-12 line-clamp-2 leading-6">
                                          {{ $post->title }}
                                      </a>
                                      <div class="flex justify-between mt-8">
                                          <div class="text-xs flex gap-x-1 items-center text-zinc-400">
                                              <svg class="fill-zinc-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256">
                                                  <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                                              </svg>
                                              {{ jdate($post->publish_date)->format('Y/m/d') }}
                                          </div>
                                          <a href="{{ url('/blog/' . $post->slug) }}" class="flex justify-center items-center gap-x-1 group w-fit text-xs md:text-sm transition text-zinc-600 group-hover:text-primary-500">
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
                          <div class="col-span-3 text-center py-12">
                              <p class="text-gray-500 text-lg">هیچ مقاله ای یافت نشد</p>
                          </div>
                      @endif
                  </div>
              </div>

              <!-- pagination -->
              @if($blogPosts->lastPage() > 1)
                  <div class="flex justify-center my-12">
                      <!-- Previous Page Link -->
                      @if($blogPosts->onFirstPage())
                          <span class="flex items-center justify-center px-3.5 md:px-4 py-2 mx-1 text-gray-400 bg-gray-100 rounded-md -scale-x-100 cursor-not-allowed">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 md:size-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                      @else
                          <a href="{{ $blogPosts->previousPageUrl() }}{{ request('category') ? '&category=' . request('category') : '' }}" class="flex items-center justify-center px-3.5 md:px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md -scale-x-100 hover:bg-primary-500 hover:text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-4 md:size-5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                          </a>
                      @endif

                      <!-- Pagination Elements -->
                      @for($page = 1; $page <= $blogPosts->lastPage(); $page++)
                          @if($page == $blogPosts->currentPage())
                              <span class="border border-zinc-100 text-sm md:text-base px-3.5 md:px-4 py-2 mx-1 transition-colors duration-300 transform bg-primary-500 text-white rounded-md">
                            {{ $page }}
                        </span>
                          @else
                              <a href="{{ $blogPosts->url($page) }}{{ request('category') ? '&category=' . request('category') : '' }}" class="border border-zinc-100 text-sm md:text-base px-3.5 md:px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md hover:bg-primary-500 hover:text-white">
                                  {{ $page }}
                              </a>
                          @endif
                      @endfor

                      <!-- Next Page Link -->
                      @if($blogPosts->hasMorePages())
                          <a href="{{ $blogPosts->nextPageUrl() }}{{ request('category') ? '&category=' . request('category') : '' }}" class="flex items-center justify-center px-3.5 md:px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md -scale-x-100 hover:bg-primary-500 hover:text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-4 md:size-5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                              </svg>
                          </a>
                      @else
                          <span class="flex items-center justify-center px-3.5 md:px-4 py-2 mx-1 text-gray-400 bg-gray-100 rounded-md -scale-x-100 cursor-not-allowed">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 md:size-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                      @endif
                  </div>
              @endif
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
    document.addEventListener('DOMContentLoaded', function() {
        const categoryButtons = document.querySelectorAll('.category-filter');
        const blogPostsContainer = document.getElementById('blogPostsContainer');

        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const categorySlug = this.getAttribute('data-category');

                // حذف کلاس active از همه دکمه‌ها
                categoryButtons.forEach(btn => {
                    btn.classList.remove('bg-primary-500', 'text-white');
                    btn.classList.add('text-zinc-700', 'hover:bg-primary-500', 'hover:text-white');
                });

                // اضافه کردن کلاس active به دکمه انتخاب شده
                this.classList.add('bg-primary-500', 'text-white');
                this.classList.remove('text-zinc-700', 'hover:bg-primary-500', 'hover:text-white');

                // تغییر URL بدون ریلود صفحه
                const url = new URL(window.location);
                if (categorySlug === 'latest') {
                    url.searchParams.delete('category');
                } else {
                    url.searchParams.set('category', categorySlug);
                }
                window.history.pushState({}, '', url);

                // ارسال درخواست برای فیلتر مقالات
                filterBlogPosts(categorySlug);
            });
        });

        function filterBlogPosts(categorySlug) {
            // نمایش لودینگ
            blogPostsContainer.innerHTML = `
            <div class="col-span-3 text-center py-12">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-primary-500"></div>
                <p class="text-gray-500 mt-2">در حال بارگذاری مقالات...</p>
            </div>
        `;

            // ارسال درخواست AJAX
            fetch(`/blog/filter?category=${categorySlug}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        blogPostsContainer.innerHTML = data.html;

                        // به روزرسانی پاژینیشن
                        if (data.pagination) {
                            updatePagination(data.pagination);
                        }
                    } else {
                        blogPostsContainer.innerHTML = '<div class="col-span-3 text-center py-12"><p class="text-gray-500">خطا در بارگذاری مقالات</p></div>';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    blogPostsContainer.innerHTML = '<div class="col-span-3 text-center py-12"><p class="text-gray-500">خطا در بارگذاری مقالات</p></div>';
                });
        }

        function updatePagination(paginationHtml) {
            const paginationContainer = document.querySelector('.flex.justify-center.my-12');
            if (paginationContainer && paginationHtml) {
                paginationContainer.innerHTML = paginationHtml;
            }
        }

        // بارگذاری اولیه بر اساس پارامتر URL
        const urlParams = new URLSearchParams(window.location.search);
        const categoryParam = urlParams.get('category');
        if (categoryParam) {
            const activeButton = document.querySelector(`[data-category="${categoryParam}"]`);
            if (activeButton) {
                activeButton.click();
            }
        }
    });
</script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/sliders.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{--@include('script/scripts')--}}
</html>
