<footer id="footer" class="footer dark-background">
  <div class="container footer-top">
    <div class="row gy-4">

      <div class="col-lg-4 col-md-6 footer-about">
        <a href="/" class="logo d-flex align-items-center me-auto">
          <h1 class="sitename">&lt; mixasoft &gt;</h1>
        </a>
        <div class="footer-contact pt-3">
          <p>Av. Bush 2do anillo</p>
          <p>Santa Cruz, Bolivia</p>
          <p class="mt-3"><strong>Celular:</strong> <span>+591 62457146</span></p>
          <p><strong>Email:</strong> <span>mixasoft.bo@gmail.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Links</h4>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/sobre-nosotros">Sobre Nosotros</a></li>
          <li><a href="/servicios">Servicios</a></li>
          <li><a href="/terminos-y-condiciones">Terminos y Condiciones</a></li>
          <li><a href="/politicas-de-privacidad">Politicas de Privacidad</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Nuestros Servicios</h4>
        <ul>
          <li><a href="#">Diseño Web</a></li>
          <li><a href="#">Desarrollo Web</a></li>
          <li><a href="#">Desarrollo Movil</a></li>
          <li><a href="#">Ecommerce</a></li>
          <li><a href="#">Sistema ERP</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12 footer-newsletter">
        <h4>Novedades</h4>
        <p>¡Suscríbete y recibe las últimas novedades sobre nuestros productos y servicios!</p>
        <form id="newsletter-form" class="php-email-form" onsubmit="return false;">
          <div class="newsletter-form">
            <input type="email" id="email" name="email" required placeholder="Tu correo electrónico" />
            <input type="submit" value="Suscríbete" onclick="subscribe()" />
          </div>
          <div id="loading" style="display:none;">Cargando...</div>
          <div id="message"></div>
        </form>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="sitename">&lt; mixasoft &gt;</strong> <span>All Rights Reserved</span></p>
  </div>
</footer>

<script>
  function subscribe() {
    const emailInput = document.getElementById('email');
    const messageDiv = document.getElementById('message');
    const loadingDiv = document.getElementById('loading');

    const email = emailInput.value.trim();

    // Validación básica del email
    if (!email || !email.includes('@')) {
      messageDiv.style.color = 'red';
      messageDiv.textContent = 'Por favor, ingresa un correo válido.';
      return;
    }

    messageDiv.textContent = '';
    loadingDiv.style.display = 'block';

    // Simular carga con timeout
    setTimeout(() => {
      loadingDiv.style.display = 'none';
      messageDiv.style.color = 'green';
      messageDiv.textContent = 'Correo aceptado exitosamente.';
      emailInput.value = '';
    }, 1500);
  }
</script>
