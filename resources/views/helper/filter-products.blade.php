<div class="desktop-sidebar">
    <div class="bg-white rounded-xl shadow-sm p-5 sticky top-32">
        <h2 class="text-lg font-bold text-gray-900 mb-5 border-b pb-3">فیلتر محصولات</h2>
        <div class="border border-zinc-100 h-fit rounded-2xl py-2 hover:shadow-sm transition-all mb-5">
            <button class="menu-toggle flex justify-between items-center w-full py-3 px-4 rounded-2xl cursor-pointer hover:bg-zinc-50 transition-all">
                <span class="text-zinc-700 text-sm font-semibold">دسته‌بندی‌ها</span>
                <img class="w-4 transition-transform opacity-80" src="{{ asset('assets/image/icons/arrowDown.svg')}}" alt="">
            </button>
            <div class="submenu hidden mt-2">
                <ul class="space-y-1 max-h-80 overflow-y-auto px-2">
                    @foreach($mainCategories as $mainCat)
                    <li>
                        <a href="{{ route('category.show', $mainCat->slug) }}"
                           class="flex items-center justify-between w-full py-2 px-3 rounded-lg text-sm text-zinc-700 hover:bg-blue-50 hover:text-blue-600 transition-all group">
                            <span class="font-medium text-xs">{{ $mainCat->name }}</span>
                            <span class="bg-zinc-100 text-zinc-500 text-xs px-2 py-1 rounded-full group-hover:bg-blue-100 group-hover:text-blue-600 transition-all">
                            {{ $mainCat->products_count ?? 0 }}
                        </span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- فیلتر برندها -->
        <div class="border border-zinc-100 h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
            <button class="menu-toggle flex justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                <span class="text-zinc-700 text-sm">برند ها</span>
                <img class="w-4 transition-transform opacity-80" src="{{ asset('assets/image/icons/arrowDown.svg')}}" alt="">
            </button>
            <ul class="submenu hidden mt-2">
                @foreach($brands as $brand)
                <li>
                    <a href="{{ request()->fullUrlWithQuery(['brand' => $brand->id]) }}"
                       class="flex items-center justify-between w-full py-2 px-3 rounded-lg text-sm text-zinc-700 hover:bg-blue-50 hover:text-blue-600 transition-all group {{ request('brand') == $brand->id ? 'bg-blue-50 text-blue-600' : '' }}">
                        <span class="font-medium text-xs">{{ $brand->name }}</span>
                        <span class="bg-zinc-100 text-zinc-500 text-xs px-2 py-1 rounded-full group-hover:bg-blue-100 group-hover:text-blue-600 transition-all {{ request('brand') == $brand->id ? 'bg-blue-100 text-blue-600' : '' }}">
                        {{ $brand->products_count ?? 0 }}
                    </span>
                    </a>
                </li>
                @endforeach

                <!-- لینک حذف فیلتر -->
                @if(request('brand'))
                <li class="border-t border-zinc-100 mt-2 pt-2">
                    <a href="{{ request()->fullUrlWithQuery(['brand' => null]) }}"
                       class="flex items-center justify-center w-full py-2 px-3 rounded-lg text-sm text-red-500 hover:bg-red-50 transition-all">
                        <span class="font-medium text-xs">حذف فیلتر برند</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>

        <!-- فیلتر قیمت -->
        <br>
        <div class="border border-zinc-100 h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
            <button class="menu-toggle flex justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                <span class="text-zinc-700 text-sm">محدوده قیمت</span>
                <img class="w-4 transition-transform opacity-80" src="{{ asset('assets/image/icons/arrowDown.svg')}}" alt="">
            </button>
            <div class="submenu hidden mt-2">
                <div class="space-y-3 px-3 pb-2">
                    <div class="flex flex-col gap-3">
                        <input type="number" id="minPrice" placeholder="حداقل قیمت"
                               value="{{ request('min_price') }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        <input type="number" id="maxPrice" placeholder="حداکثر قیمت"
                               value="{{ request('max_price') }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>

                    <button onclick="applyPriceFilter()" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition font-semibold text-sm">
                        اعمال فیلتر
                    </button>

                    <!-- حذف فیلتر قیمت -->
                    @if(request('min_price') || request('max_price'))
                    <button onclick="clearPriceFilter()" class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition font-semibold text-sm">
                        حذف فیلتر قیمت
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
