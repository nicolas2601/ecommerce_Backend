@extends('layouts.app')

@section('title', 'Crear Nuevo Producto - GameStore')

@section('content')
<div class="container gamestore-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card gamestore-card">
                <div class="card-header"><i class="fas fa-plus-circle me-2"></i>Crear Nuevo Producto</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label gamestore-label">Nombre del Producto</label>
                            <input type="text" class="form-control gamestore-input" id="name" name="name" value="{{ old('name') }}" required placeholder="Ej: Teclado Mecánico RGB">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label gamestore-label">Descripción</label>
                            <textarea class="form-control gamestore-input" id="description" name="description" rows="4" required placeholder="Describe las características principales del producto...">{{ old('description') }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label gamestore-label">Precio</label>
                                <input type="number" class="form-control gamestore-input" id="price" name="price" step="0.01" value="{{ old('price') }}" required placeholder="0.00">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="stock" class="form-label gamestore-label">Stock</label>
                                <input type="number" class="form-control gamestore-input" id="stock" name="stock" value="{{ old('stock') }}" required placeholder="Cantidad disponible">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="category_id" class="form-label gamestore-label">Categoría</label>
                            <select class="form-select gamestore-input" id="category_id" name="category_id">
                                <option value="">Selecciona una categoría</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label gamestore-label">Imagen del Producto</label>
                            <input class="form-control gamestore-input" type="file" id="image" name="image">
                        </div>

                        <button type="submit" class="btn gamestore-btn-primary"><i class="fas fa-save me-2"></i>Guardar Producto</button>
                        <a href="{{ route('products.index') }}" class="btn gamestore-btn-secondary"><i class="fas fa-times me-2"></i>Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
