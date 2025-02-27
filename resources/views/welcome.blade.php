<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-promo {
            background-image: url('/images/unab.jpg');
            background-size: cover;
            background-position: center;
        }
        .category-card {
            transition: transform 0.3s ease;
        }
        .category-card:hover {
            transform: translateY(-10px);
        }
        .testimonial-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-white">

    <!-- Banner de Promociones -->
    <div class="bg-promo h-96 flex items-center justify-center text-white">
        <div class="text-center">
            <h1 class="text-5xl font-bold mb-4">¡Grandes Promociones!</h1>
            <p class="text-xl">Aprovecha nuestras ofertas exclusivas por tiempo limitado.</p>
            <button class="mt-6 bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-6 rounded-full">
                Ver Ofertas
            </button>
        </div>
    </div>

    <!-- Categorías de Venta -->
    <div class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-purple-800 mb-8 text-center">Categorías</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Categoría 1 -->
            <div class="category-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="/images/backend.jpg" alt="Categoría 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-purple-800 mb-2">Categoria 1</h3>
                    <p class="text-gray-600">Descubre los mejores productos en esta categoría.</p>
                    <a href="#" class="mt-4 inline-block text-orange-500 hover:text-orange-600">Ver más</a>
                </div>
            </div>

            <!-- Categoría 2 -->
            <div class="category-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="/images/descarga.jpg" alt="Categoría 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-purple-800 mb-2">Categoria 2</h3>
                    <p class="text-gray-600">Todo lo que necesitas en esta categoría.</p>
                    <a href="#" class="mt-4 inline-block text-orange-500 hover:text-orange-600">Ver más</a>
                </div>
            </div>

            <!-- Categoría 3 -->
            <div class="category-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="/images/unab.jpg" alt="Categoría 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-purple-800 mb-2">Categoria 3</h3>
                    <p class="text-gray-600">Las últimas novedades en esta categoría.</p>
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

    <!-- Footer -->
    <footer class="bg-purple-800 text-white py-8">
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