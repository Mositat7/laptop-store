<?php
//
//namespace App\Http\Controllers\Admin;
//
//use App\Http\Controllers\Controller;
//use App\Models\Brands;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Cache;
//use Illuminate\Support\Str;
//
//class BrandController extends Controller
//{
//    public function index(Request $request)
//    {
//        $editingBrand = null;
//        if ($request->has('edit_id')) {
//            $editingBrand = Brands::find($request->edit_id);
//        }
//
//        $brands = Brands::orderBy('id', 'desc')->get();
//        return view('admin.pages.brands', compact('brands', 'editingBrand'));
//    }
//
//    public function store(Request $request)
//    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'logo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
//            'website' => 'nullable|url',
//            'order' => 'nullable|integer',
//        ]);
//
//        $brand = new Brands();
//        $brand->name = $request->name;
//        $brand->slug = Str::slug($request->name);
//        $brand->is_active = $request->has('is_active') ? 1 : 0;
//        $brand->website = $request->website;
//        $brand->order = $request->order ?? 0;
//
//        if ($request->hasFile('logo')) {
//            $file = $request->file('logo');
//            $filename = time() . '-' . Str::slug($brand->name) . '.' . $file->getClientOriginalExtension();
//            $destinationPath = public_path('assets/image/brands');
//
//            if (!file_exists($destinationPath)) {
//                mkdir($destinationPath, 0755, true);
//            }
//
//            $file->move($destinationPath, $filename);
//            $brand->logo = 'brands/' . $filename;
//        }
//
//        $brand->save();
//
//        return redirect()->back()->with('success', 'برند با موفقیت اضافه شد ✅');
//    }
//
//    // ❌ متد edit حذف شده — نیازی نیست
//
//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
//            'website' => 'nullable|url',
//            'order' => 'nullable|integer',
//        ]);
//
//        $brand = Brands::findOrFail($id);
//        $brand->name = $request->name;
//        $brand->slug = Str::slug($request->name);
//        $brand->is_active = $request->has('is_active') ? 1 : 0;
//        $brand->website = $request->website;
//        $brand->order = $request->order ?? 0;
//
//        if ($request->hasFile('logo')) {
//            if ($brand->logo) {
//                $oldPath = public_path('assets/image/' . $brand->logo);
//                if (file_exists($oldPath)) {
//                    unlink($oldPath);
//                }
//            }
//
//            $file = $request->file('logo');
//            $filename = time() . '-' . Str::slug($brand->name) . '.' . $file->getClientOriginalExtension();
//            $destinationPath = public_path('assets/image/brands');
//
//            if (!file_exists($destinationPath)) {
//                mkdir($destinationPath, 0755, true);
//            }
//
//            $file->move($destinationPath, $filename);
//            $brand->logo = 'brands/' . $filename;
//        }
//
//        $brand->save();
//
//        return redirect()->route('admin.brands.index')->with('success', 'برند با موفقیت ویرایش شد ✅');
//    }
//
//    public function destroy($id)
//    {
//        $brand = Brands::findOrFail($id);
//
//        if ($brand->logo) {
//            $logoPath = public_path('assets/image/' . $brand->logo);
//            if (file_exists($logoPath)) {
//                unlink($logoPath);
//            }
//        }
//
//        $brand->delete();
//
//        return redirect()->back()->with('success', 'برند با موفقیت حذف شد ❌');
//    }
//}


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $editingBrand = null;
        if ($request->has('edit_id')) {
            $editingBrand = Brands::find($request->edit_id);
        }

        $brands = Brands::orderBy('id', 'desc')->get();
        return view('admin.pages.brands', compact('brands', 'editingBrand'));
        // ❌ این خط بی‌فایده است (بعد از return اجرا نمی‌شه)
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
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
            $destinationPath = public_path('assets/image/brands');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $brand->logo = 'brands/' . $filename; // ✅ این مسیر با asset('assets/image/...') جور درمیاد
        }

        $brand->save();

        // ✅ پاک کردن کَش برندها در فروشگاه
        Cache::forget('brands');

        return redirect()->back()->with('success', 'برند با موفقیت اضافه شد ✅');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
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
            if ($brand->logo) {
                $oldPath = public_path('assets/image/' . $brand->logo);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $file = $request->file('logo');
            $filename = time() . '-' . Str::slug($brand->name) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('assets/image/brands');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $brand->logo = 'brands/' . $filename;
        }

        $brand->save();

        // ✅ پاک کردن کَش برندها
        Cache::forget('brands');

        return redirect()->route('admin.brands.index')->with('success', 'برند با موفقیت ویرایش شد ✅');
    }

    public function destroy($id)
    {
        $brand = Brands::findOrFail($id);

        if ($brand->logo) {
            $logoPath = public_path('assets/image/' . $brand->logo);
            if (file_exists($logoPath)) {
                unlink($logoPath);
            }
        }

        $brand->delete();

        // ✅ پاک کردن کَش برندها
        Cache::forget('brands');

        return redirect()->back()->with('success', 'برند با موفقیت حذف شد ❌');
    }
}
