<?php
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = true;
    use HasFactory;
    protected $fillable = [
        'user_id', 'order_number', 'first_name', 'last_name',
        'email', 'phone', 'postal_code', 'address_1', 'address_2',
        'shipping_method', 'subtotal', 'shipping_cost', 'tax', 'total',
        'status', 'notes',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
