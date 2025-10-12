<?php

namespace Database\Seeders;

use App\Models\Banners_middle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    public function run()
    {
        Banners_middle::truncate();  // اصلاح شد

        Banners_middle::create([  // اصلاح شد
            'title' => 'بنر ویژه شماره 1',
            'slug' => 'banner-1',
            'image' => 'banners_middle/1.webp',
            'link' => '/products?category=electronics',
            'description' => 'بنر تبلیغاتی محصولات الکترونیکی',
            'is_active' => true,
            'order' => 1,
            'start_date' => null,
            'end_date' => null,
        ]);

        Banners_middle::create([  // اصلاح شد
            'title' => 'بنر ویژه شماره 2',
            'slug' => 'banner-2',
            'image' => 'banners_middle/2.webp',
            'link' => '/products?category=laptops',
            'description' => 'بنر تبلیغاتی لپ تاپ ها',
            'is_active' => true,
            'order' => 2,
            'start_date' => null,
            'end_date' => null,
        ]);
    }
}
