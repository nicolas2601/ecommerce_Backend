<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Ecommerce Increíble</title>
  <style>
    /* 
      Estilos Generales 
      -----------------
      Aquí encontrarás muchos estilos para lograr un diseño atractivo.
      Puedes modificar lo que necesites según tu gusto.
    */

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Arial", sans-serif;
    }

    body {
      background: #f7f7f7;
      color: #333;
    }

    header {
      width: 100%;
      background: #0d6efd;
      color: #fff;
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header .logo {
      font-size: 1.8rem;
      font-weight: bold;
    }

    header nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    header nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    header nav ul li a:hover {
      color: #ffc107;
    }

    /* Hero Section */
    .hero {
      width: 100%;
      height: 70vh;
      background: url('descarga.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      position: relative;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .hero-content p {
      font-size: 1.2rem;
      margin-bottom: 20px;
      max-width: 600px;
      margin: 0 auto 30px;
    }

    .hero-content a {
      background: #ffc107;
      color: #000;
      padding: 15px 25px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .hero-content a:hover {
      background: #ffca2c;
    }

    /* Sección de categorías */
    .categories {
      padding: 50px 30px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      background: #fff;
    }

    .category {
      flex: 1 1 250px;
      min-width: 250px;
      max-width: 300px;
      background: #f8f9fa;
      border: 1px solid #eaeaea;
      border-radius: 8px;
      text-align: center;
      padding: 20px;
      transition: box-shadow 0.3s;
    }

    .category:hover {
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .category img {
      max-width: 100%;
      height: 150px;
      object-fit: cover;
      margin-bottom: 15px;
      border-radius: 5px;
    }

    .category h3 {
      margin-bottom: 10px;
      color: #333;
    }

    .category p {
      font-size: 0.95rem;
      margin-bottom: 15px;
      color: #555;
    }

    .category a {
      display: inline-block;
      background: #0d6efd;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .category a:hover {
      background: #0b5ed7;
    }

    /* Sección de productos destacados */
    .featured-products {
      padding: 50px 30px;
      background: #f1f1f1;
    }

    .featured-products h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 40px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .product {
      background: #fff;
      border: 1px solid #eaeaea;
      border-radius: 8px;
      padding: 15px;
      text-align: center;
      transition: box-shadow 0.3s;
    }

    .product:hover {
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .product img {
      max-width: 100%;
      height: 200px;
      object-fit: cover;
      margin-bottom: 10px;
      border-radius: 5px;
    }

    .product h4 {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .product p {
      font-size: 0.95rem;
      margin-bottom: 15px;
      color: #777;
    }

    .product a {
      display: inline-block;
      background: #0d6efd;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
    }

    .product a:hover {
      background: #0b5ed7;
    }

    /* Sección de información extra */
    .info-section {
      padding: 50px 30px;
      background: #fff;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      align-items: center;
      justify-content: space-around;
    }

    .info-section img {
      max-width: 400px;
      border-radius: 10px;
      box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    }

    .info-content {
      max-width: 500px;
    }

    .info-content h2 {
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .info-content p {
      font-size: 1rem;
      line-height: 1.5;
      margin-bottom: 20px;
      color: #555;
    }

    .info-content a {
      background: #ffc107;
      color: #000;
      padding: 10px 20px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
    }

    .info-content a:hover {
      background: #ffca2c;
    }

    /* Sección de Testimonios (ejemplo) */
    .testimonials {
      padding: 50px 30px;
      background: #f8f9fa;
      text-align: center;
    }

    .testimonials h2 {
      font-size: 2rem;
      margin-bottom: 40px;
      text-transform: uppercase;
    }

    .testimonial-cards {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .testimonial {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      max-width: 300px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .testimonial img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }

    .testimonial h4 {
      margin-bottom: 5px;
      font-size: 1.1rem;
    }

    .testimonial p {
      font-size: 0.95rem;
      color: #666;
      line-height: 1.4;
    }

    /* Footer con sección de UNAB */
    footer {
      background: #343a40;
      color: #fff;
      padding: 50px 30px;
      position: relative;
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
      color: #aaa;
    }
  </style>
</head>
<body>

  <!-- Encabezado / Header -->
  <header>
    <div class="logo">Mi E-commerce</div>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Ofertas</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <!-- Sección Hero -->
  <section class="hero">
    <div class="hero-content">
      <h1>Bienvenido a la mejor tienda</h1>
      <p>
        Aquí encontrarás todo lo que necesitas y más. Disfruta de grandes
        descuentos, productos de calidad y un servicio de primera.
      </p>
      <a href="#">¡Compra ahora!</a>
    </div>
  </section>

  <!-- Sección de Categorías -->
  <section class="categories">
    <div class="category">
      <img src="unab.jpg" alt="Categoría 1" />
      <h3>Categoría 1</h3>
      <p>Descubre nuestros productos de categoría 1, con las mejores marcas.</p>
      <a href="#">Ver más</a>
    </div>
    <div class="category">
      <img src="descarga.jpg" alt="Categoría 2" />
      <h3>Categoría 2</h3>
      <p>Encuentra todo lo que necesitas para tu día a día.</p>
      <a href="#">Ver más</a>
    </div>
    <div class="category">
      <img src="unab.jpg" alt="Categoría 3" />
      <h3>Categoría 3</h3>
      <p>Calidad, innovación y buenos precios en nuestra categoría 3.</p>
      <a href="#">Ver más</a>
    </div>
    <div class="category">
      <img src="descarga.jpg" alt="Categoría 4" />
      <h3>Categoría 4</h3>
      <p>Productos únicos y exclusivos para tu estilo de vida.</p>
      <a href="#">Ver más</a>
    </div>
  </section>

  <!-- Sección de Productos Destacados -->
  <section class="featured-products">
    <h2>Productos Destacados</h2>
    <div class="product-grid">
      <div class="product">
        <img src="unab.jpg" alt="Producto 1" />
        <h4>Producto 1</h4>
        <p>Descripción breve del producto 1. Calidad garantizada.</p>
        <a href="#">Comprar</a>
      </div>
      <div class="product">
        <img src="descarga.jpg" alt="Producto 2" />
        <h4>Producto 2</h4>
        <p>¡Una oferta especial que no puedes dejar pasar!</p>
        <a href="#">Comprar</a>
      </div>
      <div class="product">
        <img src="unab.jpg" alt="Producto 3" />
        <h4>Producto 3</h4>
        <p>La mejor opción para tu hogar. ¡Aprovecha!</p>
        <a href="#">Comprar</a>
      </div>
      <div class="product">
        <img src="descarga.jpg" alt="Producto 4" />
        <h4>Producto 4</h4>
        <p>Elegancia y confort en un solo producto.</p>
        <a href="#">Comprar</a>
      </div>
    </div>
  </section>

  <!-- Sección de Información Extra -->
  <section class="info-section">
    <img src="descarga.jpg" alt="Imagen informativa" />
    <div class="info-content">
      <h2>¿Por qué elegirnos?</h2>
      <p>
        Somos una empresa comprometida con la calidad, la innovación y la
        satisfacción de nuestros clientes. Nuestros productos son cuidadosamente
        seleccionados para brindarte lo mejor del mercado a precios justos.
      </p>
      <p>
        Además, contamos con un equipo de atención al cliente que está siempre
        dispuesto a resolver cualquier duda o inconveniente. ¡Confía en
        nosotros!
      </p>
      <a href="#">Saber más</a>
    </div>
  </section>

  <!-- Sección de Testimonios -->
  <section class="testimonials">
    <h2>Testimonios de Clientes</h2>
    <div class="testimonial-cards">
      <div class="testimonial">
        <img src="unab.jpg" alt="Cliente 1" />
        <h4>Cliente 1</h4>
        <p>
          “Excelente servicio, productos de calidad y entrega rápida. 
          Sin duda volveré a comprar aquí.”
        </p>
      </div>
      <div class="testimonial">
        <img src="descarga.jpg" alt="Cliente 2" />
        <h4>Cliente 2</h4>
        <p>
          “El catálogo es muy amplio, encontré justo lo que buscaba 
          y a un precio inigualable.”
        </p>
      </div>
      <div class="testimonial">
        <img src="unab.jpg" alt="Cliente 3" />
        <h4>Cliente 3</h4>
        <p>
          “La atención al cliente es fantástica. Me ayudaron en todo momento 
          y resolvieron mis dudas.”
        </p>
      </div>
    </div>
  </section>

  <!-- Footer con sección UNAB -->
  <footer>
    <h2>Universidad Autónoma de Bucaramanga</h2>

    <div class="unab-section">
      <img src="unab.jpg" alt="UNAB Foto" />
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

</body>
</html>
