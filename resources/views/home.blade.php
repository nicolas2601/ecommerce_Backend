@extends('layouts.app')

@section('title', 'Dashboard - GameStore')

@section('content')
<div class="container gamestore-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card gamestore-card">
                <div class="card-header"><i class="fas fa-tachometer-alt me-2"></i>{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="fs-5">¡Has iniciado sesión en <strong>GameStore</strong>!</p>
                    <p>Desde aquí podrás gestionar tu cuenta, ver tus pedidos y mucho más.</p>
                    <hr class="my-4">
                    <a href="{{ route('products.index') }}" class="btn gamestore-btn-primary me-2"><i class="fas fa-gamepad me-2"></i>Explorar Productos</a>
                    <a href="#" class="btn gamestore-btn-secondary"><i class="fas fa-user-circle me-2"></i>Mi Perfil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
