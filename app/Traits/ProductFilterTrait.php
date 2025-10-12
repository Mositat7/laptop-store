<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ProductFilterTrait
{
    /**
     * اعمال فیلترهای مشترک روی کوئری محصولات
     */
    public function applyProductFilters($query, Request $request)
    {
        // فیلتر بر اساس برند
        if ($request->has('brand') && $request->brand) {
            $query->where('brand_id', $request->brand);
        }

        // فیلتر بر اساس قیمت
        if ($request->has('min_price') && $request->min_price) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->has('max_price') && $request->max_price) {
            $query->where('price', '<=', $request->max_price);
        }

        // فیلتر بر اساس دسته‌بندی (اگر نیاز باشد)
        if ($request->has('category') && $request->category) {
            $query->where('category_id', $request->category);
        }

        return $query;
    }

    /**
     * گرفتن برندها با تعداد محصولات
     */
    public function getBrandsWithCount($conditions = [])
    {
        $query = \App\Models\Brands::withCount(['products' => function($query) use ($conditions) {
            $query->where('is_active', true);

            // اضافه کردن شرایط اضافی اگر وجود دارد
            foreach ($conditions as $column => $value) {
                $query->where($column, $value);
            }
        }]);

        return $query->get();
    }

    /**
     * ساخت URL با فیلترهای جدید
     */
    public function buildFilterUrl(Request $request, $newFilters = [])
    {
        $currentParams = $request->query();

        // حذف پارامترهای صفحه‌بندی هنگام اضافه کردن فیلتر جدید
        unset($currentParams['page']);

        // ادغام فیلترهای جدید با فیلترهای موجود
        $mergedParams = array_merge($currentParams, $newFilters);

        // حذف فیلترهای خالی
        $filteredParams = array_filter($mergedParams, function($value) {
            return $value !== null && $value !== '';
        });

        return $request->url() . (count($filteredParams) ? '?' . http_build_query($filteredParams) : '');
    }

    /**
     * اعتبارسنجی فیلتر قیمت
     */
    public function validatePriceFilter($minPrice, $maxPrice)
    {
        if ($minPrice && $maxPrice && $minPrice > $maxPrice) {
            return 'حداقل قیمت نمی‌تواند از حداکثر قیمت بیشتر باشد';
        }

        if (($minPrice && $minPrice < 0) || ($maxPrice && $maxPrice < 0)) {
            return 'قیمت نمی‌تواند منفی باشد';
        }

        return null;
    }

    /**
     * گرفتن فیلترهای فعال
     */
    public function getActiveFilters(Request $request)
    {
        $activeFilters = [];

        if ($request->has('brand') && $request->brand) {
            $activeFilters['brand'] = $request->brand;
        }

        if ($request->has('min_price') && $request->min_price) {
            $activeFilters['min_price'] = $request->min_price;
        }

        if ($request->has('max_price') && $request->max_price) {
            $activeFilters['max_price'] = $request->max_price;
        }

        return $activeFilters;
    }
}
