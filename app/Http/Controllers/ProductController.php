<?php
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

    public function show($slug)
    {
        $product = Products::where('slug', $slug)
            ->with(['brand', 'category', 'colors', 'sizes'])
            ->firstOrFail();

        $relatedProducts = Products::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->with('brand')
            ->take(4)
            ->get();
//         👇 نظرات این محصول (مرتب‌شده از جدید به قدیم)
        $reviews = $product->reviews()->latest()->get();
        // میانگین امتیاز
        $avgRating = $product->reviews()->avg('rating'); // عدد بین 1 تا 5

        // درصد رضایت از روی میانگین rating
        $satisfactionPercent = $avgRating
            ? round(($avgRating / 5) * 100)
            : 0;
        return view('project.singleProduct', compact('product', 'relatedProducts',   'relatedProducts','satisfactionPercent', 'reviews'));
    }
    public function search(Request $request)
    {
        $query = trim($request->input('q'));

        if (!$query) {
            return redirect()->back()->with('warning', 'عبارت جستجو را وارد کنید.');
        }

        $products = \App\Models\Products::query()
            ->with(['brand', 'category'])
            ->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                    ->orWhere('short_description', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%")
                    ->orWhere('meta_keywords', 'like', "%{$query}%");
            })
            ->orWhereHas('brand', function ($q) use ($query) {
                $q->where('name', 'like', "%{$query}%");
            })
            ->orWhereHas('category', function ($q) use ($query) {
                $q->where('name', 'like', "%{$query}%");
            })
            ->where('is_active', true)
            ->paginate(12);

        return view('project.search', compact('products', 'query'));
    }
}
