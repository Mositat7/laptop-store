<?php
////
////namespace Database\Seeders;
////
////use Illuminate\Database\Console\Seeds\WithoutModelEvents;
////use Illuminate\Database\Seeder;
////use Illuminate\Support\Facades\DB;
////
////class ProductSeeder extends Seeder
////{
////    /**
////     * Run the database seeds.
////     */
////    public function run()
////    {
////        $products = [
////            [
////                'title' => 'Lap Top Lenovo Laser 107W',
////                'slug' => 'lap-top-lenovo-laser-107w',
////                'short_description' => 'لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی',
////                'price' => 17270000,
////                'discount_price'=>1700000,
////                'rating' => 4.4,
////                'reviews_count' => 72,
////                'stock' => 5,
////                'main_image' => 'assets/image/products/1.webp',
////                'gallery' => json_encode([
////                    'assets/image/products/1.webp',
////                    'assets/image/products/2.webp',
////                    'assets/image/products/3.webp'
////                ]),
////                'color' => json_encode([
////                    '#27272a', // bg-zinc-800
////                    '#71717a', // bg-zinc-500
////                    '#d4d4d8', // bg-zinc-300
////                ]),
////                'brand_id' => '1',
////                'is_featured' => true,
////                'created_at' => now(),
////                'updated_at' => now(),
////            ],
////            // بقیه محصولات مشابه با تصویر متفاوت
////            [
////                'title' => 'Lap Top Lenovo Laser 107W',
////                'slug' => 'lap-top-lenovo-laser-107w-2',
////                'short_description' => 'لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی',
////                'price' => 17270000,
////                'discount_price'=>1700000,
////                'rating' => 4.4,
////                'reviews_count' => 72,
////                'stock' => 5,
////                'main_image' => 'assets/image/products/2.webp',
////                'gallery' => json_encode([
////                    'assets/image/products/2.webp',
////                    'assets/image/products/3.webp',
////                    'assets/image/products/4.webp'
////                ]),
////                'color' => json_encode(['#27272a','#71717a','#d4d4d8']),
////                'brand_id' => '2',
////                'is_featured' => true,
////                'created_at' => now(),
////                'updated_at' => now(),
////            ],
////            [
////                'title' => 'Lap Top Lenovo Laser 107W',
////                'slug' => 'lap-top-lenovo-laser-107w-3',
////                'short_description' => 'لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی',
////                'price' => 17270000,
////                'discount_price'=>1700000,
////                'rating' => 4.4,
////                'reviews_count' => 72,
////                'stock' => 5,
////                'main_image' => 'assets/image/products/3.webp',
////                'gallery' => json_encode([
////                    'assets/image/products/3.webp',
////                    'assets/image/products/4.webp',
////                    'assets/image/products/5.webp'
////                ]),
////                'color' => json_encode(['#27272a','#71717a','#d4d4d8']),
////                'brand_id' => '2',
////                'is_featured' => true,
////                'created_at' => now(),
////                'updated_at' => now(),
////            ],
////            [
////                'title' => 'Lap Top Lenovo Laser 107W',
////                'slug' => 'lap-top-lenovo-laser-107w-4',
////                'short_description' => 'لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی',
////                'price' => 17270000,
////                'discount_price'=>1700000,
////                'rating' => 4.4,
////                'reviews_count' => 72,
////                'stock' => 5,
////                'main_image' => 'assets/image/products/4.webp',
////                'gallery' => json_encode([
////                    'assets/image/products/4.webp',
////                    'assets/image/products/5.webp',
////                    'assets/image/products/6.webp'
////                ]),
////                'color' => json_encode(['#27272a','#71717a','#d4d4d8']),
////                'brand_id' => '1',
////                'is_featured' => true,
////                'created_at' => now(),
////                'updated_at' => now(),
////            ],
////            [
////                'title' => 'Lap Top Lenovo Laser 107W',
////                'slug' => 'lap-top-lenovo-laser-107w-5',
////                'short_description' => 'لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی',
////                'price' => 17270000,
////                'discount_price'=>1700000,
////                'rating' => 4.4,
////                'reviews_count' => 72,
////                'stock' => 5,
////                'main_image' => 'assets/image/products/5.webp',
////                'gallery' => json_encode([
////                    'assets/image/products/5.webp',
////                    'assets/image/products/6.webp',
////                    'assets/image/products/7.webp'
////                ]),
////                'color' => json_encode(['#27272a','#71717a','#d4d4d8']),
////                'brand_id' => '1',
////                'is_featured' => true,
////                'created_at' => now(),
////                'updated_at' => now(),
////            ],
////            [
////                'title' => 'Lap Top Lenovo Laser 107W',
////                'slug' => 'lap-top-lenovo-laser-107w-6',
////                'short_description' => 'لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی',
////                'price' => 17270000,
////                'discount_price'=>1700000,
////                'rating' => 4.4,
////                'reviews_count' => 72,
////                'stock' => 5,
////                'main_image' => 'assets/image/products/6.webp',
////                'gallery' => json_encode([
////                    'assets/image/products/6.webp',
////                    'assets/image/products/7.webp',
////                    'assets/image/products/8.webp'
////                ]),
////                'color' => json_encode(['#27272a','#71717a','#d4d4d8']),
////                'brand_id' => '1',
////                'is_featured' => true,
////                'created_at' => now(),
////                'updated_at' => now(),
////            ],
////            [
////                'title' => 'Lap Top Lenovo Laser 107W',
////                'slug' => 'lap-top-lenovo-laser-107w-7',
////                'short_description' => 'لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی',
////                'price' => 17270000,
////                'discount_price'=>1700000,
////                'rating' => 4.4,
////                'reviews_count' => 72,
////                'stock' => 5,
////                'main_image' => 'assets/image/products/7.webp',
////                'gallery' => json_encode([
////                    'assets/image/products/7.webp',
////                    'assets/image/products/8.webp',
////                    'assets/image/products/9.webp'
////                ]),
////                'color' => json_encode(['#27272a','#71717a','#d4d4d8']),
////                'brand_id' => '1',
////                'is_featured' => true,
////                'created_at' => now(),
////                'updated_at' => now(),
////            ],
////        ];
////
////        DB::table('products')->insert($products);
////    }
////}
//
//namespace Database\Seeders;
//
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
//use App\Models\Products; // استفاده از Products
//use App\Models\Color;
//use App\Models\Size;
//
//class ProductSeeder extends Seeder
//{
//    public function run()
//    {
//        // غیرفعال کردن foreign key constraints
//        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//
//        // پاک کردن داده‌های قبلی
//        DB::table('product_size')->delete();
//        DB::table('product_color')->delete();
//        Products::query()->delete(); // استفاده از Products
//
//        // فعال کردن مجدد foreign key constraints
//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
//
//        // پیدا کردن سایزها
//        $small = Size::firstOrCreate(['name' => 'کوچک'], ['description' => 'سایز کوچک']);
//        $medium = Size::firstOrCreate(['name' => 'متوسط'], ['description' => 'سایز متوسط']);
//        $large = Size::firstOrCreate(['name' => 'بزرگ'], ['description' => 'سایز بزرگ']);
//        $size15 = Size::firstOrCreate(['name' => '15 اینچ'], ['description' => 'سایز 15 اینچ']);
//
//        // پیدا کردن یا ایجاد رنگ‌ها
//        $black = Color::firstOrCreate(
//            ['name' => 'مشکی'],
//            ['code' => '#000000']
//        );
//
//        $white = Color::firstOrCreate(
//            ['name' => 'سفید'],
//            ['code' => '#FFFFFF']
//        );
//
//        $silver = Color::firstOrCreate(
//            ['name' => 'نقره‌ای'],
//            ['code' => '#C0C0C0']
//        );
//
//        $gray = Color::firstOrCreate(
//            ['name' => 'طوسی'],
//            ['code' => '#808080']
//        );
//
//        $products = [
//            [
//                'title' => 'لپ تاپ لنوو مدل Laser 107W',
//                'slug' => 'lap-top-lenovo-laser-107w',
//                'short_description' => 'لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی',
//                'description' => 'لپ تاپ قدرتمند لنوو با پردازنده Core i7، رم 16 گیگابایت و هارد SSD 512 گیگابایت. مناسب برای کارهای گرافیکی و برنامه نویسی.',
//                'price' => 17270000,
//                'discount_price' => 17000000,
//                'rating' => 4.4,
//                'reviews_count' => 72,
//                'stock' => 5,
//                'main_image' => 'assets/image/products/1.webp',
//                'gallery' => json_encode([
//                    'assets/image/products/1.webp',
//                    'assets/image/products/2.webp',
//                    'assets/image/products/3.webp'
//                ]),
//                'brand_id' => 1,
//                'category_id' => 1,
//                'is_featured' => true,
//                'created_at' => now(),
//                'updated_at' => now(),
//                'colors' => [$black->id, $silver->id, $gray->id],
//                'sizes' => [$medium->id, $large->id, $size15->id]
//            ],
//            [
//                'title' => 'لپ تاپ لنوو مدل Laser 107W Pro',
//                'slug' => 'lap-top-lenovo-laser-107w-2',
//                'short_description' => 'لپ تاپ لنوو مدل Laser 107W Pro',
//                'description' => 'لپ تاپ حرفه‌ای لنوو با پردازنده Core i9 و کارت گرافیک اختصاصی.',
//                'price' => 19270000,
//                'discount_price' => 18500000,
//                'rating' => 4.6,
//                'reviews_count' => 45,
//                'stock' => 3,
//                'main_image' => 'assets/image/products/2.webp',
//                'gallery' => json_encode([
//                    'assets/image/products/2.webp',
//                    'assets/image/products/3.webp',
//                    'assets/image/products/4.webp'
//                ]),
//                'brand_id' => 1,
//                'category_id' => 1,
//                'is_featured' => true,
//                'created_at' => now(),
//                'updated_at' => now(),
//                'colors' => [$black->id, $silver->id],
//                'sizes' => [$medium->id, $large->id, $size15->id]
//            ],
//            [
//                'title' => 'لپ تاپ لنوو مدل ThinkPad X1',
//                'slug' => 'lap-top-lenovo-laser-107w-3',
//                'short_description' => 'لپ تاپ لنوو سری ThinkPad X1',
//                'description' => 'لپ تاپ商务 لنوو با طراحی شیک و باتری با دوام.',
//                'price' => 21270000,
//                'discount_price' => 20500000,
//                'rating' => 4.7,
//                'reviews_count' => 89,
//                'stock' => 7,
//                'main_image' => 'assets/image/products/3.webp',
//                'gallery' => json_encode([
//                    'assets/image/products/3.webp',
//                    'assets/image/products/4.webp',
//                    'assets/image/products/5.webp'
//                ]),
//                'brand_id' => 1,
//                'category_id' => 1,
//                'is_featured' => true,
//                'created_at' => now(),
//                'updated_at' => now(),
//                'colors' => [$black->id, $gray->id],
//                'sizes' => [$medium->id, $large->id, $size15->id]
//            ],
//            [
//                'title' => 'لپ تاپ ایسوس مدل ROG',
//                'slug' => 'asus-rog-gaming-laptop',
//                'short_description' => 'لپ تاپ گیمینگ ایسوس سری ROG',
//                'description' => 'لپ تاپ گیمینگ قدرتمند با کارت گرافیک RTX 4060.',
//                'price' => 35270000,
//                'discount_price' => 34000000,
//                'rating' => 4.8,
//                'reviews_count' => 120,
//                'stock' => 4,
//                'main_image' => 'assets/image/products/4.webp',
//                'gallery' => json_encode([
//                    'assets/image/products/4.webp',
//                    'assets/image/products/5.webp',
//                    'assets/image/products/6.webp'
//                ]),
//                'brand_id' => 2,
//                'category_id' => 1,
//                'is_featured' => true,
//                'created_at' => now(),
//                'updated_at' => now(),
//                'colors' => [$black->id, $gray->id],
//                'sizes' => [$medium->id, $large->id, $size15->id]
//            ],
//            [
//                'title' => 'لپ تاپ اپل مک‌بوک پرو',
//                'slug' => 'apple-macbook-pro-m2',
//                'short_description' => 'لپ تاپ اپل مک‌بوک پرو M2',
//                'description' => 'لپ تاپ اپل با چیپ M2 و نمایشگر Retina.',
//                'price' => 55270000,
//                'discount_price' => 54000000,
//                'rating' => 4.9,
//                'reviews_count' => 200,
//                'stock' => 6,
//                'main_image' => 'assets/image/products/5.webp',
//                'gallery' => json_encode([
//                    'assets/image/products/5.webp',
//                    'assets/image/products/6.webp',
//                    'assets/image/products/7.webp'
//                ]),
//                'brand_id' => 3,
//                'category_id' => 1,
//                'is_featured' => true,
//                'created_at' => now(),
//                'updated_at' => now(),
//                'colors' => [$silver->id, $gray->id],
//                'sizes' => [$medium->id, $large->id, $size15->id]
//            ],
//            [
//                'title' => 'لپ تاپ دل مدل XPS',
//                'slug' => 'dell-xps-laptop',
//                'short_description' => 'لپ تاپ دل سری XPS',
//                'description' => 'لپ تاپ دل با نمایشگر 4K و طراحی بی‌حاشیه.',
//                'price' => 28270000,
//                'discount_price' => 27000000,
//                'rating' => 4.5,
//                'reviews_count' => 67,
//                'stock' => 8,
//                'main_image' => 'assets/image/products/6.webp',
//                'gallery' => json_encode([
//                    'assets/image/products/6.webp',
//                    'assets/image/products/7.webp',
//                    'assets/image/products/8.webp'
//                ]),
//                'brand_id' => 4,
//                'category_id' => 1,
//                'is_featured' => true,
//                'created_at' => now(),
//                'updated_at' => now(),
//                'colors' => [$black->id, $silver->id],
//                'sizes' => [$medium->id, $large->id, $size15->id]
//            ],
//            [
//                'title' => 'لپ تاپ اچ پی مدل Spectre',
//                'slug' => 'hp-spectre-laptop',
//                'short_description' => 'لپ تاپ اچ پی سری Spectre',
//                'description' => 'لپ تاپ اچ پی با طراحی لوکس و عملکرد عالی.',
//                'price' => 31270000,
//                'discount_price' => 30000000,
//                'rating' => 4.6,
//                'reviews_count' => 95,
//                'stock' => 5,
//                'main_image' => 'assets/image/products/7.webp',
//                'gallery' => json_encode([
//                    'assets/image/products/7.webp',
//                    'assets/image/products/8.webp',
//                    'assets/image/products/9.webp'
//                ]),
//                'brand_id' => 5,
//                'category_id' => 1,
//                'is_featured' => true,
//                'created_at' => now(),
//                'updated_at' => now(),
//                'colors' => [$black->id, $silver->id],
//                'sizes' => [$medium->id, $large->id, $size15->id]
//            ],
//        ];
//
//        // ایجاد محصولات و اتصال رنگ‌ها
//        foreach ($products as $productData) {
//            $colors = $productData['colors'];
//            $sizes = $productData['sizes'];
//            unset($productData['colors'], $productData['sizes']);
//
//            $product = Products::create($productData); // استفاده از Products
//            $product->colors()->attach($colors);
//            $product->sizes()->attach($sizes);
//        }
//    }
//}


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Color;
use App\Models\Size;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // غیرفعال کردن foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // پاک کردن داده‌های قبلی
        DB::table('product_size')->delete();
        DB::table('product_color')->delete();
        Products::query()->delete();

        // فعال کردن مجدد foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // پیدا کردن سایزها
        $small = Size::firstOrCreate(['name' => 'کوچک'], ['description' => 'سایز کوچک']);
        $medium = Size::firstOrCreate(['name' => 'متوسط'], ['description' => 'سایز متوسط']);
        $large = Size::firstOrCreate(['name' => 'بزرگ'], ['description' => 'سایز بزرگ']);
        $size15 = Size::firstOrCreate(['name' => '15 اینچ'], ['description' => 'سایز 15 اینچ']);

        // پیدا کردن یا ایجاد رنگ‌ها
        $black = Color::firstOrCreate(['name' => 'مشکی'], ['code' => '#000000']);
        $white = Color::firstOrCreate(['name' => 'سفید'], ['code' => '#FFFFFF']);
        $silver = Color::firstOrCreate(['name' => 'نقره‌ای'], ['code' => '#C0C0C0']);
        $gray = Color::firstOrCreate(['name' => 'طوسی'], ['code' => '#808080']);

        $products = [
            [
                'title' => 'لپ تاپ لنوو مدل Laser 107W',
                'slug' => 'lap-top-lenovo-laser-107w',
                'short_description' => 'لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی',
                'description' => 'لپ تاپ قدرتمند لنوو با پردازنده Core i7، رم 16 گیگابایت و هارد SSD 512 گیگابایت. مناسب برای کارهای گرافیکی و برنامه نویسی.',
                'price' => 17270000,
                'discount_price' => 17000000,
                'rating' => 4.4,
                'reviews_count' => 72,
                'stock' => 5,
                'main_image' => 'assets/image/products/1.webp',
                'gallery' => json_encode([
                    'assets/image/products/1.webp',
                    'assets/image/products/2.webp',
                    'assets/image/products/3.webp'
                ]),
                'brand_id' => 1,
                'category_id' => 1,
                'is_featured' => true,
                // اطلاعات فنی
                'cpu' => 'Intel Core i7-12700H',
                'gpu' => 'NVIDIA GeForce RTX 3050',
                'ram' => '16GB DDR4',
                'storage' => '512GB SSD NVMe',
                'display' => '15.6 اینچ FHD IPS',
                'battery' => '4-Cell 60Wh',
                'created_at' => now(),
                'updated_at' => now(),
                'colors' => [$black->id, $silver->id, $gray->id],
                'sizes' => [$medium->id, $large->id, $size15->id]
            ],
            [
                'title' => 'لپ تاپ لنوو مدل Laser 107W Pro',
                'slug' => 'lap-top-lenovo-laser-107w-2',
                'short_description' => 'لپ تاپ لنوو مدل Laser 107W Pro',
                'description' => 'لپ تاپ حرفه‌ای لنوو با پردازنده Core i9 و کارت گرافیک اختصاصی.',
                'price' => 19270000,
                'discount_price' => 18500000,
                'rating' => 4.6,
                'reviews_count' => 45,
                'stock' => 3,
                'main_image' => 'assets/image/products/2.webp',
                'gallery' => json_encode([
                    'assets/image/products/2.webp',
                    'assets/image/products/3.webp',
                    'assets/image/products/4.webp'
                ]),
                'brand_id' => 1,
                'category_id' => 1,
                'is_featured' => true,
                // اطلاعات فنی
                'cpu' => 'Intel Core i9-12900H',
                'gpu' => 'NVIDIA GeForce RTX 3060',
                'ram' => '32GB DDR5',
                'storage' => '1TB SSD NVMe',
                'display' => '16 اینچ QHD IPS 165Hz',
                'battery' => '4-Cell 80Wh',
                'created_at' => now(),
                'updated_at' => now(),
                'colors' => [$black->id, $silver->id],
                'sizes' => [$medium->id, $large->id, $size15->id]
            ],
            [
                'title' => 'لپ تاپ لنوو مدل ThinkPad X1',
                'slug' => 'lap-top-lenovo-laser-107w-3',
                'short_description' => 'لپ تاپ لنوو سری ThinkPad X1',
                'description' => 'لپ تاپ商务 لنوو با طراحی شیک و باتری با دوام.',
                'price' => 21270000,
                'discount_price' => 20500000,
                'rating' => 4.7,
                'reviews_count' => 89,
                'stock' => 7,
                'main_image' => 'assets/image/products/3.webp',
                'gallery' => json_encode([
                    'assets/image/products/3.webp',
                    'assets/image/products/4.webp',
                    'assets/image/products/5.webp'
                ]),
                'brand_id' => 1,
                'category_id' => 1,
                'is_featured' => true,
                // اطلاعات فنی
                'cpu' => 'Intel Core i7-1260P',
                'gpu' => 'Intel Iris Xe Graphics',
                'ram' => '16GB LPDDR5',
                'storage' => '512GB SSD NVMe',
                'display' => '14 اینچ WUXGA IPS',
                'battery' => '4-Cell 57Wh',
                'created_at' => now(),
                'updated_at' => now(),
                'colors' => [$black->id, $gray->id],
                'sizes' => [$medium->id, $large->id, $size15->id]
            ],
            [
                'title' => 'لپ تاپ ایسوس مدل ROG',
                'slug' => 'asus-rog-gaming-laptop',
                'short_description' => 'لپ تاپ گیمینگ ایسوس سری ROG',
                'description' => 'لپ تاپ گیمینگ قدرتمند با کارت گرافیک RTX 4060.',
                'price' => 35270000,
                'discount_price' => 34000000,
                'rating' => 4.8,
                'reviews_count' => 120,
                'stock' => 4,
                'main_image' => 'assets/image/products/4.webp',
                'gallery' => json_encode([
                    'assets/image/products/4.webp',
                    'assets/image/products/5.webp',
                    'assets/image/products/6.webp'
                ]),
                'brand_id' => 2,
                'category_id' => 1,
                'is_featured' => true,
                // اطلاعات فنی
                'cpu' => 'Intel Core i7-13700HX',
                'gpu' => 'NVIDIA GeForce RTX 4060 8GB',
                'ram' => '16GB DDR5',
                'storage' => '1TB SSD NVMe',
                'display' => '15.6 اینچ FHD IPS 144Hz',
                'battery' => '4-Cell 90Wh',
                'created_at' => now(),
                'updated_at' => now(),
                'colors' => [$black->id, $gray->id],
                'sizes' => [$medium->id, $large->id, $size15->id]
            ],
            [
                'title' => 'لپ تاپ اپل مک‌بوک پرو',
                'slug' => 'apple-macbook-pro-m2',
                'short_description' => 'لپ تاپ اپل مک‌بوک پرو M2',
                'description' => 'لپ تاپ اپل با چیپ M2 و نمایشگر Retina.',
                'price' => 55270000,
                'discount_price' => 54000000,
                'rating' => 4.9,
                'reviews_count' => 200,
                'stock' => 6,
                'main_image' => 'assets/image/products/5.webp',
                'gallery' => json_encode([
                    'assets/image/products/5.webp',
                    'assets/image/products/6.webp',
                    'assets/image/products/7.webp'
                ]),
                'brand_id' => 3,
                'category_id' => 1,
                'is_featured' => true,
                // اطلاعات فنی
                'cpu' => 'Apple M2 Pro',
                'gpu' => 'Apple M2 Pro 16-core',
                'ram' => '16GB Unified Memory',
                'storage' => '512GB SSD',
                'display' => '14.2 اینچ Liquid Retina XDR',
                'battery' => '70Wh Lithium Polymer',
                'created_at' => now(),
                'updated_at' => now(),
                'colors' => [$silver->id, $gray->id],
                'sizes' => [$medium->id, $large->id, $size15->id]
            ],
            [
                'title' => 'لپ تاپ دل مدل XPS',
                'slug' => 'dell-xps-laptop',
                'short_description' => 'لپ تاپ دل سری XPS',
                'description' => 'لپ تاپ دل با نمایشگر 4K و طراحی بی‌حاشیه.',
                'price' => 28270000,
                'discount_price' => 27000000,
                'rating' => 4.5,
                'reviews_count' => 67,
                'stock' => 8,
                'main_image' => 'assets/image/products/6.webp',
                'gallery' => json_encode([
                    'assets/image/products/6.webp',
                    'assets/image/products/7.webp',
                    'assets/image/products/8.webp'
                ]),
                'brand_id' => 4,
                'category_id' => 1,
                'is_featured' => true,
                // اطلاعات فنی
                'cpu' => 'Intel Core i7-1255U',
                'gpu' => 'Intel Iris Xe Graphics',
                'ram' => '16GB LPDDR5',
                'storage' => '512GB SSD NVMe',
                'display' => '13.4 اینچ 4K UHD+',
                'battery' => '4-Cell 55Wh',
                'created_at' => now(),
                'updated_at' => now(),
                'colors' => [$black->id, $silver->id],
                'sizes' => [$medium->id, $large->id, $size15->id]
            ],
            [
                'title' => 'لپ تاپ اچ پی مدل Spectre',
                'slug' => 'hp-spectre-laptop',
                'short_description' => 'لپ تاپ اچ پی سری Spectre',
                'description' => 'لپ تاپ اچ پی با طراحی لوکس و عملکرد عالی.',
                'price' => 31270000,
                'discount_price' => 30000000,
                'rating' => 4.6,
                'reviews_count' => 95,
                'stock' => 5,
                'main_image' => 'assets/image/products/7.webp',
                'gallery' => json_encode([
                    'assets/image/products/7.webp',
                    'assets/image/products/8.webp',
                    'assets/image/products/9.webp'
                ]),
                'brand_id' => 5,
                'category_id' => 1,
                'is_featured' => true,
                // اطلاعات فنی
                'cpu' => 'Intel Core i7-1255U',
                'gpu' => 'Intel Iris Xe Graphics',
                'ram' => '16GB LPDDR4X',
                'storage' => '1TB SSD NVMe',
                'display' => '13.5 اینچ OLED 3K2K',
                'battery' => '4-Cell 66Wh',
                'created_at' => now(),
                'updated_at' => now(),
                'colors' => [$black->id, $silver->id],
                'sizes' => [$medium->id, $large->id, $size15->id]
            ],
        ];

        // ایجاد محصولات و اتصال رنگ‌ها
        foreach ($products as $productData) {
            $colors = $productData['colors'];
            $sizes = $productData['sizes'];
            unset($productData['colors'], $productData['sizes']);

            $product = Products::create($productData);
            $product->colors()->attach($colors);
            $product->sizes()->attach($sizes);
        }
    }
}
