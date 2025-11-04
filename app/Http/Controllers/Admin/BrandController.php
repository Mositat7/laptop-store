<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brands::orderBy('id', 'desc')->get();
        return view('admin.pages.brands', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'logo'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'website' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        $brand = new Brands();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->is_active = $request->has('is_active') ? 1 : 0;
        $brand->website = $request->website;
        $brand->order = $request->order ?? 0;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '-' . Str::slug($brand->name) . '.' . $file->getClientOriginalExtension();

            // ❗ ذخیره مستقیم داخل public/storage/brands
            $file->move(public_path('storage/brands'), $filename);

            // آدرس قابل نمایش
            $brand->logo = 'storage/brands/' . $filename;
        }



        $brand->save();

        return redirect()->back()->with('success', 'برند با موفقیت اضافه شد ✅');
    }

    public function edit($id)
    {
        $brand = Brands::findOrFail($id);
        return view('admin.pages.brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'logo'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'website' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        $brand = Brands::findOrFail($id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->is_active = $request->has('is_active') ? 1 : 0;
        $brand->website = $request->website;
        $brand->order = $request->order ?? 0;


        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('brands', 'public');
            $brand->logo = $path;
        }

        $brand->save();

        return redirect()->route('admin.brands.index')->with('success', 'برند با موفقیت ویرایش شد ✅');
    }

    public function destroy($id)
    {
        $brand = Brands::findOrFail($id);

        // حذف فایل لوگو از storage (اختیاری)
        if ($brand->logo && file_exists(public_path('storage/' . $brand->logo))) {
            unlink(public_path('storage/' . $brand->logo));
        }

        $brand->delete();

        return redirect()->back()->with('success', 'برند با موفقیت حذف شد ❌');
    }
}
