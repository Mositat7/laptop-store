<?php

namespace Database\Seeders;

use App\Models\MainCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'موبایل',
                'slug' => 'mobile',
                'icon' => '📱',
                'order' => 1
            ],
            [
                'name' => 'لپ تاپ',
                'slug' => 'laptop',
                'icon' => '💻',
                'order' => 2
            ],
            [
                'name' => 'کنسول بازی',
                'slug' => 'gaming',
                'icon' => '🎮',
                'order' => 3
            ],
            [
                'name' => 'ساعت هوشمند',
                'slug' => 'smart-watch',
                'icon' => '⌚',
                'order' => 4
            ],
            [
                'name' => 'هدفون و هندزفری',
                'slug' => 'audio',
                'icon' => '🎧',
                'order' => 5
            ],
        ];
        foreach ($categories as $category) {
            MainCategory::updateOrCreate(
                ['slug' => $category['slug']], // شرط جستجو
                $category // داده‌هایی که می‌خواهید آپدیت یا ایجاد کنید
            );
        }
    }
}
