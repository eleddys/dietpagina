@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Planes de Dieta <small class="text-muted">(Mostrando {{ $plans->count() }} de {{ $plans->total() }})</small></h1>
    
    <div class="row">
        @forelse($plans as $plan)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $plan->image_url ?? 'https://via.placeholder.com/300x200?text=Diet+Image' }}" 
                         class="card-img-top" 
                         alt="{{ $plan->name }}"
                         style="height: 180px; object-fit: cover;">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $plan->name }}</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary">{{ $plan->difficulty }}</span>
                            <span class="text-success">${{ number_format($plan->price, 2) }}</span>
                        </div>
                        <p class="card-text text-muted">{{ Str::limit($plan->description, 80) }}</p>
                    </div>
                    
                    <div class="card-footer bg-white">
                        <a href="{{ route('diet-plans.show', $plan->id) }}" 
                           class="btn btn-sm btn-outline-success w-100">
                           Ver Detalles
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning">No hay planes disponibles</div>
            </div>
        @endforelse
    </div>

    @if($plans->hasPages())
    <div class="d-flex justify-content-center mt-5">
        {{ $plans->onEachSide(1)->links() }}
    </div>
    @endif
</div>
@endsection