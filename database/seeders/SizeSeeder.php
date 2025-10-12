<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run()
    {
        $sizes = [
            ['name' => 'کوچک', 'description' => 'سایز کوچک'],
            ['name' => 'متوسط', 'description' => 'سایز متوسط'],
            ['name' => 'بزرگ', 'description' => 'سایز بزرگ'],
            ['name' => 'خیلی بزرگ', 'description' => 'سایز خیلی بزرگ'],
            ['name' => '38', 'description' => 'سایز 38'],
            ['name' => '40', 'description' => 'سایز 40'],
            ['name' => '42', 'description' => 'سایز 42'],
            ['name' => '44', 'description' => 'سایز 44'],
            ['name' => '13 اینچ', 'description' => 'سایز 13 اینچ'],
            ['name' => '15 اینچ', 'description' => 'سایز 15 اینچ'],
            ['name' => '17 اینچ', 'description' => 'سایز 17 اینچ'],
        ];

        foreach ($sizes as $size) {
            Size::firstOrCreate(
                ['name' => $size['name']],
                $size
            );
        }
    }
}
