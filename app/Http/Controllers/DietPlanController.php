<?php

namespace App\Http\Controllers;

use App\Models\DietPlan;

class DietPlanController extends Controller
{

    
 public function index()
{
    $plans = DietPlan::paginate(12);
    
    // O si quieres ver los 50+ en una sola página (no recomendado para UX):
    // $plans = DietPlan::take(50)->get();
    
    return view('diet-plans.index', compact('plans'));
}

    public function show($id)
    {
        $plan = DietPlan::findOrFail($id);
        return view('diet-plans.show', compact('plan'));
    }
}