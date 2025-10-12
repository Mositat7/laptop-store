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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('email')->nullable()->unique('email');
            $table->string('phone', 20)->nullable()->unique('phone');
            $table->string('avatar')->nullable();
            $table->string('password')->nullable();
            $table->mediumText('address')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->enum('role', ['user', 'admin', 'seller'])->nullable()->default('user');
            $table->json('cart')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
