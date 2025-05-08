@extends('layouts.app')

@section('title', 'Bienvenido a GameStore - Tu Tienda de Juegos y Hardware')

{{-- No se necesita Tailwind aquí, se usará Bootstrap del layout principal --}}
@push('styles')
<style>
    .hero-section-gamestore {
        background: linear-gradient(rgba(22, 33, 62, 0.8), rgba(22, 33, 62, 0.9)), url('{{ asset('images/gaming-hero-bg.jpg') }}'); /* Reemplaza con una imagen temática de videojuegos/hardware */
        background-size: cover;
        background-position: center;
        color: #e0e0e0;
        padding: 8rem 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
    }
    .hero-section-gamestore h1 {
        font-family: 'Orbitron', sans-serif;
        font-size: 3.5rem;
        color: #e94560; /* Color de acento */
    }
    .hero-section-gamestore .lead {
        font-size: 1.5rem;
        color: #a0a0c0;
    }
    .category-card-gamestore {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #0f3460;
        background-color: #16213e;
    }
    .category-card-gamestore:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(233, 69, 96, 0.2);
    }
    .category-card-gamestore .card-img-top {
        border-bottom: 3px solid #e94560;
    }
    .category-card-gamestore .card-title {
        font-family: 'Orbitron', sans-serif;
        color: #e94560;
    }
    .testimonial-section-gamestore {
        background-color: #16213e; /* bg-dark-2 */
        padding: 4rem 0;
    }
    .testimonial-card-gamestore {
        background-color: #0f3460; /* bg-dark-3 */
        border: 1px solid #1f2a40;
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }
    .testimonial-card-gamestore blockquote p {
        color: #e0e0e0;
    }
    .testimonial-card-gamestore .blockquote-footer {
        color: #a0a0c0;
    }
    .feature-icon-gamestore {
        font-size: 3rem;
        color: #e94560; /* Color de acento */
        margin-bottom: 1rem;
    }
    .features-gamestore h5 {
        font-family: 'Orbitron', sans-serif;
        color: #e0e0e0;
    }
    .features-gamestore p {
        color: #a0a0c0;
    }
    .cta-gamestore {
        background-color: #0f3460; /* bg-dark-3 */
        padding: 4rem 0;
    }
    .cta-gamestore h2 {
        font-family: 'Orbitron', sans-serif;
        color: #e94560;
    }
    .cta-gamestore .lead {
        color: #a0a0c0;
    }
</style>
@endpush

@section('content')
    {{-- Hero Section --}}
    <div class="hero-section-gamestore text-white py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Bienvenido a GameStore</h1>
                    <p class="lead mb-5 fs-4">Tu destino #1 para Videojuegos, Hardware y Accesorios Gamer</p>
                    <a href="{{ route('products.index') }}" class="btn gamestore-btn-primary btn-lg px-5 py-3">
                        <i class="fas fa-shopping-bag me-2"></i>Ver Productos
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Featured Categories --}}
    <div class="container py-5">
        <h2 class="text-center mb-5 display-5 fw-bold text-accent">Categorías Destacadas</h2>
        <div class="row g-4">
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 category-card-gamestore gamestore-card">
                    <img src="{{ asset('storage/' . $category->image) }}" class="card-img-top" alt="{{ $category->name }}" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center p-4">
                        <h5 class="card-title fs-4 fw-bold">{{ $category->name }}</h5>
                        <p class="card-text gamestore-label mb-4">{{ $category->description }}</p>
                        <a href="#" class="btn gamestore-btn-secondary btn-lg px-4">
                            <i class="fas fa-arrow-right me-2"></i>Explorar
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Features Section --}}
    <section class="features-gamestore py-5">
        <div class="container">
            <h2 class="text-center mb-5 text-accent">¿Por Qué GameStore?</h2>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="feature-icon-gamestore mb-2"><i class="fas fa-shipping-fast"></i></div>
                    <h5>Envíos Ultra-Rápidos</h5>
                    <p>Recibe tus juegos y componentes en tiempo récord.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon-gamestore mb-2"><i class="fas fa-shield-alt"></i></div>
                    <h5>Pagos 100% Seguros</h5>
                    <p>Compra con confianza, tus datos están protegidos.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon-gamestore mb-2"><i class="fas fa-headset"></i></div>
                    <h5>Soporte Gamer Experto</h5>
                    <p>Nuestro equipo de gamers está listo para asistirte.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="testimonial-section-gamestore py-5 mb-5">
        <div class="container">
            <h2 class="text-center mb-5 text-accent">Voces de la Comunidad Gamer</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card testimonial-card-gamestore gamestore-card p-4">
                        <blockquote class="blockquote mb-0">
                            <p>"¡GameStore es mi tienda de confianza! Precios increíbles y el envío fue rapidísimo."</p>
                            <footer class="blockquote-footer">Juan 'ProGamer' Pérez</footer>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card testimonial-card-gamestore gamestore-card p-4">
                        <blockquote class="blockquote mb-0">
                            <p>"El hardware que compré llegó perfecto y el soporte técnico me ayudó con mis dudas. ¡10/10!"</p>
                            <footer class="blockquote-footer">Ana 'TechQueen' Gómez</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to Action --}}
    <section class="cta-gamestore text-center py-5">
        <div class="container">
            <h2>¿Listo para Subir de Nivel tu Experiencia Gamer?</h2>
            <p class="lead">Descubre las últimas novedades en juegos, consolas, PC gaming y periféricos.</p>
            <a href="{{ route('products.index') }}" class="btn gamestore-btn-primary btn-lg"><i class="fas fa-gamepad me-2"></i>Explorar Tienda</a>
        </div>
    </section>
@endsection

{{-- Asegúrate de incluir Bootstrap Icons si usas los iconos bi-* --}}
{{-- Puedes añadir el CDN en layouts/app.blade.php --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}



