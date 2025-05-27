<?php

use App\Http\Controllers\DietPlanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DietPlanController::class, 'index'])->name('diet-plans.index');
Route::get('/diet-plans/{id}', [DietPlanController::class, 'show'])->name('diet-plans.show');
