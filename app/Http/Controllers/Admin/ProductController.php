<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\categories;
use App\Models\Color;
use App\Models\Products;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::latest()->get();
        return view('admin.pages.ecommerce_products', compact('products'));
    }

    public function show($id)
    {
        // پیدا کردن محصول بر اساس id (نه Route Model Binding)
        $product = Products::findOrFail($id);
        return view('admin.pages.ecommerce_details', compact('product'));
    }
    public function update(Request $request, $id)
    {
        // پیدا کردن محصول
        $product = Products::findOrFail($id);

        // بروزرسانی فیلدهای اصلی محصول
        $product->update($request->except(['colors', 'sizes']));

        // بروزرسانی رنگ‌ها
        if ($request->has('colors')) {
            $product->colors()->sync($request->input('colors'));
        } else {
            $product->colors()->detach();
        }

        // بروزرسانی سایزها
        if ($request->has('sizes')) {
            $product->sizes()->sync($request->input('sizes'));
        } else {
            $product->sizes()->detach();
        }

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product updated successfully!');
    }
    public function edit($id)
    {
        $colors = Color::all();
        $sizes = Size::all();
        $categories = categories::all();
        $brands = Brands::all(); // همه برندها
        $product = Products::findOrFail($id);
        return view('admin.pages.ecommerce_products_edit', compact('product','brands','categories','colors','sizes'));
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product deleted successfully.');
    }

}
