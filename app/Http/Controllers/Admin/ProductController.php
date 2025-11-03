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
        $products = Products::latest()->paginate(9);
        return view('admin.pages.ecommerce_products', compact('products'));
    }
    // فرم افزودن محصول
    public function create()
    {
        // گرفتن اطلاعات برای select ها و checkbox ها
        $brands = Brands::all();
        $categories = categories::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('admin.pages.ecommerce_products_create', compact(
            'brands', 'categories', 'colors', 'sizes'
        ));
    }
    // ذخیره محصول جدید
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->slug = $request->slug;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->cpu = $request->cpu;
        $product->gpu = $request->gpu;
        $product->ram = $request->ram;
        $product->storage = $request->storage;
        $product->display = $request->display;
        $product->battery = $request->battery;
        $product->quantity = $request->quantity;
        $product->stock = $request->stock;
        $product->is_active = $request->is_active ?? 0;
        $product->is_featured = $request->is_featured ?? 0;
        $product->meta_keywords = $request->meta_keywords;

        // main image
        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/products'), $filename);
            $product->main_image = 'assets/images/products/' . $filename;
        }

// gallery
        if ($request->hasFile('gallery')) {
            $gallery = [];
            foreach ($request->file('gallery') as $file) {
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images/products'), $filename);
                $gallery[] = 'assets/images/products/' . $filename; // ✅ مسیر فایل را ذخیره کن
            }
            $product->gallery = json_encode($gallery); // ✅ JSON رشته ذخیره شود
        }
        $product->save();

        // attach colors and sizes
        if ($request->colors) {
            $product->colors()->sync($request->colors);
        }
        if ($request->sizes) {
            $product->sizes()->sync($request->sizes);
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
    }

    public function show($id)
    {
        // پیدا کردن محصول بر اساس id (نه Route Model Binding)
        $product = Products::findOrFail($id);
        return view('admin.pages.ecommerce_details', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);

        // بروزرسانی فیلدهای اصلی به جز تصاویر و رنگ و سایز
        $product->update($request->except(['colors', 'sizes', 'main_image', 'gallery']));

        // main_image
        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/products'), $filename);
            $product->main_image = 'assets/images/products/' . $filename;
        }

        // gallery
        if ($request->hasFile('gallery')) {
            $gallery = [];
            foreach ($request->file('gallery') as $file) {
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images/products'), $filename);
                $gallery[] = 'assets/images/products/' . $filename;
            }
            $product->gallery = json_encode($gallery);
        }

        $product->save();

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
