<?php


namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\SendType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $cartItems = CartItem::where('user_id', $user->id)->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('home')->with('warning', 'سبد خرید شما خالی است.');
        }

        $totalPrice = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
        $sendTypes = SendType::all();
        $shippingCost = $sendTypes->first()?->price ?? 0;
        $finalPrice = $totalPrice + $shippingCost;

        // ❌ دیگر آدرس، استان، شهر از دیتابیس لود نمی‌شن
        // فقط اطلاعات کاربر برای پر کردن فیلدهای پیش‌فرض (مثل نام و تلفن)

        return view('project.checkout', compact(
            'sendTypes',
            'totalPrice',
            'shippingCost',
            'finalPrice'
        ));
    }
    public function selectAddress(Request $request)
    {
        $request->validate(['address_id' => 'required|exists:addresses,id']);
        session(['selected_address_id' => $request->address_id]);

        return back()->with('success', 'آدرس با موفقیت انتخاب شد.');
    }
    public function payment(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string', // این همان آدرس کامل است
            'phone' => 'required|string',
            'postal_code' => 'nullable|string',
            'note' => 'nullable|string',
            'send_type' => 'required|exists:send_types,id',
        ]);

        $user = Auth::user();
        $cartItems = CartItem::where('user_id', $user->id)->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('home')->with('warning', 'سبد خرید شما خالی است.');
        }

        $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

        // دریافت هزینه ارسال از دیتابیس
        $sendType = SendType::findOrFail($request->send_type);
        $shippingCost = $sendType->price;

        // ترکیب آدرس برای ذخیره در address_1
        $fullAddressForOrder = implode('، ', array_filter([
            $request->province,
            $request->city,
            $request->address,
        ]));

        $order = Order::create([
            'user_id' => $user->id,
            'order_number' => 'ORD-' . now()->format('YmdHis'),
            'subtotal' => $total,
            'shipping_cost' => $shippingCost,
            'total' => $total + $shippingCost,
            'status' => 'pending',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $user->email, // اگر email در مدل کاربر وجود دارد
            'phone' => $request->phone,
            'postal_code' => $request->postal_code,
            'address_1' => $fullAddressForOrder, // ✅ تمام آدرس در یک فیلد
            'address_2' => null, // یا اگر نیاز بود، بخش دوم آدرس
            'shipping_method' => $sendType->name, // ✅ ذخیره نام نوع ارسال
            'notes' => $request->note, // ✅ توجه: در جدول شما 'notes' است، نه 'note'
            'tax' => 0, // یا محاسبه مالیات اگر نیاز بود
        ]);

        // ذخیره آیتم‌های سفارش
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'product_name' => $item->product->title,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        // خالی کردن سبد خرید
        CartItem::where('user_id', $user->id)->delete();

        return redirect()->route('checkout.complete', $order->id);
    }
    public function complete(Order $order)
    {
        return view('project.checkout-complete', compact('order'));
    }

    private function database()
    {
    }
}
