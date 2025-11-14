<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Banners;
//use App\Models\Banners_middle;
//use App\Models\BlogPost;
//use App\Models\Brands;
//use App\Models\categories;
//use App\Models\MainCategory;
//use App\Models\Products;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Cache;
//
//class HomeController extends Controller
//{
//    public function index()
//    {
//        // -------------------------------
//        // 1. بنرها
//        // -------------------------------
//        $banners_middle = Cache::remember('banners_middle', 600, function() {
//            return Banners_middle::active()->current()->ordered()->get();
//        });
//
//        $banners = Cache::remember('banners', 600, function() {
//            return Banners::active()->ordered()->get();
//        });
//
//        // -------------------------------
//        // 2. دسته‌بندی‌ها و برندها
//        // -------------------------------
//        $mainCategories = Cache::remember('mainCategories', 600, function() {
//            return MainCategory::active()->ordered()->get();
//        });
//
//        $categories = Cache::remember('categories', 600, function() {
//            return categories::all();  // توجه: اسم مدل Category است، با حرف بزرگ اول
//        });
//
//        $brands = Cache::remember('brands', 600, function() {
//            return Brands::active()->ordered()->get(); // اسم مدل Brand
//        });
//
//        // -------------------------------
//        // 3. همه محصولات فعال با eager loading
//        // -------------------------------
//        $products = Cache::remember('products_active', 600, function() {
//            return Products::with(['category', 'brand'])
//                ->where('is_active', true)
//                ->get();
//        });
//
//        // -------------------------------
//        // 4. محصولات پرفروش و جدیدترین از مجموعه کش شده
//        // -------------------------------
//        $bestSellingProducts = $products->sortByDesc('sales_count')->take(10);
//        $newestProducts = $products->sortByDesc('created_at')->take(10);
//
//        // -------------------------------
//        // 5. مقالات
//        // -------------------------------
//        $blogPosts = Cache::remember('blogPosts', 600, function() {
//            return BlogPost::published()->latest()->take(5)->get();
//        });
//
//        // -------------------------------
//        // بازگشت به view
//        // -------------------------------
//        return view('index', compact(
//            'banners',
//            'mainCategories',
//            'categories',
//            'bestSellingProducts',
//            'newestProducts',
//            'products',
//            'brands',
//            'blogPosts',
//            'banners_middle'
//        ));
//    }
//}


namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Banners_middle;
use App\Models\BlogPost;
use App\Models\Brands;
use App\Models\categories;
use App\Models\MainCategory;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // -------------------------------
        // 1. بنرها
        // -------------------------------
        $banners_middle = Cache::remember('banners_middle', now()->addMinutes(10), function () {
            return Banners_middle::active()->current()->ordered()->get();
        });

        $banners = Cache::remember('banners', now()->addMinutes(10), function () {
            return Banners::active()->orderBy('position', 'asc')->get();
        });

        // -------------------------------
        // 2. دسته‌بندی‌ها و برندها
        // -------------------------------
        $mainCategories = Cache::remember('mainCategories', now()->addMinutes(10), function () {
            return MainCategory::active()->orderBy('order', 'asc')->get();
        });

        $categories = Cache::remember('categories', now()->addMinutes(10), function () {
            return categories::all();
        });

        $brands = Cache::remember('brands', now()->addMinutes(10), function () {
            return Brands::active()->orderBy('order', 'asc')->get();
        });

        // -------------------------------
        // 3. محصولات فعال (با eager loading)
        // -------------------------------
        $products = Cache::remember('products_active', now()->addMinutes(10), function () {
            return Products::with(['category', 'brand'])
                ->where('is_active', true)
                ->get();
        });

        // -------------------------------
        // 4. محصولات پرفروش و جدید — بدون کش جداگانه (از کش اصلی استفاده می‌کنیم)
        // -------------------------------
        $bestSellingProducts = $products->sortByDesc('sales_count')->take(10)->values();
        $newestProducts = $products->sortByDesc('created_at')->take(10)->values();

        // -------------------------------
        // 5. مقالات
        // -------------------------------
        $blogPosts = Cache::remember('blogPosts', now()->addMinutes(10), function () {
            return BlogPost::published()->latest()->take(5)->get();
        });

        return view('index', compact(
            'banners',
            'mainCategories',
            'categories',
            'bestSellingProducts',
            'newestProducts',
            'products',
            'brands',
            'blogPosts',
            'banners_middle'
        ));
    }
}
