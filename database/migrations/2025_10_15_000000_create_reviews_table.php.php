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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            // Review details
            $table->string('title');
            $table->text('excerpt');
            $table->string('image');

            // Foreign keys with correct references
            $table->foreignId('category_id')
                  ->nullable()
                  ->constrained('categories') // explicitly reference categories table
                  ->onDelete('set null');

            $table->foreignId('subcategory_id')
                  ->nullable()
                  ->constrained('subcategories') // explicitly reference subcategories table
                  ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
