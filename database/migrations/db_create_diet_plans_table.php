Schema::create('diet_plans', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->integer('duration_days');
    $table->decimal('daily_calories', 8, 2);
    $table->decimal('price', 8, 2);
    $table->string('difficulty');
    $table->string('meal_type');
    $table->string('image_url');
    $table->timestamps();
});