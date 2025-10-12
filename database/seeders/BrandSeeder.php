<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            ['name' => 'شیائومی', 'slug' => 'xiaomi', 'logo' => 'brands/1.png', 'order' => 1],
            ['name' => 'سامسونگ', 'slug' => 'samsung', 'logo' => 'brands/2.jpg', 'order' => 2],
            ['name' => 'ونک', 'slug' => 'venk', 'logo' => 'brands/3.jpg', 'order' => 3],
            ['name' => 'تسکو', 'slug' => 'tsco', 'logo' => 'brands/4.png', 'order' => 4],
            ['name' => 'آنکر', 'slug' => 'anker', 'logo' => 'brands/5.png', 'order' => 5],
            ['name' => 'شهر گلس', 'slug' => 'shahr-glass', 'logo' => 'brands/6.jpg', 'order' => 6],
            ['name' => 'بادیگار', 'slug' => 'badigar', 'logo' => 'brands/7.jpg', 'order' => 7],
            ['name' => 'سامورائی', 'slug' => 'samurai', 'logo' => 'brands/8.png', 'order' => 8],
            ['name' => 'گلس استار', 'slug' => 'glass-star', 'logo' => 'brands/9.png', 'order' => 9],
            ['name' => 'آنکر', 'slug' => 'anker-2', 'logo' => 'brands/10.png', 'order' => 10],
            ['name' => 'کاملیون', 'slug' => 'chameleon', 'logo' => 'brands/11.png', 'order' => 11],
            ['name' => 'راینو', 'slug' => 'rhino', 'logo' => 'brands/12.png', 'order' => 12],
            ['name' => 'گارد تک', 'slug' => 'guard-tech', 'logo' => 'brands/13.jpg', 'order' => 13],
        ];

        foreach ($brands as $brand) {
            Brands::firstOrCreate(
                ['slug' => $brand['slug']],
                $brand
            );
        }
    }
}
