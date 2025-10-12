<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // اطلاعات اصلی
            $table->string('title'); // نام محصول
            $table->string('slug')->unique(); // برای لینک‌ها
            $table->text('short_description')->nullable(); // توضیح کوتاه
            $table->longText('description')->nullable(); // توضیحات کامل

            // ویژگی‌های فنی (مثل رم، حافظه، جنس بدنه و ...)
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('cpu')->nullable();
            $table->string('gpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('storage')->nullable();
            $table->string('display')->nullable();
            $table->string('battery')->nullable();
//            $table->string('color')->nullable();

            // اطلاعات قیمت و موجودی
            $table->bigInteger('price')->default(0);
            $table->bigInteger('discount_price')->nullable();
            $table->integer('stock')->default(0); // موجودی
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false); // محصول ویژه

            // اطلاعات نمایشی
            $table->string('main_image')->nullable(); // تصویر اصلی
            $table->json('gallery')->nullable(); // گالری چندتایی (مثل عکس پایین صفحه)
            $table->float('rating', 2, 1)->default(0); // امتیاز
            $table->integer('reviews_count')->default(0);

            // ارتباط‌ها
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
