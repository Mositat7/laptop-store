<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Brands;
//use App\Models\categories;
//use App\Models\Products;
//use Illuminate\Http\Request;
//
//class ProductController extends Controller
//{
//    // محصولات جدید
//    public function newest(Request $request)
//    {
//        $products = Products::where('is_active', true)
//            ->with(['brand', 'colors'])
//            ->orderBy('created_at', 'desc')
//            ->paginate(24); // تعداد بیشتر برای صفحه "مشاهده همه"
//
//        $query = Products::where('is_active', true)
//            ->with(['brand', 'colors'])
//            ->orderBy('created_at', 'desc');
//
//        // فیلتر بر اساس برند
//        if ($request->has('brand') && $request->brand) {
//            $query->where('brand_id', $request->brand);
//        }
//        // فیلتر بر اساس قیمت
//        if ($request->has('min_price') && $request->min_price) {
//            $query->where('price', '>=', $request->min_price);
//        }
//
//        if ($request->has('max_price') && $request->max_price) {
//            $query->where('price', '<=', $request->max_price);
//        }
//        $products = $query->paginate(24);
//
//        $mainCategories = categories::all();
//
//        $brands = Brands::withCount(['products' => function($query) {
//            $query->where('is_active', true);
//        }])
//            ->get();
//        return view('project.newest', compact('products', 'mainCategories','brands'));
//    }
//    // محصولات پرفروش
//    public function bestSelling(Request $request)
//    {
//        $products = Products::where('is_active', true)
//            ->where('sales_count', '>', 0) // فقط محصولاتی که فروش داشته‌اند
//            ->with(['brand', 'colors'])
//            ->orderBy('sales_count', 'desc')
//            ->orderBy('created_at', 'desc')
//            ->paginate(24);
//
//        $mainCategories = categories::all();
//
//        return view('project.best-selling', compact('products', 'mainCategories'));
//    }
//    public function show($product)
//    {
//        // پیدا کردن محصول با slug
//        $product = Products::where('slug', $product)
//            ->with(['brand', 'category', 'colors', 'sizes']) // بهتره با آرایه باشه
//            ->firstOrFail();
//
//        // محصولات مرتبط (همان دسته‌بندی)
//        $relatedProducts = Products::where('category_id', $product->category_id)
//            ->where('id', '!=', $product->id)
//            ->with('brand') // اضافه کردن brand برای نمایش در کارت محصولات
//            ->take(4)
//            ->get();
//        return view('project.singleProduct', compact('product', 'relatedProducts'));
//    }
//
//}


namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\categories;
use App\Models\Products;
use App\Traits\ProductFilterTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ProductFilterTrait;

    // استفاده از Trait

    // محصولات جدید
    public function newest(Request $request)
    {
        $query = Products::where('is_active', true)
            ->with(['brand', 'colors'])
            ->orderBy('created_at', 'desc');

        // استفاده از متد Trait برای اعمال فیلترها
        $query = $this->applyProductFilters($query, $request);

        $products = $query->paginate(24);
        $mainCategories = categories::all();

        // استفاده از متد Trait برای گرفتن برندها
        $brands = $this->getBrandsWithCount();

        return view('project.newest', compact('products', 'mainCategories', 'brands'));
    }

    // محصولات پرفروش
    public function bestSelling(Request $request)
    {
        $query = Products::where('is_active', true)
            ->where('sales_count', '>', 0)
            ->with(['brand', 'colors'])
            ->orderBy('sales_count', 'desc')
            ->orderBy('created_at', 'desc');

        // استفاده از متد Trait برای اعمال فیلترها
        $query = $this->applyProductFilters($query, $request);

        $products = $query->paginate(24);
        $mainCategories = categories::all();
        $brands = $this->getBrandsWithCount();

        return view('project.best-selling', compact('products', 'mainCategories', 'brands'));
    }
}
