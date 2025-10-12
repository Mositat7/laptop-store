<?php
////
////namespace App\Http\Controllers;
////
////use App\Models\categories;
////use App\Models\Products;
////use Illuminate\Http\Request;
////
////class CategoryController extends Controller
////{
//////    public function show($slug)
//////    {
//////        $category = categories::where('slug', $slug)->firstOrFail();
//////
//////        // اینجا بعداً محصولات این دسته‌بندی رو میاری
//////        $products = [];
//////
//////        return view('project.index', compact('category', 'products'));
//////    }
////    public function show($slug)
////    {
////        // پیدا کردن دسته‌بندی بر اساس slug
////        $category = categories::where('slug', $slug)
////            ->with('children')
////            ->firstOrFail();
////
////        // محصولات این دسته‌بندی
////        $products = Products::where('category_id', $category->id)
////            ->where('is_active', true)
////            ->with(['brand', 'colors', 'reviews'])
////            ->orderBy('created_at', 'desc')
////            ->paginate(12);
////
////        // محصولات جدید برای اسلایدر
////        $newestProducts = Products::where('is_active', true)
////            ->with(['brand', 'colors'])
////            ->orderBy('created_at', 'desc')
////            ->take(10)
////            ->get();
////
////        // دسته‌بندی‌های اصلی برای فیلتر
////        $mainCategories = categories::whereNull('parent_id')
////            ->withCount('products')
////            ->get();
////
////        return view('project.show', compact(
////            'category',
////            'products',
////            'newestProducts',
////            'mainCategories'
////        ));
////    }
////}
//
//
//namespace App\Http\Controllers;
//
//use App\Models\categories;
//use App\Models\Products;
//use Illuminate\Http\Request;
//
//class CategoryController extends Controller
//{
//    public function show($slug)
//    {
//        // پیدا کردن دسته‌بندی بر اساس slug - بدون رابطه children
//        $category = categories::where('slug', $slug)->firstOrFail();
//
//        // محصولات این دسته‌بندی
//        $products = Products::where('category_id', $category->id)
//            ->where('is_active', true)
//            ->with(['brand', 'colors'])
//            ->orderBy('created_at', 'desc')
//            ->paginate(12);
//
//        // محصولات جدید برای اسلایدر
//        $newestProducts = Products::where('is_active', true)
//            ->with(['brand', 'colors'])
//            ->orderBy('created_at', 'desc')
//            ->take(10)
//            ->get();
//
//        // دسته‌بندی‌های اصلی برای فیلتر
//        // اگر parent_id ندارید، این خط را تغییر دهید
//        $mainCategories = categories::all(); // یا categories::whereNull('parent_id')->get()
//
//        return view('project.show', compact(
//            'category',
//            'products',
//            'newestProducts',
//            'mainCategories'
//        ));
//    }
//    // متد جدید برای مرتب‌سازی
//    public function getSortedProducts($slug, Request $request)
//    {
//        $category = categories::where('slug', $slug)->firstOrFail();
//        $sortType = $request->get('sort', 'default');
//
//        $query = Products::where('category_id', $category->id)
//            ->where('is_active', true)
//            ->with(['brand', 'colors']);
//
//        // اعمال مرتب‌سازی بر اساس انتخاب کاربر
//        switch ($sortType) {
//            case 'newest':
//                $query->orderBy('created_at', 'desc');
//                break;
//
//            case 'popular':
//                $query->orderBy('sales_count', 'desc'); // اگر فیلد sales_count دارید
//                break;
//
//            case 'rating':
//                // اگر سیستم امتیازدهی دارید
//                $query->orderBy('rating', 'desc');
//                break;
//
//            case 'price_asc':
//                $query->orderBy('price', 'asc');
//                break;
//
//            case 'price_desc':
//                $query->orderBy('price', 'desc');
//                break;
//
//            case 'default':
//            default:
//                $query->orderBy('created_at', 'desc');
//                break;
//        }
//
//        $products = $query->paginate(12);
//
//        if ($request->ajax()) {
//            $html = view('partials.products_grid', compact('products'))->render();
//
//            return response()->json([
//                'html' => $html,
//                'count' => $products->total()
//            ]);
//        }
//
//        return $products;
//    }
//}


namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\Products;
use App\Traits\ProductFilterTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ProductFilterTrait;

    // استفاده از Trait

    public function show($slug, Request $request)
    {
        $category = categories::where('slug', $slug)->firstOrFail();

        $query = Products::where('category_id', $category->id)
            ->where('is_active', true)
            ->with(['brand', 'colors'])
            ->orderBy('created_at', 'desc');

        // استفاده از متد Trait برای اعمال فیلترها
        $query = $this->applyProductFilters($query, $request);

        $products = $query->paginate(12);

        $newestProducts = Products::where('is_active', true)
            ->with(['brand', 'colors'])
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $mainCategories = categories::all();

        // گرفتن برندهای مخصوص این دسته‌بندی
        $brands = $this->getBrandsWithCount([
            'category_id' => $category->id
        ]);

        return view('project.show', compact(
            'category',
            'products',
            'newestProducts',
            'mainCategories',
            'brands'
        ));
    }
}
