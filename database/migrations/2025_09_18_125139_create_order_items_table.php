<?php
// database/migrations/2024_01_01_000004_create_order_items_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('product_name'); // نام محصول در زمان سفارش
            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 2); // قیمت در زمان سفارش
            $table->json('options')->nullable(); // options محصول
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
