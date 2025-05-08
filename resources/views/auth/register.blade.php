@extends('layouts.app')

@section('title', 'Registro - GameStore')



@section('content')
<div class="container auth-container">
    <div class="row justify-content-center w-100">
        <div class="col-md-6 col-lg-5">
            <div class="card gamestore-card animated-card-gamestore">
                <div class="card-header">
                    <div class="game-icon"><i class="fas fa-user-plus"></i></div>
                    {{ __('Crear Cuenta en GameStore') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label gamestore-label">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="form-control gamestore-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Tu nombre de jugador">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label gamestore-label">{{ __('Correo Electrónico') }}</label>
                            <input id="email" type="email" class="form-control gamestore-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="tu@email.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label gamestore-label">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control gamestore-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Crea una contraseña segura">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label gamestore-label">{{ __('Confirmar Contraseña') }}</label>
                            <input id="password-confirm" type="password" class="form-control gamestore-input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma tu contraseña">
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn gamestore-btn-primary w-100">
                                {{ __('Registrarse') }}
                            </button>
                        </div>

                        @if (Route::has('login'))
                            <div class="text-center">
                                <p class="mb-0 gamestore-label">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="btn btn-link gamestore-link">{{ __('Inicia sesión aquí') }}</a></p>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script>
    // Animación sutil para la tarjeta de registro
    anime({
        targets: '.animated-card-gamestore',
        translateY: [-30, 0],
        opacity: [0, 1],
        scale: [0.95, 1],
        delay: anime.stagger(100, {start: 300}),
        duration: 700,
        easing: 'easeOutExpo'
    });

    // Animación para los campos de entrada al enfocarlos
    const inputs = document.querySelectorAll('.gamestore-input');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            anime({
                targets: input,
                borderColor: ['#0f3460', '#e94560'], // Borde de color de acento
                boxShadow: ['0 0 0 0 rgba(233, 69, 96, 0.25)', '0 0 0 0.25rem rgba(233, 69, 96, 0.35)'], // Sombra de acento
                duration: 300,
                easing: 'easeOutSine'
            });
        });
        input.addEventListener('blur', () => {
            anime({
                targets: input,
                borderColor: ['#e94560', '#0f3460'],
                boxShadow: ['0 0 0 0.25rem rgba(233, 69, 96, 0.35)', '0 0 0 0 rgba(233, 69, 96, 0.25)'],
                duration: 400,
                easing: 'easeOutSine'
            });
        });
    });

    // Animación para el botón principal
    const primaryButton = document.querySelector('.gamestore-btn-primary');
    if (primaryButton) {
        primaryButton.addEventListener('mouseenter', () => {
            anime({
                targets: primaryButton,
                scale: [1, 1.05],
                duration: 200,
                easing: 'easeOutQuad'
            });
        });
        primaryButton.addEventListener('mouseleave', () => {
            anime({
                targets: primaryButton,
                scale: [1.05, 1],
                duration: 200,
                easing: 'easeOutQuad'
            });
        });
    }
</script>
@endpush
