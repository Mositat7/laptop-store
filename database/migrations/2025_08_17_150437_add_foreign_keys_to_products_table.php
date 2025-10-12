<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign(['brand_id'], 'fk_products_brand')->references(['id'])->on('brands')->onUpdate('restrict')->onDelete('set null');
            $table->foreign(['category_id'], 'products_ibfk_1')->references(['id'])->on('categories')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('fk_products_brand');
            $table->dropForeign('products_ibfk_1');
        });
    }
};
