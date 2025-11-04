<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $editingCategory = null;
        if ($request->has('edit_id')) {
            $editingCategory = categories::find($request->edit_id);
        }

        $categories = categories::orderBy('id', 'desc')->get();
        return view('admin.pages.categories', compact('categories', 'editingCategory'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $category = new categories();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '-' . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('storage/categories');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $category->image = 'storage/categories/' . $filename;
        }

        $category->save();

        return redirect()->back()->with('success', 'دسته‌بندی با موفقیت اضافه شد.');
    }

    // ❌ متد edit حذف شده — نیازی نیست

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $category = categories::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }

            $file = $request->file('image');
            $filename = time() . '-' . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('storage/categories');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $category->image = 'storage/categories/' . $filename;
        }

        $category->save();

        return redirect()->back()->with('success', 'دسته‌بندی با موفقیت ویرایش شد.');
    }

    public function destroy($id)
    {
        $category = categories::findOrFail($id);
        if ($category->image && file_exists(public_path($category->image))) {
            unlink(public_path($category->image));
        }
        $category->delete();

        return redirect()->back()->with('success', 'دسته‌بندی حذف شد.');
    }
}
