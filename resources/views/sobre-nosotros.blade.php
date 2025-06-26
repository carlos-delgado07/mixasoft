@extends('layouts.app')

@section('content')
<main class="main">


<!-- Sección de Acerca de -->
<section id="about" class="about section">

  <div class="container">

    <div class="row position-relative">

      <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="assets/img/about.webp"></div>

      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
        <h2 class="inner-title">¿Cómo comenzó Mixasoft?</h2>
        <div class="our-story">
          <h4>Desde 2024</h4>
          <h3>Nuestra Historia</h3>
          <p class="text-muted">Desde nuestra fundación en 2024, Mixasoft nació con una visión clara: transformar los negocios a través del poder de la tecnología. Fundada por un equipo apasionado de innovadores, comenzamos ayudando a pequeñas empresas a digitalizar sus procesos.</p>
        <p class="text-muted">Con el paso del tiempo, nuestra experiencia y reputación crecieron. Hoy trabajamos con empresas de diversas industrias, desarrollando soluciones personalizadas, escalables y seguras.</p>
        <p class="text-muted">Creemos en el valor del trabajo colaborativo, la mejora continua y en entregar resultados tangibles que marquen la diferencia.</p>

          <div class="watch-video d-flex align-items-center position-relative">
            <i class="bi bi-play-circle"></i>
            <a href="#" class="glightbox stretched-link">Ver Video</a>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Sección de Acerca de -->

<section id="soluciones" class="section py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold">Soluciones a medida para tu negocio</h2>
      <p class="text-muted">Creamos plataformas y soluciones que transforman tu modelo de negocio, optimizan tus procesos y mejoran la experiencia de tus clientes.</p>
    </div>
    <div class="row text-center g-4">
      
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <i class="bi bi-cart-check fs-1 text-primary"></i>
            <h5 class="card-title mt-3">E-commerce a medida</h5>
            <p class="card-text">Diseñamos tiendas online personalizadas con un enfoque en conversión, seguridad, y experiencia de usuario, optimizando el flujo de ventas y adaptándonos a tus necesidades comerciales.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <i class="bi bi-gear fs-1 text-success"></i>
            <h5 class="card-title mt-3">Automatización de procesos</h5>
            <p class="card-text">Automatizamos tus operaciones y procesos internos para ahorrar tiempo, reducir costos, mejorar la productividad y permitirte centrarte en el crecimiento de tu negocio.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <i class="bi bi-person-lines-fill fs-1 text-warning"></i>
            <h5 class="card-title mt-3">Gestión de relaciones con clientes</h5>
            <p class="card-text">Implementamos sistemas CRM avanzados que mejoran la interacción con tus clientes, ayudando a aumentar la satisfacción, fidelidad y las oportunidades de ventas adicionales.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <i class="bi bi-wallet2 fs-1 text-danger"></i>
            <h5 class="card-title mt-3">Soluciones de pago integradas</h5>
            <p class="card-text">Integramos sistemas de pago seguros y eficientes, permitiendo a tus clientes realizar transacciones de forma fácil y rápida, mejorando la experiencia de compra online.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <i class="bi bi-chat-dots fs-1 text-info"></i>
            <h5 class="card-title mt-3">Soporte y atención al cliente</h5>
            <p class="card-text">Creamos sistemas de soporte al cliente que incluyen chatbots y atención en tiempo real, mejorando la comunicación con los usuarios y aumentando la satisfacción del cliente.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <i class="bi bi-bar-chart fs-1 text-secondary"></i>
            <h5 class="card-title mt-3">Análisis y optimización de datos</h5>
            <p class="card-text">Desarrollamos soluciones para la recolección, análisis e interpretación de datos, proporcionando información valiosa para la toma de decisiones estratégicas y la mejora continua de tus operaciones.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Sección de Equipo -->
<section id="team" class="team section light-background">

  <!-- Título de la Sección -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Nuestro Equipo</h2>
    <p>Nuestro equipo está dedicado a proporcionar las mejores soluciones mediante la colaboración, la creatividad y la experiencia técnica.</p>
  </div><!-- Fin Título de la Sección -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member">
          <div class="member-img">
            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Walter White</h4>
            <span>Director Ejecutivo</span>
          </div>
        </div>
      </div><!-- Fin Miembro del Equipo -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member">
          <div class="member-img">
            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Sarah Jhonson</h4>
            <span>Gerente de Producto</span>
          </div>
        </div>
      </div><!-- Fin Miembro del Equipo -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member">
          <div class="member-img">
            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>William Anderson</h4>
            <span>Director de Tecnología</span>
          </div>
        </div>
      </div><!-- Fin Miembro del Equipo -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
        <div class="team-member">
          <div class="member-img">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Amanda Jepson</h4>
            <span>Contadora</span>
          </div>
        </div>
      </div><!-- Fin Miembro del Equipo -->

    </div>

  </div>

</section><!-- /Sección de Equipo -->



<!-- Sección de Clientes -->
<section id="clients" class="clients section">

  <!-- Título de la Sección -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Clientes</h2>
    <p>Estamos orgullosos de trabajar con clientes diversos, entregando soluciones que los ayudan a alcanzar sus objetivos.</p>
  </div><!-- Fin Título de la Sección -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0 clients-wrap">

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
      </div><!-- Fin Cliente -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
      </div><!-- Fin Cliente -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
      </div><!-- Fin Cliente -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
      </div><!-- Fin Cliente -->

    </div>

  </div>

</section><!-- /Sección de Clientes -->

</main>
@endsection
