<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::latest()->get();
        return view('admin.pages.colors', compact('colors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'code' => 'required|string',
        ]);

        Color::create($request->only(['name', 'code']));

        return redirect()->route('admin.colors.index')->with('success', 'رنگ جدید اضافه شد.');
    }

    public function edit($id)
    {
        $editColor = Color::findOrFail($id);
        $colors = Color::latest()->get();

        return view('admin.pages.colors', compact('colors', 'editColor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'code' => 'required|string',
        ]);

        $color = Color::findOrFail($id);
        $color->update($request->only(['name', 'code']));

        return redirect()->route('admin.colors.index')->with('success', 'رنگ با موفقیت ویرایش شد.');
    }

    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();

        return redirect()->route('admin.colors.index')->with('success', 'رنگ حذف شد.');
    }
}
