<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners_middle extends Model
{
    use HasFactory;

    // مشخص کردن نام جدول
    protected $table = 'banners_middle';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'link',
        'description',
        'is_active',
        'order',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    public function getImageUrlAttribute()
    {
        if (filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image;
        }

        if (str_starts_with($this->image, 'http')) {
            return $this->image;
        }

        return asset('storage/' . $this->image);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function scopeCurrent($query)
    {
        return $query->where(function($q) {
            $q->whereNull('start_date')
                ->orWhere('start_date', '<=', now());
        })->where(function($q) {
            $q->whereNull('end_date')
                ->orWhere('end_date', '>=', now());
        });
    }
}
