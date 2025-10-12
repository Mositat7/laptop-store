<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    public function run()
    {
        $colors = [
            ['name' => 'مشکی', 'code' => '#000000'],
            ['name' => 'سفید', 'code' => '#FFFFFF'],
            ['name' => 'نقره‌ای', 'code' => '#C0C0C0'],
            ['name' => 'طلایی', 'code' => '#FFD700'],
            ['name' => 'آبی', 'code' => '#0000FF'],
            ['name' => 'قرمز', 'code' => '#FF0000'],
            ['name' => 'سبز', 'code' => '#008000'],
            ['name' => 'صورتی', 'code' => '#FFC0CB'],
            ['name' => 'بنفش', 'code' => '#800080'],
            ['name' => 'نارنجی', 'code' => '#FFA500'],
            ['name' => 'قهوه‌ای', 'code' => '#8B4513'],
            ['name' => 'طوسی', 'code' => '#808080'],
        ];

        foreach ($colors as $color) {
            Color::firstOrCreate(
                ['name' => $color['name']],
                $color
            );
        }
    }
}
