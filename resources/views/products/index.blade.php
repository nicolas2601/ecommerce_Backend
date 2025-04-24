@extends('layouts.app')

@section('title', 'Productos - Ecommerce')

@section('content')
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Categorías</h5>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action {{ !request('category') ? 'active' : '' }}">Todas</a>
                @foreach($categories as $category)
                    {{-- Update the href when category filtering is implemented --}}
                    <a href="#" class="list-group-item list-group-item-action">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="header">
            <h1>Listado de Productos</h1>
            <a href="{{ route('products.create') }}" class="btn btn-success">Crear Nuevo Producto</a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse($products as $product)
            <div class="col">
                <div class="card h-100">
                    @if($product->image_path)
                        <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top product-image" alt="{{ $product->name }}">
                    @else
                        {{-- Consider adding a default placeholder image --}}
                        <img src="{{ asset('images/placeholder.png') }}" class="card-img-top product-image" alt="Imagen no disponible">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h5>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        <p class="card-text"><strong>Categoría:</strong> {{ $product->category->name ?? 'Sin categoría' }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 mb-0">${{ number_format($product->price, 2) }}</span>
                            @if($product->category)
                            <span class="badge bg-primary">{{ $product->category->name }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-grid">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">Ver detalles</a>
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
