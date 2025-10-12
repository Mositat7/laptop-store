<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_path',
        'url',
        'position',
        'is_active',
    ];


    protected $casts = [
        'is_active' => 'boolean'
    ];

    /**
     * اسکوپ برای بنرهای فعال
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * اسکوپ برای بنرهای موقعیت خاص
     */
    public function scopePosition($query, $position)
    {
        return $query->where('position', $position);
    }

    /**
     * اسکوپ برای مرتب سازی بر اساس موقعیت
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('position');
    }

    /**
     * دسترسی به URL کامل عکس
     */
    public function getImageUrlAttribute()
    {
        return asset($this->image_path);
    }
}
