<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image'
    ];

//    /**
//     * دسترسی به URL کامل عکس
//     */
//    public function getImageUrlAttribute()
//    {
//        return $this->image ? asset($this->image) : null;
//    }
////    /**
//     * دسترسی به URL کامل عکس
//     */
    public function getImageUrlAttribute()
    {
        return $this->image ? asset($this->image) : null;
    }

    /**
     * رابطه با محصولات
     */
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }

    /**
     * رابطه با زیردسته‌ها - اگر parent_id دارید
     */
    public function children()
    {
        return $this->hasMany(categories::class, 'parent_id');
    }

    /**
     * رابطه با والد - اگر parent_id دارید
     */
    public function parent()
    {
        return $this->belongsTo(categories::class, 'parent_id');
    }
}
