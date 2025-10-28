<?php
namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart()
    {
        $cartData = $this->getCartData();
        return view('project.cart', [
            'cartItems' => $cartData['items'],
            'totalPrice' => $cartData['total_price'],
            'totalItems' => $cartData['total_items']
        ]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:cart_items,id,user_id,' . auth()->id(),
            'quantity' => 'required|integer|min:1'
        ]);

        $item = CartItem::findOrFail($request->cart_id);
        if ($request->quantity > $item->product->stock) {
            return response()->json(['success' => false, 'message' => 'موجودی کافی نیست.']);
        }

        $item->update(['quantity' => $request->quantity]);

        // اطلاعات کامل سبد خرید برای بازگشت
        $cartData = $this->getCartData();

        return response()->json([
            'success' => true,
            'total_items' => $cartData['total_items'],
            'cart_items' => $cartData['items'],
            'total_price' => $cartData['total_price']
        ]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $user = Auth::user();
        $product = Products::findOrFail($request->product_id);

        if ($request->quantity > $product->stock) {
            return response()->json([
                'success' => false,
                'message' => 'موجودی کافی نیست.'
            ]);
        }

        // بررسی اینکه قبلاً در سبد بوده یا نه
        $cartItem = CartItem::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            // اگر وجود داشت، تعداد را بروزرسانی کن
            $newQty = $cartItem->quantity + $request->quantity;
            if ($newQty > $product->stock) {
                return response()->json([
                    'success' => false,
                    'message' => 'موجودی کافی نیست.'
                ]);
            }
            $cartItem->quantity = $newQty;
            $cartItem->save();
        } else {
            // اگر نبود، جدید ایجاد کن
            CartItem::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $request->quantity
            ]);
        }

        // اطلاعات کامل سبد خرید برای بازگشت
        $cartData = $this->getCartData();

        return response()->json([
            'success' => true,
            'message' => 'محصول به سبد خرید اضافه شد',
            'cart_count' => $cartData['total_items'],
            'cart_items' => $cartData['items'],
            'total_items' => $cartData['total_items'],
            'total_price' => $cartData['total_price']
        ]);
    }

    /**
     * دریافت اطلاعات سبد خرید کاربر
     */
    private function getCartData()
    {
        $cartItems = CartItem::with('product')
            ->where('user_id', Auth::id())
            ->get();

        $items = $cartItems->map(function ($item) {
            return [
                'id' => $item->id,
                'quantity' => $item->quantity,
                'product_name' => $item->product->title, // اگر فیلد name ندارید از title استفاده کنید
                'product_slug' => $item->product->slug,
                'product_price' => $item->product->price,
                'product_image' => asset($item->product->main_image ?? 'assets/image/placeholder.webp')
            ];
        });

        return [
            'items' => $items,
            'total_items' => $cartItems->sum('quantity'),
            'total_price' => $cartItems->sum(fn($item) => $item->product->price * $item->quantity)
        ];
    }

    /**
     * حذف از سبد خرید
     */
    public function removeFromCart(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:cart_items,id,user_id,' . auth()->id()
        ]);

        CartItem::where('id', $request->cart_id)
            ->where('user_id', auth()->id())
            ->delete();

        $cartData = $this->getCartData();

        return response()->json([
            'success' => true,
            'cart_count' => $cartData['total_items'],
            'cart_items' => $cartData['items'],
            'total_items' => $cartData['total_items'],
            'total_price' => $cartData['total_price']
        ]);
    }
}
