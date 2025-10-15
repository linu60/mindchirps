<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::table('subcategories', function (Illuminate\Database\Schema\Blueprint $table) {
        if (!Schema::hasColumn('subcategories', 'slug')) {
            $table->string('slug')->nullable()->after('name');
        }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subcategories', function (Blueprint $table) {
            //
        });
    }
};
