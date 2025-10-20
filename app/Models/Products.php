<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'title', 'slug', 'short_description', 'description',
        'brand', 'cpu', 'gpu', 'ram', 'storage', 'display', 'battery',
        'price', 'discount_price', 'stock', 'is_active', 'is_featured','brand_id',
        'main_image', 'gallery', 'rating', 'reviews_count', 'sales_count', 'category_id'
    ];

    protected $casts = [
        'gallery' => 'array',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    /**
     * رابطه با برند
     */
    public function brand()
    {
        return $this->belongsTo(\App\Models\Brands::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Categories::class, 'category_id');
    }

    /**
     * رابطه با رنگ‌ها
     */
    public function colors()
    {
        return $this->belongsToMany(
            Color::class,
            'product_color',
            'product_id',
            'color_id'
        );
    }

    /**
     * رابطه با سایزها
     */
    public function sizes()
    {
        return $this->belongsToMany(
            Size::class,
            'product_size',
            'product_id',
            'size_id'
        );
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }

}
