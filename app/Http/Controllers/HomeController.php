<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Banners_middle;
use App\Models\BlogPost;
use App\Models\Brands;
use App\Models\categories;
use App\Models\MainCategory;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners_middle = Banners_middle::active()->current()->ordered()->get();
        $banners = Banners::active()->ordered()->get();
        $mainCategories = MainCategory::active()->ordered()->get();
        $categories = categories::all(); // همه کتگوری‌ها
        // گرفتن محصولات پرفروش بر اساس sales_count
        $bestSellingProducts = Products::with(['category'])
            ->where('is_active', true)
            ->orderBy('sales_count', 'desc')
            ->take(10)
            ->get();
//        برندها
        $brands = Brands::active()->ordered()->get();
        // جدیدترین محصولات - بر اساس created_at
        $newestProducts = Products::with(['category'])
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        // مقالات
        $blogPosts = BlogPost::published()->latest()->take(5)->get();

        // گرفتن همه محصولات فعال
        $products = Products::with(['category'])
            ->where('is_active', true)
            ->get();
//         dd($bestSellingProducts);

        return view('index', compact(
            'banners',
            'mainCategories',
            'categories',
            'bestSellingProducts',
            'products',
            'brands',
            'blogPosts',
            'newestProducts',
            'banners_middle'
        ));
    }
}
