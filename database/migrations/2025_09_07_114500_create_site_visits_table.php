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
    public function up(): void
    {
        Schema::create('site_visits', function (Blueprint $table) {
            $table->tinyInteger('id')->default(1)->primary(); // فقط یک رکورد داریم
            $table->unsignedBigInteger('total_visits')->default(0);
            $table->timestamps();
        });

        // درج رکورد اولیه
        DB::table('site_visits')->insert([
            'id' => 1,
            'total_visits' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_visits');
    }
};
