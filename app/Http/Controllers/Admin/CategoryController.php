<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.pages.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        // 📁 ذخیره عکس در storage/app/public/categories
        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $filename = time() . '-' . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/categories', $filename);
            $category->image = 'categories/' . $filename;
        }

        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'دسته‌بندی با موفقیت اضافه شد.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.pages.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $filename = time() . '-' . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/categories', $filename);
            $category->image = 'categories/' . $filename;
        }

        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'دسته‌بندی با موفقیت ویرایش شد.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image && file_exists(storage_path('app/public/' . $category->image))) {
            unlink(storage_path('app/public/' . $category->image));
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'دسته‌بندی حذف شد.');
    }
}

