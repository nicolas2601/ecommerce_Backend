<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Creación de Productos</title>
  <style>
    /* 
      Estilos Globales 
      ----------------
      Ajusta colores, tipografías y tamaños a tu gusto.
    */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Arial", sans-serif;
    }

    body {
      background: url('descarga.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #333;
    }

    /* Encabezado */
    header {
      background: rgba(0, 0, 0, 0.6);
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: #fff;
    }

    header .logo {
      font-size: 1.8rem;
      font-weight: bold;
      letter-spacing: 2px;
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

    /* Contenedor principal del formulario */
    .form-container {
      max-width: 1200px;
      margin: 50px auto;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      padding: 40px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .form-title {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-title h1 {
      font-size: 2.2rem;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .form-title p {
      font-size: 1rem;
      color: #555;
    }

    /* Estilos del formulario */
    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    .form-group label {
      font-weight: bold;
      margin-bottom: 8px;
      color: #333;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="file"],
    .form-group textarea,
    .form-group select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
      outline: none;
      transition: border-color 0.3s;
    }

    .form-group input[type="text"]:focus,
    .form-group input[type="number"]:focus,
    .form-group input[type="file"]:focus,
    .form-group textarea:focus,
    .form-group select:focus {
      border-color: #0d6efd;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form-inline-group {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .form-inline-group .form-group {
      flex: 1 1 calc(50% - 20px);
      min-width: 200px;
    }

    /* Sección de radio buttons / checkboxes (ejemplo) */
    .radio-group, .checkbox-group {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
    }

    .radio-group label, .checkbox-group label {
      font-weight: normal;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    /* Botón de envío */
    .submit-btn {
      background: #0d6efd;
      color: #fff;
      padding: 15px 25px;
      font-size: 1rem;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
      align-self: flex-start;
    }

    .submit-btn:hover {
      background: #0b5ed7;
    }

    /* Sección de vista previa de imagen (opcional) */
    .image-preview {
      margin-top: 10px;
      display: none;
    }

    .image-preview img {
      max-width: 300px;
      border: 2px solid #ccc;
      border-radius: 5px;
      margin-top: 10px;
    }

    /* Footer con sección UNAB */
    footer {
      background: rgba(0, 0, 0, 0.7);
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
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Ofertas</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <!-- Contenedor del Formulario -->
  <div class="form-container">
    <div class="form-title">
      <h1>Crear Producto</h1>
      <p>Completa la siguiente información para agregar un nuevo producto a tu catálogo.</p>
    </div>

    <form id="productForm">
      <!-- Nombre del producto -->
      <div class="form-group">
        <label for="productName">Nombre del Producto:</label>
        <input type="text" id="productName" name="productName" placeholder="Ej: Zapatos Deportivos" required>
      </div>

      <!-- Descripción del producto -->
      <div class="form-group">
        <label for="productDescription">Descripción:</label>
        <textarea id="productDescription" name="productDescription" placeholder="Describe el producto en detalle..." required></textarea>
      </div>

      <!-- Sección en línea: Precio y Stock -->
      <div class="form-inline-group">
        <div class="form-group">
          <label for="price">Precio (USD):</label>
          <input type="number" step="0.01" id="price" name="price" placeholder="Ej: 49.99" required>
        </div>
        <div class="form-group">
          <label for="stock">Stock:</label>
          <input type="number" id="stock" name="stock" placeholder="Ej: 100" required>
        </div>
      </div>

      <!-- Categoría -->
      <div class="form-group">
        <label for="category">Categoría:</label>
        <select id="category" name="category" required>
          <option value="">--Selecciona una categoría--</option>
          <option value="ropa">Ropa</option>
          <option value="accesorios">Accesorios</option>
          <option value="tecnologia">Tecnología</option>
          <option value="hogar">Hogar</option>
          <option value="deportes">Deportes</option>
        </select>
      </div>

      <!-- Imagen principal -->
      <div class="form-group">
        <label for="mainImage">Imagen Principal del Producto:</label>
        <input type="file" id="mainImage" name="mainImage" accept="image/*" required>
        <div class="image-preview" id="imagePreview">
          <span>Vista previa:</span>
          <img id="previewImg" src="#" alt="Vista previa de la imagen" />
        </div>
      </div>

      <!-- Estado del producto (radio) -->
      <div class="form-group">
        <label>Estado del Producto:</label>
        <div class="radio-group">
          <label>
            <input type="radio" name="status" value="nuevo" checked> Nuevo
          </label>
          <label>
            <input type="radio" name="status" value="usado"> Usado
          </label>
        </div>
      </div>

      <!-- Envío Gratis (checkbox) -->
      <div class="form-group">
        <label>Opciones de Envío:</label>
        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="freeShipping" value="gratis"> Envío Gratis
          </label>
          <label>
            <input type="checkbox" name="expressShipping" value="express"> Envío Express
          </label>
        </div>
      </div>

      <!-- Botón de Envío -->
      <button type="submit" class="submit-btn">Crear Producto</button>
    </form>
  </div>

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

  <!-- Script Opcional para vista previa de la imagen -->
  <script>
    const mainImageInput = document.getElementById('mainImage');
    const imagePreviewDiv = document.getElementById('imagePreview');
    const previewImg = document.getElementById('previewImg');

    mainImageInput.addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          previewImg.src = e.target.result;
          imagePreviewDiv.style.display = 'block';
        }
        reader.readAsDataURL(file);
      } else {
        imagePreviewDiv.style.display = 'none';
      }
    });

    // Manejo de envío del formulario (ejemplo básico)
    const productForm = document.getElementById('productForm');
    productForm.addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Producto creado con éxito (simulación). Aquí puedes implementar tu lógica para enviar los datos al servidor.');
      productForm.reset();
      imagePreviewDiv.style.display = 'none';
    });
  </script>
</body>
</html>
