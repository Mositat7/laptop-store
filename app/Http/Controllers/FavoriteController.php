<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    // صفحه محصولات لایک شده
    public function index()
    {
        $user = Auth::user();
        $favorites = Favorite::with('product') // رابطه product باید تو مدل Favorite تعریف باشه
        ->where('user_id', $user->id)
            ->get();

        return view('project.profile-favorites', compact('favorites'));
    }

    // تغییر وضعیت علاقه‌مندی
    public function toggle($productId)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        $favorite = Favorite::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if ($favorite) {
            $favorite->delete();
            return response()->json(['status' => 'removed']);
        } else {
            Favorite::create([
                'user_id' => $user->id,
                'product_id' => $productId
            ]);
            return response()->json(['status' => 'added']);
        }
    }
}
