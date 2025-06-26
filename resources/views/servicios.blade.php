@extends('layouts.app')

@section('content')

<main class="main">

<section id="services" class="services section light-background">
  <div class="container">
    <div class="row gy-4">
      
    <div class="section-title text-center mb-5">
      <h2>Nuestros Servicios</h2>
      <p>Impulsamos tu negocio con soluciones digitales eficaces</p>
    </div>

      <!-- Servicio 1: Desarrollo de Aplicaciones Web -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item item-cyan position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path fill="#f5f5f5" d="M300,521.001..."></path>
            </svg>
            <i class="bi bi-laptop"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Desarrollo de Aplicaciones Web</h3>
          </a>
          <p>Desarrollamos aplicaciones web personalizadas, como paneles de administración, e-commerce y SaaS. Utilizamos tecnologías modernas como React, Angular, Vue, Node.js, Django, entre otras. También creamos APIs REST/GraphQL para integrar tus servicios.</p>
        </div>
      </div>

      <!-- Servicio 2: Desarrollo de Aplicaciones Móviles -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path fill="#f5f5f5" d="M300,582.06..."></path>
            </svg>
            <i class="bi bi-phone"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Desarrollo de Aplicaciones Móviles</h3>
          </a>
          <p>Desarrollamos aplicaciones móviles nativas para Android (Kotlin/Java) e iOS (Swift), así como aplicaciones híbridas o multiplataforma con tecnologías como Flutter y React Native. También nos encargamos de la publicación en Google Play y App Store.</p>
        </div>
      </div>

      <!-- Servicio 3: Diseño UX/UI -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path fill="#f5f5f5" d="M300,541.50..."></path>
            </svg>
            <i class="bi bi-pencil-square"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Diseño UX/UI</h3>
          </a>
          <p>Nos especializamos en la creación de prototipos y wireframes, diseño de interfaces atractivas y funcionales, y pruebas de usabilidad para garantizar una experiencia de usuario óptima. Nuestra meta es hacer tu producto intuitivo y fácil de usar.</p>
        </div>
      </div>

      <!-- Servicio 4: Consultoría y Análisis de Requerimientos -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item item-red position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path fill="#f5f5f5" d="M300,503.46..."></path>
            </svg>
            <i class="bi bi-search"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Consultoría y Análisis de Requerimientos</h3>
          </a>
          <p>Realizamos un análisis detallado de las necesidades de tu empresa y de los usuarios finales para definir un roadmap técnico y funcional. Ayudamos en la definición de la arquitectura de software y en la elección de las tecnologías más adecuadas para tu proyecto.</p>
        </div>
      </div>

      <!-- Servicio 5: Mantenimiento y Soporte -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item item-lightgreen position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path fill="#f5f5f5" d="M300,469.01..."></path>
            </svg>
            <i class="bi bi-tools"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Mantenimiento y Soporte</h3>
          </a>
          <p>Ofrecemos mantenimiento proactivo y reactivo, incluyendo la corrección de errores (bugs), actualizaciones periódicas de software, y optimización de rendimiento y seguridad de tus sistemas.</p>
        </div>
      </div>

      <!-- Servicio 6: Integración de Sistemas y APIs -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item item-purple position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path fill="#f5f5f5" d="M300,460.00..."></path>
            </svg>
            <i class="bi bi-plug"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Integración de Sistemas y APIs</h3>
          </a>
          <p>Facilitamos la conexión con servicios externos como pasarelas de pago, CRMs, ERPs, y más. Automatizamos procesos mediante integraciones y desarrollamos APIs personalizadas para la interoperabilidad entre sistemas.</p>
        </div>
      </div>

    </div>
  </div>
</section>

</main>
@endsection
