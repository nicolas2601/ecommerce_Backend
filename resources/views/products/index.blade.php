@extends('layouts.app')

@section('title', 'Catálogo de Productos - GameStore')

@section('content')
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card gamestore-card">
            <div class="card-header">
                <h5 class="card-title mb-0"><i class="fas fa-tags me-2"></i>Categorías</h5>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action gamestore-link {{ !request('category') ? 'active text-accent' : '' }}">Todas</a>
                @foreach($categories as $category)
                    {{-- Update the href when category filtering is implemented --}}
                    <a href="#" class="list-group-item list-group-item-action gamestore-link">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-accent"><i class="fas fa-gamepad me-2"></i>Catálogo de Productos</h1>
            <a href="{{ route('products.create') }}" class="btn gamestore-btn-primary"><i class="fas fa-plus-circle me-2"></i>Nuevo Producto</a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse($products as $product)
            <div class="col">
                <div class="card h-100 gamestore-card product-card-gamestore">
                    @if($product->image_path)
                        <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top product-image" alt="{{ $product->name }}">
                    @else
                        {{-- Consider adding a default placeholder image --}}
                        <img src="{{ asset('images/placeholder.png') }}" class="card-img-top product-image" alt="Imagen no disponible">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('products.show', $product->id) }}" class="gamestore-link stretched-link">{{ $product->name }}</a></h5>
                        <p class="card-text gamestore-label">{{ Str::limit($product->description, 100) }}</p>
                        <p class="card-text gamestore-label"><strong>Categoría:</strong> {{ $product->category->name ?? 'Sin categoría' }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 mb-0 text-accent fw-bold">${{ number_format($product->price, 2) }}</span>
                            @if($product->category)
                            <span class="badge gamestore-badge">{{ $product->category->name }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-grid">
                            <a href="{{ route('products.show', $product->id) }}" class="btn gamestore-btn-secondary w-100"><i class="fas fa-eye me-2"></i>Ver Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center">No hay productos disponibles.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
