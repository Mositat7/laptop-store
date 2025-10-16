<?php
// app/Models/CartItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price',
        'options',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'options' => 'array',
    ];

    // روابط
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    // متدهای کمکی
    public function getTotalAttribute()
    {
        return $this->price * $this->quantity;
    }
}
