<?php
// database/migrations/2024_01_01_000000_create_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('phone', 20)->nullable()->unique();
            $table->string('avatar')->nullable();
            $table->string('password')->nullable();
            $table->mediumText('address')->nullable();
            $table->enum('role', ['user', 'admin', 'seller'])->default('user');
            $table->json('cart')->nullable(); // برای سبد خرید سریع
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
