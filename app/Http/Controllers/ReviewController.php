<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Review; // ✅ اضافه شد
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ✅ اضافه شد
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating'     => 'required|integer|min:1|max:5',
            'comment'    => 'nullable|string|max:1000',
            'recommend'  => 'required|boolean',
        ]);

        if (!Auth::check()) {
            return response()->json(['error' => 'برای ثبت نظر باید وارد حساب کاربری شوید.'], 401);
        }

        Review::create([
            'product_id' => $request->product_id,
            'user_id'    => Auth::id(),
            'rating'     => $request->rating,
            'comment'    => $request->comment,
            'recommend'  => $request->recommend,
        ]);

        $product = Products::findOrFail($request->product_id);

// میانگین امتیاز و تعداد نظرات مثبت
        $avgRating = $product->reviews()->avg('rating');
        $totalReviews = $product->reviews()->count();
        $recommendCount = $product->reviews()->where('recommend', 1)->count();

        $product->update([
            'reviews_count' => $totalReviews,
            'rating'        => round($avgRating, 1),
        ]);

        return response()->json([
            'success'           => true,
            'message'           => 'نظر شما با موفقیت ثبت شد.',
            'reviews_count'     => $totalReviews,
            'rating'            => number_format($product->rating, 1),
            'recommend_percent' => $totalReviews ? round($recommendCount / $totalReviews * 100) : 0,
        ]);
//        $product = Products::findOrFail($request->product_id);
//        $avgRating = $product->reviews()->avg('rating');
//
//        $product->update([
//            'reviews_count' => $product->reviews_count + 1,
//            'rating'        => round($avgRating, 1),
//        ]);
//
//        return response()->json([
//            'success'       => true,
//            'message'       => 'نظر شما با موفقیت ثبت شد.',
//            'reviews_count' => $product->fresh()->reviews_count,
//            'rating'        => number_format($product->fresh()->rating, 1),
//        ]);
    }
}
