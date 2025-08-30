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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('excerpt', 500)->nullable();
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('price')->nullable();
            $table->string('price_type')->nullable();
            $table->string('duration')->nullable();
            $table->string('delivery_time')->nullable();
            $table->json('features')->nullable();
            $table->json('process')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
