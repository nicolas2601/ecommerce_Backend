@extends('layouts.app')

@section('title', 'Confirmar Contraseña - GameStore')

@section('content')
<div class="container auth-container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card gamestore-card animated-card-gamestore">
                <div class="card-header"><i class="fas fa-shield-alt me-2"></i>{{ __('Confirmar Contraseña') }}</div>

                <div class="card-body">
                    <p class="gamestore-label text-center mb-4">{{ __('Por favor, confirma tu contraseña para continuar.') }}</p>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="form-label gamestore-label">{{ __('Contraseña') }}</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control gamestore-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Tu contraseña actual">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn gamestore-btn-primary w-100 mb-3">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link gamestore-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
