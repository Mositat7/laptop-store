<?php
//
//namespace App\Http\Controllers\Admin;
//use Illuminate\Support\Facades\Cache;
//use App\Http\Controllers\Controller;
//use App\Models\Banners;
//use Illuminate\Http\Request;
//use Illuminate\Support\Str;
//
//class BannerController extends Controller
//{
//    public function index(Request $request)
//    {
//        $editingBanner = null;
//        if ($request->has('edit_id')) {
//            $editingBanner = Banners::find($request->edit_id);
//        }
//
//        $banners = Banners::orderBy('position', 'asc')->get();
//        return view('admin.pages.banners', compact('banners', 'editingBanner'));
//    }
//
//    public function store(Request $request)
//    {
//        $request->validate([
//            'title' => 'nullable|string|max:255',
//            'url'   => 'nullable|url',
//            'image_path' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
//            'position' => 'nullable|integer',
//        ]);
//
//        $banner = new Banners();
//        $banner->title = $request->title;
//        $banner->url = $request->url;
//        $banner->is_active = $request->has('is_active');
//        $banner->position = $request->position ?? 0;
//
//        if ($request->hasFile('image_path')) {
//            $file = $request->file('image_path');
//            $filename = time() . '-' . Str::slug($request->title ?? 'banner') . '.' . $file->getClientOriginalExtension();
//            $destinationPath = public_path('storage/banners');
//
//            if (!file_exists($destinationPath)) {
//                mkdir($destinationPath, 0755, true);
//            }
//
//            $file->move($destinationPath, $filename);
//            $banner->image_path = 'storage/banners/' . $filename; // فقط مسیر نسبی
//        }
//
//        $banner->save();
//
//        return redirect()->back()->with('success', 'بنر با موفقیت اضافه شد ✅');
//    }
//
//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'title' => 'nullable|string|max:255',
//            'url'   => 'nullable|url',
//            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
//            'position' => 'nullable|integer',
//        ]);
//
//        $banner = Banners::findOrFail($id);
//        $banner->title = $request->title;
//        $banner->url = $request->url;
//        $banner->is_active = $request->has('is_active');
//        $banner->position = $request->position ?? $banner->position;
//
//        if ($request->hasFile('image_path')) {
//            // حذف تصویر قدیمی
//            if ($banner->image_path) {
//                $oldImagePath = public_path('storage/' . $banner->image_path);
//                if (file_exists($oldImagePath)) {
//                    unlink($oldImagePath);
//                }
//            }
//
//            $file = $request->file('image_path');
//            $filename = time() . '-' . Str::slug($request->title ?? 'banner') . '.' . $file->getClientOriginalExtension();
//            $destinationPath = public_path('storage/banners');
//
//            if (!file_exists($destinationPath)) {
//                mkdir($destinationPath, 0755, true);
//            }
//
//            $file->move($destinationPath, $filename);
//            $banner->image_path = 'storage/banners/' . $filename;
//        }
//
//        $banner->save();
//
//        return redirect()->route('admin.banners.index')->with('success', 'بنر با موفقیت به‌روز شد ✅');
//    }
//
//    public function destroy($id)
//    {
//        $banner = Banners::findOrFail($id);
//
//        if ($banner->image_path) {
//            $imagePath = public_path('storage/' . $banner->image_path);
//            if (file_exists($imagePath)) {
//                unlink($imagePath);
//            }
//        }
//
//        $banner->delete();
//
//        return redirect()->back()->with('success', 'بنر با موفقیت حذف شد ❌');
//    }
//}


namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $editingBanner = null;
        if ($request->has('edit_id')) {
            $editingBanner = Banners::find($request->edit_id);
        }

        $banners = Banners::orderBy('position', 'asc')->get();
        return view('admin.pages.banners', compact('banners', 'editingBanner'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'url' => 'nullable|url',
            'image_path' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'position' => 'nullable|integer',
        ]);

        $banner = new Banners();
        $banner->title = $request->title;
        $banner->url = $request->url;
        $banner->is_active = $request->has('is_active');
        $banner->position = $request->position ?? 0;

        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $filename = time() . '-' . Str::slug($request->title ?? 'banner') . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('storage/banners');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $banner->image_path = 'storage/banners/' . $filename;
        }

        $banner->save();

        // ✅ پاک کردن کش برای نمایش فوری در فروشگاه
        Cache::forget('banners');
        Cache::forget('banners_middle');

        return redirect()->back()->with('success', 'بنر با موفقیت اضافه شد ✅');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'url' => 'nullable|url',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'position' => 'nullable|integer',
        ]);

        $banner = Banners::findOrFail($id);
        $banner->title = $request->title;
        $banner->url = $request->url;
        $banner->is_active = $request->has('is_active');
        $banner->position = $request->position ?? $banner->position;

        if ($request->hasFile('image_path')) {
            if ($banner->image_path) {
                $oldImagePath = public_path('storage/' . $banner->image_path);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $file = $request->file('image_path');
            $filename = time() . '-' . Str::slug($request->title ?? 'banner') . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('storage/banners');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            // ✅ تصحیح مسیر — باید مثل store باشه
            $banner->image_path = 'storage/banners/' . $filename;
        }

        $banner->save();

        // ✅ پاک کردن کش
        Cache::forget('banners');
        Cache::forget('banners_middle');

        return redirect()->route('admin.banners.index')->with('success', 'بنر با موفقیت به‌روز شد ✅');
    }

    public function destroy($id)
    {
        $banner = Banners::findOrFail($id);

        if ($banner->image_path) {
            $imagePath = public_path('storage/' . $banner->image_path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $banner->delete();

        // ✅ پاک کردن کش
        Cache::forget('banners');
        Cache::forget('banners_middle');

        return redirect()->back()->with('success', 'بنر با موفقیت حذف شد ❌');
    }
}
