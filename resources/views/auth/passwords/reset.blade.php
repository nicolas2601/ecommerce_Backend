@extends('layouts.app')

@section('title', 'Restablecer Contraseña - GameStore')

@section('content')
<div class="container auth-container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card gamestore-card animated-card-gamestore">
                <div class="card-header"><i class="fas fa-key me-2"></i>{{ __('Restablecer Contraseña') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3">
                            <label for="email" class="form-label gamestore-label">{{ __('Correo Electrónico') }}</label>
                            <input id="email" type="email" class="form-control gamestore-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Tu correo electrónico">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label gamestore-label">{{ __('Nueva Contraseña') }}</label>
                            <input id="password" type="password" class="form-control gamestore-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Tu nueva contraseña">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label gamestore-label">{{ __('Confirmar Nueva Contraseña') }}</label>
                            <input id="password-confirm" type="password" class="form-control gamestore-input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma tu nueva contraseña">
                        </div>

                        <div class="d-grid gap-2 mb-0">
                            <button type="submit" class="btn gamestore-btn-primary w-100">
                                {{ __('Restablecer Contraseña') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
