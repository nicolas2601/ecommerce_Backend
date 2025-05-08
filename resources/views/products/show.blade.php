@extends('layouts.app')

@section('title', $product->name . ' - GameStore')

@section('content')
<div class="container gamestore-container">
    <h1 class="text-accent mb-4"><i class="fas fa-gamepad me-2"></i>{{ $product->name }}</h1>

    <div class="row">
        <div class="col-md-7">
            @if($product->image_path)
                <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid rounded shadow-lg product-detail-img-gamestore mb-4" alt="{{ $product->name }}">
            @else
                <img src="{{ asset('images/placeholder.png') }}" class="img-fluid rounded shadow-lg product-detail-img-gamestore mb-4" alt="Imagen no disponible">
            @endif
        </div>
        <div class="col-md-5">
            <div class="card gamestore-card p-4">
            <div class="product-detail mb-3">
                <strong class="gamestore-label">Precio:</strong> <span class="fs-3 text-accent fw-bold">${{ number_format($product->price, 2) }}</span>
            </div>
            <div class="product-detail mb-3">
                <strong class="gamestore-label">Categoría:</strong> <span class="badge gamestore-badge fs-6">{{ $product->category->name ?? 'Sin categoría' }}</span>
            </div>
            <div class="product-description mb-3">
                <strong class="gamestore-label">Descripción:</strong>
                <p class="gamestore-label">{{ $product->description }}</p>
            </div>
            <div class="product-detail mb-4">
                <strong class="gamestore-label">Stock:</strong> <span class="fs-5 fw-bold">{{ $product->stock }}</span> unidades disponibles
            </div>

            <div class="d-grid gap-2 mb-3">
                <button class="btn gamestore-btn-primary btn-lg"><i class="fas fa-cart-plus me-2"></i>Añadir al Carrito</button>
            </div>

            <div class="actions mt-4">
                {{-- Botón Editar --}}
                {{-- <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a> --}}

                {{-- Formulario Eliminar --}}
                {{-- <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?');" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form> --}}

                {{-- Botón Volver --}}
                <a href="{{ route('products.index') }}" class="btn gamestore-btn-secondary"><i class="fas fa-arrow-left me-2"></i>Volver al Catálogo</a>
            </div> <!-- Close gamestore-card -->
            </div>
        </div>
    </div>
</div>
@endsection
