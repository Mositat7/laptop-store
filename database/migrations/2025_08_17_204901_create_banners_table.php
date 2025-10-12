<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_path');
            $table->string('url')->nullable();
            $table->integer('position');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // درج سه بنر پیش‌فرض
        DB::table('banners')->insert([
            [
                'title' => 'بنر اصلی',
                'image_path' => 'storage/banners/banner1.png',
                'url' => '/products',
                'position' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'بنر تخفیف ویژه',
                'image_path' => 'storage/banners/banner2.png',
                'url' => '/discounts',
                'position' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
};
