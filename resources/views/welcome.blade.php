<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .bg-promo {
            background-image: url('/images/unab.jpg');
            background-size: cover;
            background-position: center;
        }
        .category-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .testimonial-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        .btn-glow {
            transition: box-shadow 0.3s ease;
        }
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(128, 0, 128, 0.6);
        }
        .carousel-item {
            transition: opacity 0.5s ease;
        }
    </style>
</head>
<body class="bg-white">

    <!-- Banner de Promociones -->
    <div class="bg-promo h-96 flex items-center justify-center text-white relative">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="text-center relative z-10">
            <h1 class="text-5xl font-bold mb-4 animate-fade-in-down">¡Grandes Promociones!</h1>
            <p class="text-xl mb-6 animate-fade-in-down">Aprovecha nuestras ofertas exclusivas por tiempo limitado.</p>
            <button class="mt-6 bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-full btn-glow animate-fade-in-up">
                Ver Ofertas
            </button>
        </div>
    </div>

    <!-- Carrusel de Productos Destacados -->
    <div class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-purple-800 mb-8 text-center">Productos Destacados</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Producto 1 -->
            <div class="category-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="/images/backend.jpg" alt="Producto 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-purple-800 mb-2">Producto 1</h3>
                    <p class="text-gray-600">Descripción breve del producto destacado.</p>
                    <a href="#" class="mt-4 inline-block text-orange-500 hover:text-orange-600">Ver más</a>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="category-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="/images/descarga.jpg" alt="Producto 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-purple-800 mb-2">Producto 2</h3>
                    <p class="text-gray-600">Descripción breve del producto destacado.</p>
                    <a href="#" class="mt-4 inline-block text-orange-500 hover:text-orange-600">Ver más</a>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="category-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="/images/unab.jpg" alt="Producto 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-purple-800 mb-2">Producto 3</h3>
                    <p class="text-gray-600">Descripción breve del producto destacado.</p>
                    <a href="#" class="mt-4 inline-block text-orange-500 hover:text-orange-600">Ver más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonios -->
    <div class="bg-purple-50 py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-purple-800 mb-8 text-center">Testimonios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonio 1 -->
                <div class="testimonial-card p-6 rounded-lg shadow-lg">
                    <p class="text-gray-600">"Excelente servicio y productos de alta calidad. ¡Muy recomendado!"</p>
                    <div class="mt-4 flex items-center">
                        <img src="/images/unab.jpg" alt="Cliente 1" class="w-10 h-10 rounded-full">
                        <div class="ml-3">
                            <h4 class="text-purple-800 font-semibold">Cliente 1</h4>
                            <p class="text-gray-500">CEO, Empresa 1</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 2 -->
                <div class="testimonial-card p-6 rounded-lg shadow-lg">
                    <p class="text-gray-600">"Increíble experiencia de compra. Volveré a comprar sin duda."</p>
                    <div class="mt-4 flex items-center">
                        <img src="/images/unab.jpg" alt="Cliente 2" class="w-10 h-10 rounded-full">
                        <div class="ml-3">
                            <h4 class="text-purple-800 font-semibold">Cliente 2</h4>
                            <p class="text-gray-500">Gerente, Empresa 2</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 3 -->
                <div class="testimonial-card p-6 rounded-lg shadow-lg">
                    <p class="text-gray-600">"Los mejores precios y atención al cliente. ¡Gracias!"</p>
                    <div class="mt-4 flex items-center">
                        <img src="/images/unab.jpg" alt="Cliente 3" class="w-10 h-10 rounded-full">
                        <div class="ml-3">
                            <h4 class="text-purple-800 font-semibold">Cliente 3</h4>
                            <p class="text-gray-500">Director, Empresa 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de Suscripción -->
    <div class="bg-purple-800 py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Suscríbete a nuestras promociones</h2>
            <p class="text-purple-200 mb-8">Recibe las últimas ofertas y novedades directamente en tu correo.</p>
            <form class="max-w-lg mx-auto">
                <div class="flex flex-col md:flex-row gap-4">
                    <input type="email" placeholder="Tu correo electrónico" class="flex-1 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-lg btn-glow">
                        Suscribirse
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-purple-900 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2023 Tu Empresa. Todos los derechos reservados.</p>
            <div class="mt-4">
                <a href="#" class="mx-2 hover:text-orange-300">Términos y Condiciones</a>
                <a href="#" class="mx-2 hover:text-orange-300">Política de Privacidad</a>
                <a href="#" class="mx-2 hover:text-orange-300">Contacto</a>
            </div>
        </div>
    </footer>

</body>
</html>



