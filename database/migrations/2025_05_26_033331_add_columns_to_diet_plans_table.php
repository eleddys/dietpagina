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
        Schema::table('diet_plans', function (Blueprint $table) {
            $table->string('name');
            $table->text('description');
            $table->integer('duration_days');
            $table->decimal('daily_calories', 8, 2);
            $table->decimal('price', 8, 2);
            $table->string('difficulty');
            $table->string('meal_type');
            $table->string('image_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('diet_plans', function (Blueprint $table) {
            $table->dropColumn([
                'name',
                'description',
                'duration_days',
                'daily_calories',
                'price',
                'difficulty',
                'meal_type',
                'image_url'
            ]);
        });
    }
};