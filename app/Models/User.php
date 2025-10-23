<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'family',
        'email',
        'phone',
        'avatar',
        'password',
        'address',
        'role',
        'cart',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'cart' => 'array',
        'is_active' => 'boolean',
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    // روابط
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function loginPhones()
    {
        return $this->hasMany(LoginPhone::class, 'phone_number', 'phone');
    }

    // متدهای کمکی
    public function getFullNameAttribute()
    {
        return trim($this->name . ' ' . $this->family);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isSeller()
    {
        return $this->role === 'seller';
    }
}
