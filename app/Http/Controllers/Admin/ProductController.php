<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
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
        $product = Products::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }
    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('admin.pages.ecommerce_products_edit', compact('product'));
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
