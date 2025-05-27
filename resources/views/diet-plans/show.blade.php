@extends('layouts.app')

@section('title', $plan->name)
@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $plan->image_url }}" class="img-fluid rounded shadow" alt="{{ $plan->name }}">
        </div>
        <div class="col-md-6">
            <h1 class="display-4">{{ $plan->name }}</h1>
            <p class="lead">{{ $plan->description }}</p>
            
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Duration:</strong> {{ $plan->duration_days }} days
                </li>
                <li class="list-group-item">
                    <strong>Daily Calories:</strong> {{ $plan->daily_calories }} kcal
                </li>
                <li class="list-group-item">
                    <strong>Price:</strong> ${{ number_format($plan->price, 2) }}
                </li>
                <li class="list-group-item">
                    <strong>Difficulty:</strong> {{ $plan->difficulty }}
                </li>
                <li class="list-group-item">
                    <strong>Meal Type:</strong> {{ $plan->meal_type }}
                </li>
            </ul>

            <div class="mt-4">
                <a href="{{ route('diet-plans.index') }}" class="btn btn-outline-success">
                    ← Back to All Plans
                </a>
            </div>
        </div>
    </div>
@endsection