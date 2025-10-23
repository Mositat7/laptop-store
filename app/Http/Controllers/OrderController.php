<?php
// app/Http/Controllers/OrderController.php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
public function store(Request $request)
{
$request->validate([
'address_id' => 'required|exists:addresses,id',
'shipping_method' => 'required|string',
]);

$user = Auth::user();

// جمع مبلغ سبد خرید (مثلاً از session یا جدول carts)
$cartItems = session('cart', []);
$subtotal = collect($cartItems)->sum(fn($item) => $item['price'] * $item['quantity']);
$shipping = 30000;
$tax = 0;
$total = $subtotal + $shipping + $tax;

$order = Order::create([
'user_id' => $user->id,
'order_number' => strtoupper(Str::random(10)),
'first_name' => $user->name,
'last_name'  => $user->family,
'phone'      => $user->phone,
'address_1'  => $user->address,
'shipping_method' => $request->shipping_method,
'subtotal' => $subtotal,
'shipping_cost' => $shipping,
'tax' => $tax,
'total' => $total,
'status' => 'pending',
]);

foreach ($cartItems as $item) {
OrderItem::create([
'order_id' => $order->id,
'product_id' => $item['id'],
'product_name' => $item['title'],
'quantity' => $item['quantity'],
'price' => $item['price'],
'options' => json_encode($item['options'] ?? []),
]);
}

session()->forget('cart');

return redirect()->route('orders.show', $order->id)
->with('success', 'سفارش شما با موفقیت ثبت شد.');
}
}
