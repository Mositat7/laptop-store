<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'image',
        'author',
        'publish_date',
        'views',
        'reading_time',
        'is_published',
        'is_featured',
        'meta_title',
        'blog_category_id',
        'meta_description'
    ];

    protected $casts = [
        'publish_date' => 'date',
        'is_published' => 'boolean',
        'is_featured' => 'boolean'
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('publish_date', 'desc');
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
}
