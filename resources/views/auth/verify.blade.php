@extends('layouts.app')

@section('title', 'Verificar Correo Electrónico - GameStore')

@section('content')
<div class="container auth-container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card gamestore-card animated-card-gamestore">
                <div class="card-header"><i class="fas fa-envelope-open-text me-2"></i>{{ __('Verifica tu Correo Electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success gamestore-alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                        </div>
                    @endif

                    <p class="gamestore-label text-center mb-3">{{ __('Antes de continuar, por favor revisa tu correo electrónico para encontrar un enlace de verificación.') }}</p>
                    <p class="gamestore-label text-center">{{ __('Si no recibiste el correo electrónico') }},</p>
                    <form class="d-inline text-center" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn gamestore-btn-link p-0 m-0 align-baseline">{{ __('haz clic aquí para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
