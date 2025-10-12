<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code'];

    /**
     * رابطه با محصولات - با مشخص کردن دقیق نام‌ها
     */
    public function products()
    {
        return $this->belongsToMany(
            Products::class,
            'product_color', // نام جدول میانی
            'color_id',      // فیلد مربوط به رنگ
            'product_id'     // فیلد مربوط به محصول
        );
    }
}
