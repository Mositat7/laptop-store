<?php
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'first_name',
        'last_name',
        'email',
        'phone',
        'postal_code',
        'address_1',
        'address_2',
        'shipping_method',
        'subtotal',
        'shipping_cost',
        'tax',
        'total',
        'status',
        'notes',
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'shipping_cost' => 'decimal:2',
        'tax' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    // روابط
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // متدهای کمکی
    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }

    public function canBeCancelled()
    {
        return in_array($this->status, ['pending', 'processing']);
    }
}
