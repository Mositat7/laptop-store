<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::orderByDesc('id')->get();
        return view('admin.pages.sizes', compact('sizes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->has('is_active'); // 👈 تبدیل تیک به true یا false

        Size::create($validated);

        return back()->with('success', 'سایز با موفقیت اضافه شد!');
    }

    public function update(Request $request, $id)
    {
        $size = Size::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->has('is_active'); // 👈 همین کار اینجا هم

        $size->update($validated);

        return back()->with('success', 'سایز با موفقیت ویرایش شد!');
    }

    public function destroy($id)
    {
        Size::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'سایز حذف شد.');
    }
}
