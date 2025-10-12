<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->delete();

        DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'هدفون',
                'slug' => 'head-phone',
                'image' => 'storage/categories/1.webp',
                'created_at' => '2025-07-27 14:42:08',
                'updated_at' => '2025-07-27 14:42:08',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'ساعت هوشمند',
                'slug' => 'smart-watch',
                'image' => 'storage/categories/2.webp',
                'created_at' => '2025-07-27 14:42:08',
                'updated_at' => '2025-07-27 14:42:08',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'کنسول بازی',
                'slug' => 'Game-console',
                'image' => 'storage/categories/3.webp',
                'created_at' => '2025-07-27 14:42:08',
                'updated_at' => '2025-07-27 14:42:08',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'لپتاپ',
                'slug' => 'laptop',
                'image' => 'storage/categories/4.webp',
                'created_at' => '2025-07-27 14:42:08',
                'updated_at' => '2025-07-27 14:42:08',
            ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'هنذفری',
                    'slug' => 'Hanzofari',
                    'image' => 'storage/categories/5.webp',
                    'created_at' => '2025-07-27 14:42:08',
                    'updated_at' => '2025-07-27 14:42:08',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'مودم',
                    'slug' => 'modem',
                    'image' => 'storage/categories/7.webp',
                    'created_at' => '2025-07-27 14:42:08',
                    'updated_at' => '2025-07-27 14:42:08',
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'شارژر هوشمند',
                    'slug' => 'Smart charger',
                    'image' => 'storage/categories/8.webp',
                    'created_at' => '2025-07-27 14:42:08',
                    'updated_at' => '2025-07-27 14:42:08',
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'اسپیکر',
                    'slug' => 'spicker',
                    'image' => 'storage/categories/9.webp',
                    'created_at' => '2025-07-27 14:42:08',
                    'updated_at' => '2025-07-27 14:42:08',
                ),

        ));


    }
}
