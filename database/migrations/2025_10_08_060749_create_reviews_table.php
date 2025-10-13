<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * **/
public function up()
{
    Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('image');
        $table->enum('category', ['Book', 'Movie', 'TV Series']);
        $table->string('excerpt', 1200); // values: 'book', 'movie', 'series'
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
