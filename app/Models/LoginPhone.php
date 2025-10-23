<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginPhone extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'otp_code',
        'is_verified',
        'otp_expires_at',
        'attempts',
    ];

    protected $casts = [
        'is_verified' => 'boolean',
        'otp_expires_at' => 'datetime',
    ];

    // اسکوپ برای OTP های معتبر
    public function scopeValid($query)
    {
        return $query->where('is_verified', false)
            ->where('otp_expires_at', '>', now())
            ->where('attempts', '<', 5);
    }

    // متدهای کمکی
    public function isExpired()
    {
        return $this->otp_expires_at && $this->otp_expires_at->lt(now());
    }

    public function incrementAttempts()
    {
        $this->increment('attempts');
    }
}
