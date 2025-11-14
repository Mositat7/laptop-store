<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();;
            $table->text('content')->nullable();;
            $table->string('image')->nullable();;
            $table->string('author')->default('تیم محتوا');
            $table->date('publish_date');
            $table->integer('views')->default(0);
            $table->integer('reading_time')->default(5); // دقیقه
            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};
