<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'جدیدترین ها',
                'slug' => 'latest',
                'icon' => '📰',
                'order' => 1
            ],
            [
                'name' => 'تکنولوژی و کالای دیجیتال',
                'slug' => 'technology',
                'icon' => '💻',
                'order' => 2
            ],
            [
                'name' => 'بازی و سرگرمی',
                'slug' => 'gaming',
                'icon' => '🎮',
                'order' => 3
            ],
            [
                'name' => 'کتاب و ادبیات',
                'slug' => 'books',
                'icon' => '📚',
                'order' => 4
            ],
            [
                'name' => 'فیلم و سریال',
                'slug' => 'movies',
                'icon' => '🎬',
                'order' => 5
            ],
            [
                'name' => 'سبک زندگی',
                'slug' => 'lifestyle',
                'icon' => '🌟',
                'order' => 6
            ]
        ];

        foreach ($categories as $category) {
            BlogCategory::firstOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
