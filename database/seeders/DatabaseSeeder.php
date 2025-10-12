<?php

namespace Database\Seeders;

use App\Models\Banners_middle;
use App\Models\BlogPost;
use App\Models\Color;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        بلاک
        $this->call([
            BlogCategorySeeder::class,
            BlogPostSeeder::class,


        ]);
//درباره ما
        $this->call([
            AboutsTableSeeder::class,
        ]);

//برندها
        $this->call([
            BrandSeeder::class,
        ]);
//        بنر
        $this->call([
            BannerSeeder::class,
        ]);

        // اطلاعات پایه
        $this->call([
            MainCategorySeeder::class,
            CategoriesTableSeeder::class,
        ]);

// محصولات و موجودی
        $this->call([
            ProductSeeder::class,
        ]);

// محتوا و پشتیبانی
        $this->call([
            AboutsTableSeeder::class,
            ContactInfoSeeder::class,
        ]);

// سایر
        $this->call([
            ColorSeeder::class,
            SizeSeeder::class,
        ]);
    }
}
