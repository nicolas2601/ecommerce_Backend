@extends('layouts.app')

@section('title', $product->name . ' - Detalles del Producto')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>

    <div class="row">
        <div class="col-md-6">
            @if($product->image_path)
                <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid rounded product-detail-img" alt="{{ $product->name }}">
            @else
                <img src="{{ asset('images/placeholder.png') }}" class="img-fluid rounded product-detail-img" alt="Imagen no disponible">
            @endif
        </div>
        <div class="col-md-6">
            <div class="product-detail mb-3">
                <strong>Precio:</strong> ${{ number_format($product->price, 2) }}
            </div>
            <div class="product-detail mb-3">
                <strong>Categoría:</strong> {{ $product->category->name ?? 'Sin categoría' }}
            </div>
            <div class="product-description mb-3">
                <strong>Descripción:</strong>
                <p>{{ $product->description }}</p>
            </div>
            <div class="product-detail mb-3">
                <strong>Stock:</strong> {{ $product->stock }} unidades
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
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </div>
    </div>
</div>
@endsection
