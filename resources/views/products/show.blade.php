<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Detalle de Producto - Estilo Amazon</title>
  <style>
    /* 
      Estilos Globales 
      ----------------
    */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Arial", sans-serif;
    }

    body {
      background: #f7f7f7;
      color: #111;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Encabezado */
    header {
      background: #131921;
      color: #fff;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      font-size: 1.6rem;
      font-weight: bold;
    }

    .search-bar {
      flex: 1;
      margin: 0 20px;
    }

    .search-bar input {
      width: 100%;
      padding: 8px;
      border: none;
      border-radius: 3px;
      font-size: 1rem;
    }

    .nav-links {
      display: flex;
      gap: 20px;
    }

    .nav-links a {
      color: #fff;
      font-size: 0.95rem;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #ff9900;
    }

    /* Banner de ubicación / Envío */
    .location-banner {
      background: #232f3e;
      color: #fff;
      padding: 5px 20px;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .location-banner img {
      width: 20px;
      height: 20px;
    }

    /* Contenedor Principal */
    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 0 15px;
    }

    /* Sección de Detalle de Producto */
    .product-detail {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    /* Columna Izquierda: Imagen Principal y miniaturas */
    .product-images {
      flex: 1 1 400px;
      min-width: 300px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .main-image {
      width: 100%;
      border: 1px solid #ddd;
      border-radius: 5px;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      height: 450px;
    }

    .main-image img {
      max-width: 100%;
      max-height: 100%;
      object-fit: cover;
    }

    .thumbnail-list {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .thumbnail {
      width: 70px;
      height: 70px;
      border: 1px solid #ddd;
      border-radius: 5px;
      overflow: hidden;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #fff;
    }

    .thumbnail img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Columna Central: Descripción / Bullet Points */
    .product-info {
      flex: 2 1 400px;
      min-width: 300px;
      background: #fff;
      border-radius: 5px;
      padding: 20px;
      border: 1px solid #ddd;
    }

    .product-info h1 {
      font-size: 1.8rem;
      margin-bottom: 10px;
      line-height: 1.2;
    }

    .product-info .rating {
      display: flex;
      align-items: center;
      gap: 5px;
      margin-bottom: 15px;
    }

    .star {
      color: #ffa41c;
      font-size: 1.2rem;
    }

    .product-info .reviews-count {
      font-size: 0.9rem;
      color: #007185;
    }

    .product-info .price {
      font-size: 1.6rem;
      color: #b12704;
      margin: 15px 0;
    }

    .product-info .bullet-points {
      margin-bottom: 20px;
    }

    .bullet-points ul {
      list-style: disc;
      margin-left: 20px;
      line-height: 1.6;
      font-size: 0.95rem;
    }

    .product-description {
      margin-top: 20px;
      line-height: 1.5;
      font-size: 0.95rem;
      color: #333;
    }

    /* Columna Derecha: Buy Box */
    .buy-box {
      flex: 1 1 250px;
      min-width: 250px;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 20px;
      height: fit-content;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .buy-box .price {
      font-size: 1.4rem;
      color: #b12704;
      font-weight: bold;
    }

    .buy-box .stock {
      color: #007600;
      font-weight: bold;
    }

    .buy-box .shipping-info {
      font-size: 0.9rem;
      color: #565959;
    }

    .buy-box button {
      background: #ffa41c;
      border: none;
      padding: 12px 20px;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .buy-box button:hover {
      background: #f79805;
    }

    /* Footer con sección UNAB */
    footer {
      background: #131921;
      color: #fff;
      padding: 50px 30px;
      margin-top: 50px;
    }

    footer h2 {
      font-size: 1.8rem;
      margin-bottom: 20px;
      text-align: center;
    }

    .unab-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: center;
      gap: 30px;
      margin-bottom: 40px;
    }

    .unab-section img {
      max-width: 150px;
      border-radius: 50%;
      object-fit: cover;
    }

    .unab-details {
      max-width: 400px;
      text-align: center;
    }

    .unab-details h3 {
      margin-bottom: 10px;
      font-size: 1.4rem;
    }

    .unab-details p {
      margin-bottom: 15px;
      line-height: 1.5;
    }

    .unab-details a {
      display: inline-block;
      background: #ffc107;
      color: #000;
      padding: 10px 20px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .unab-details a:hover {
      background: #ffca2c;
    }

    .footer-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
    }

    .footer-links a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .footer-links a:hover {
      color: #ffc107;
    }

    .footer-copy {
      text-align: center;
      font-size: 0.9rem;
      color: #ccc;
    }
  </style>
</head>
<body>

  <!-- Encabezado -->
  <header>
    <div class="logo">Mi E-commerce</div>
    <div class="search-bar">
      <input type="text" placeholder="Buscar productos, marcas y más...">
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Categorías</a></li>
        <li><a href="#">Ofertas</a></li>
        <li><a href="#">Mi Cuenta</a></li>
      </ul>
    </nav>
  </header>

  <!-- Banner de ubicación / Envío -->
  <div class="location-banner">
    <img src="https://flagcdn.com/w20/co.png" alt="Bandera de Colombia">
    <span>Te mostramos los productos que se envían a <strong>Colombia</strong>. Para ver otros destinos, cambia tu dirección.</span>
  </div>

  <!-- Contenedor Principal -->
  <div class="container">
    <div class="product-detail">

      <!-- Columna Izquierda: Imágenes -->
      <div class="product-images">
        <div class="main-image" id="mainImageContainer">
          <img id="mainImage" src="public/images/unab.jpg" alt="Producto - Imagen Principal">
        </div>
        <div class="thumbnail-list">
          <div class="thumbnail" onclick="changeImage('public/images/unab.jpg')">
            <img src="public/images/unab.jpg" alt="Thumbnail 1">
          </div>
          <div class="thumbnail" onclick="changeImage('public/images/unab.jpg')">
            <img src="public/images/unab.jpg" alt="Thumbnail 2">
          </div>
          <div class="thumbnail" onclick="changeImage('public/images/unab.jpg')">
            <img src="public/images/unab.jpg" alt="Thumbnail 3">
          </div>
          <!-- Agrega más miniaturas si lo deseas -->
        </div>
      </div>

      <!-- Columna Central: Información y Bullet Points -->
      <div class="product-info">
        <h1>Portátil Gaming 2025 - AMD Ryzen 9 6900HX (16GB DDR5, 512GB SSD, Windows 11)</h1>
        <div class="rating">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">☆</span>
          <span class="reviews-count">(2,305 valoraciones)</span>
        </div>
        <div class="price">US$5,999.00</div>

        <div class="bullet-points">
          <ul>
            <li>Procesador AMD Ryzen 9 6900HX (8 núcleos, 16 hilos)</li>
            <li>Memoria RAM de 16 GB DDR5 para multitarea extrema</li>
            <li>Almacenamiento SSD de 512 GB NVMe ultrarrápido</li>
            <li>Pantalla FHD de 16 pulgadas, 144Hz, ideal para gaming</li>
            <li>Sistema Operativo Windows 11</li>
            <li>Tarjeta gráfica dedicada de última generación</li>
            <li>Teclado retroiluminado RGB, WiFi 6 y Bluetooth 5.2</li>
          </ul>
        </div>

        <div class="product-description">
          <p>
            Lleva tu experiencia de juego y productividad al siguiente nivel con este portátil 
            de alto rendimiento. Diseñado para gamers y creadores de contenido, combina 
            la potencia del procesador AMD Ryzen 9 con gráficos de última generación. 
            El sistema de refrigeración avanzado mantiene el equipo fresco incluso en 
            las sesiones más intensas. ¡Domina cada partida y disfruta de la mejor experiencia 
            multimedia!
          </p>
        </div>
      </div>

      <!-- Columna Derecha: Buy Box -->
      <div class="buy-box">
        <div class="price">US$5,999.00</div>
        <div class="stock">En stock</div>
        <div class="shipping-info">
          Envío GRATIS a Colombia. <br>
          Entrega estimada: 2 - 5 días hábiles.
        </div>
        <button>Agregar al Carrito</button>
        <button>Comprar Ahora</button>
        <small style="font-size: 0.8rem; color: #555;">
          Vendido y enviado por <strong>Mi E-commerce</strong>.
        </small>
      </div>

    </div>
  </div>

  <!-- Footer con sección UNAB -->
  <footer>
    <h2>Universidad Autónoma de Bucaramanga</h2>

    <div class="unab-section">
      <img src="public/images/unab.jpg" alt="UNAB Foto" />
      <div class="unab-details">
        <h3>Nombre del Estudiante / Docente</h3>
        <p>
          Descripción breve de la persona, su rol, su experiencia 
          o cualquier otro detalle que quieras destacar.
        </p>
        <a href="#">Ver Perfil</a>
      </div>
    </div>

    <div class="footer-links">
      <a href="#">Términos</a>
      <a href="#">Políticas</a>
      <a href="#">Soporte</a>
      <a href="#">Contacto</a>
    </div>

    <div class="footer-copy">
      &copy; 2025 Mi E-commerce. Todos los derechos reservados.
    </div>
  </footer>

  <!-- Script para cambiar la imagen principal al hacer clic en thumbnails -->
  <script>
    function changeImage(imageSrc) {
      const mainImage = document.getElementById('mainImage');
      mainImage.src = imageSrc;
    }
  </script>
</body>
</html>
