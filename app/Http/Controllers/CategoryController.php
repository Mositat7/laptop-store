<?php
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
