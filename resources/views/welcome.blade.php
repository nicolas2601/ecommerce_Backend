@extends('layouts.app')

@section('title', 'Bienvenido a Ecommerce')

{{-- No se necesita Tailwind aquí, se usará Bootstrap del layout principal --}}
@push('styles')
<style>
    /* Estilos específicos para la página de bienvenida si son necesarios */
    body {
        /* Puedes mantener la fuente si la cargas globalmente o usar una fuente de Bootstrap */
        /* font-family: 'Poppins', sans-serif; */
    }
    .hero-section {
        background-image: url('{{ asset('images/unab.jpg') }}'); /* Usar asset() para las imágenes */
        background-size: cover;
        background-position: center;
        color: white; /* Asegurar contraste */
        padding: 6rem 1rem;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.7); /* Sombra para legibilidad */
    }
    .category-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none; /* Quitar borde por defecto de card */
    }
    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    .testimonial-section {
        background-color: #f8f9fa; /* Un fondo suave para testimonios */
    }
    .testimonial-card {
        background: white;
        border: none;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    .testimonial-card:hover {
        transform: translateY(-5px);
    }
    .feature-icon {
        font-size: 2.5rem; /* Ajustar tamaño de iconos */
        color: var(--bs-primary); /* Usar color primario de Bootstrap */
    }
</style>
@endpush

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section text-center mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Bienvenido a Nuestra Tienda</h1>
            <p class="lead">Descubre productos increíbles a precios inmejorables.</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mt-3">Explorar Productos</a>
        </div>
    </section>

    {{-- Featured Categories --}}
    <section class="featured-categories mb-5">
        <div class="container">
            <h2 class="text-center mb-4">Categorías Destacadas</h2>
            <div class="row g-4">
                {{-- Ejemplo de Categoría 1 --}}
                <div class="col-md-4">
                    <div class="card category-card text-center">
                        <img src="{{ asset('images/descarga.jpg') }}" class="card-img-top" alt="Electrónicos" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Electrónicos</h5>
                            <p class="card-text">Lo último en tecnología.</p>
                            <a href="#" class="btn btn-outline-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
                {{-- Ejemplo de Categoría 2 --}}
                <div class="col-md-4">
                    <div class="card category-card text-center">
                         <img src="{{ asset('images/backend.jpg') }}" class="card-img-top" alt="Moda" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Moda</h5>
                            <p class="card-text">Tendencias actuales.</p>
                            <a href="#" class="btn btn-outline-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
                {{-- Ejemplo de Categoría 3 --}}
                <div class="col-md-4">
                    <div class="card category-card text-center">
                        <img src="{{ asset('images/unab.jpg') }}" class="card-img-top" alt="Hogar" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Hogar</h5>
                            <p class="card-text">Todo para tu espacio.</p>
                            <a href="#" class="btn btn-outline-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="features mb-5">
        <div class="container">
            <h2 class="text-center mb-4">Por Qué Elegirnos</h2>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="feature-icon mb-2"><i class="bi bi-truck"></i></div> {{-- Asume que tienes Bootstrap Icons --}}
                    <h5>Envío Rápido</h5>
                    <p>Entrega confiable y veloz a tu puerta.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-2"><i class="bi bi-shield-check"></i></div>
                    <h5>Pagos Seguros</h5>
                    <p>Transacciones protegidas y seguras.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-2"><i class="bi bi-headset"></i></div>
                    <h5>Soporte 24/7</h5>
                    <p>Estamos aquí para ayudarte en cualquier momento.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="testimonial-section py-5 mb-5">
        <div class="container">
            <h2 class="text-center mb-4">Lo Que Dicen Nuestros Clientes</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card testimonial-card p-4">
                        <blockquote class="blockquote mb-0">
                            <p>"¡Excelente servicio y productos de alta calidad! Muy recomendable."</p>
                            <footer class="blockquote-footer">Cliente Satisfecho</footer>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card testimonial-card p-4">
                        <blockquote class="blockquote mb-0">
                            <p>"La mejor experiencia de compra online que he tenido. Volveré a comprar."</p>
                            <footer class="blockquote-footer">Comprador Feliz</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to Action --}}
    <section class="cta text-center bg-light py-5">
        <div class="container">
            <h2>¿Listo para Empezar a Comprar?</h2>
            <p class="lead">Explora nuestra amplia selección de productos hoy mismo.</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Ir a la Tienda</a>
        </div>
    </section>
@endsection

{{-- Asegúrate de incluir Bootstrap Icons si usas los iconos bi-* --}}
{{-- Puedes añadir el CDN en layouts/app.blade.php --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}



