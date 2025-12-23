<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('blog_category_id')
                  ->constrained('blog_categories')
                  ->onDelete('cascade');
            $table->text('image')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
