<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        BlogPost::truncate();

        $posts = [
            [
                'title' => 'بهترین کیبورد بازار برای گیم و برنامه نویسی چی پیشنهاد میشه؟',
                'slug' => 'best-keyboard-for-gaming-and-programming',
                'short_description' => 'بررسی کامل بهترین کیبوردهای بازار برای گیمرها و برنامه نویسان',
                'content' => '<p>محتوا کامل مقاله...</p>',
                'image' => 'blog/keybl.jpg',
                'publish_date' => '2025-05-09',
                'blog_category_id' => 1,
                'reading_time' => 8,
                'is_featured' => true,

            ],
            [
                'title' => 'این ابزار لازمت میشه !',
                'slug' => 'essential-tools-you-need',
                'short_description' => 'معرفی ابزارهای ضروری برای کار با کامپیوتر',
                'content' => '<p>محتوا کامل مقاله...</p>',
                'image' => 'blog/2.png',
                'publish_date' => '2025-05-09',
                'blog_category_id' => 2,
                'reading_time' => 6,
                'is_featured' => true,
            ],
            [
                'title' => 'سلر استارز های ایران',
                'slug' => 'seller-stars-of-iran',
                'short_description' => 'معرفی بهترین فروشندگان و برندهای ایرانی',
                'content' => '<p>محتوا کامل مقاله...</p>',
                'image' => 'blog/3.png',
                'publish_date' => '2025-05-09',
                'blog_category_id' => 1,
                'reading_time' => 7,
                'is_featured' => true,
            ],
            [
                'title' => 'بررسی گوشی پیکسل گوگل - آیا ارزش خرید داره یا نه؟',
                'slug' => 'google-pixel-phone-review',
                'short_description' => 'بررسی کامل گوشی پیکسل گوگل و مقایسه با رقبا',
                'content' => '<p>محتوا کامل مقاله...</p>',
                'image' => 'blog/4.png',
                'publish_date' => '2025-05-09',
                'blog_category_id' => 2,
                'reading_time' => 10,
                'is_featured' => true,
            ],
            [
                'title' => 'راهنمای خرید لپ تاپ برای دانشجویان',
                'slug' => 'laptop-buying-guide-for-students',
                'short_description' => 'چگونه بهترین لپ تاپ را با بودجه دانشجویی انتخاب کنیم',
                'content' => '<p>محتوا کامل مقاله...</p>',
                'image' => 'blog/2.png',
                'publish_date' => '2025-05-09',
                'blog_category_id' => 3,
                'reading_time' => 9,
                'is_featured' => true,
            ]
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
