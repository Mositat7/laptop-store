<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories',
            'icon' => 'nullable|string|max:100',
            'description' => 'nullable|string',
        ]);

        $category = new BlogCategory();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->icon = $request->icon;
        $category->description = $request->description;
        $category->is_active = $request->has('is_active');
        $category->order = 0;

        $category->save();

        Cache::forget('blog_categories');
        Cache::forget('blogPosts');

        return redirect()->route('blog-posts.index')
            ->with('category_success', 'دسته‌بندی جدید ایجاد شد ✅');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name,' . $id,
            'icon' => 'nullable|string|max:100',
            'description' => 'nullable|string',
        ]);

        $category = BlogCategory::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->icon = $request->icon;
        $category->description = $request->description;
        $category->is_active = $request->has('is_active');

        $category->save();

        Cache::forget('blog_categories');
        Cache::forget('blogPosts');

        return redirect()->route('blog-posts.index')
            ->with('category_success', 'دسته‌بندی به‌روز شد ✅');
    }

    public function destroy($id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();

        Cache::forget('blog_categories');
        Cache::forget('blogPosts');

        return redirect()->route('blog-posts.index')
            ->with('category_success', 'دسته‌بندی حذف شد ❌');
    }
}
