<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // حذف فیلد color اگر وجود داره
            if (Schema::hasColumn('products', 'color')) {
                $table->dropColumn('color');
            }
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('color')->nullable();
        });
    }
};
