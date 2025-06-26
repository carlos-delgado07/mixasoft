@extends('layouts.app')

@section('content')
<main class="main">

  {{-- HERO SECTION --}}
  <section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      
      {{-- Slides --}}
      @foreach ([
    ['title' => 'Innovando en Desarrollo de Software', 'text' => 'Creamos soluciones tecnológicas personalizadas para empresas de todos los tamaños, adaptadas a las necesidades específicas de cada cliente, asegurando un impacto real en su productividad y competitividad.', 'img' => 'hero-carousel-1.webp'],
    ['title' => 'Software a la medida para tu empresa', 'text' => 'Desarrollamos aplicaciones robustas, seguras y escalables, diseñadas para facilitar el crecimiento de tu empresa. Nuestra tecnología es flexible y capaz de adaptarse a cualquier desafío que tu negocio enfrente.', 'img' => 'hero-carousel-2.webp'],
    ['title' => 'Transformamos ideas en software', 'text' => 'Convertimos tus ideas en soluciones tecnológicas innovadoras de alta calidad, con un enfoque centrado en el usuario y la eficiencia operativa. Trabajamos contigo en cada etapa del proceso para garantizar el éxito de tu proyecto.', 'img' => 'hero-carousel-3.webp'],
    ] as $index => $slide)

        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <img src="{{ asset("assets/img/hero-carousel/{$slide['img']}") }}" class="d-block w-100" alt="Slide {{ $index + 1 }}">
          <div class="container text-white">
            <h2>{{ $slide['title'] }}</h2>
            <p>{{ $slide['text'] }}</p>
            <a href="/contacto" class="btn-get-started">Contactanos</a>
          </div>
        </div>
      @endforeach

      {{-- Controls --}}
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left"></span>
      </a>
      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right"></span>
      </a>
    </div>
  </section>

  {{-- ABOUT --}}
<section id="about" class="about section py-5 bg-light">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="zoom-in">
        <img src="{{ asset('assets/img/about.webp') }}" class="img-fluid rounded shadow" alt="Nuestra Historia">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <h2 class="mb-3">Nuestra Historia</h2>
        <p class="text-muted">Desde nuestros inicios en 2024, Mixasoft nació con una visión clara: transformar negocios mediante el poder de la tecnología. Fundada por un equipo apasionado por la innovación, comenzamos ayudando a pequeñas empresas a digitalizar sus procesos.</p>
        <p class="text-muted">Con el paso del tiempo, nuestra experiencia y reputación crecieron. Hoy, trabajamos con empresas de diferentes sectores, desarrollando soluciones a medida, escalables y seguras.</p>
        <p class="text-muted">Creemos en el valor del trabajo colaborativo, la mejora continua y la entrega de resultados tangibles que marquen la diferencia.</p>
      </div>
    </div>

    <div class="row text-center" data-aos="fade-up">
      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100 bg-white">
          <i class="bi bi-lightbulb display-4 text-dark-green mb-3"></i>
          <h5 class="fw-bold">Innovación Constante</h5>
          <p class="text-muted">Exploramos nuevas tecnologías para ofrecer soluciones modernas, efectivas y duraderas.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100 bg-white">
          <i class="bi bi-people-fill display-4 text-dark-green mb-3"></i>
          <h5 class="fw-bold">Enfoque Humano</h5>
          <p class="text-muted">Nos importa tu visión. Trabajamos contigo como aliados estratégicos en cada etapa del desarrollo.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100 bg-white">
          <i class="bi bi-award-fill display-4 text-dark-green mb-3"></i>
          <h5 class="fw-bold">Compromiso con la Calidad</h5>
          <p class="text-muted">Aplicamos buenas prácticas, metodologías ágiles y estándares de alto nivel en cada proyecto.</p>
        </div>
      </div>
    </div>
  </div>
</section>


  {{-- SERVICES --}}
  <section id="services" class="services section bg-light py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>Nuestros Servicios</h2>
      <p>Impulsamos tu negocio con soluciones digitales eficaces</p>
    </div>

    <div class="row g-4">
      @foreach([
        ['icon' => 'laptop-fill', 'title' => 'Desarrollo de Aplicaciones Web', 'desc' => 'Desarrollamos aplicaciones web personalizadas, como paneles de administración, e-commerce y SaaS. Utilizamos tecnologías como React, Angular, Vue, Node.js, Django, y creamos APIs REST/GraphQL.'],
        ['icon' => 'phone', 'title' => 'Desarrollo de Aplicaciones Móviles', 'desc' => 'Desarrollamos apps nativas para Android (Kotlin/Java) e iOS (Swift), y apps híbridas o multiplataforma (Flutter, React Native). También gestionamos la publicación en Google Play y App Store.'],
        ['icon' => 'pencil-square', 'title' => 'Diseño UX/UI', 'desc' => 'Creamos prototipos, wireframes y diseños de interfaces funcionales y atractivas, garantizando una experiencia de usuario intuitiva y eficiente.'],
        ['icon' => 'search', 'title' => 'Consultoría y Análisis de Requerimientos', 'desc' => 'Realizamos un análisis exhaustivo de las necesidades de tu negocio, definimos el roadmap técnico y funcional y elegimos las tecnologías más adecuadas para tu proyecto.'],
        ['icon' => 'tools', 'title' => 'Mantenimiento y Soporte', 'desc' => 'Ofrecemos servicios de mantenimiento proactivo y reactivo, corrección de errores (bugs), actualizaciones de software y optimización de rendimiento y seguridad.'],
        ['icon' => 'plug', 'title' => 'Integración de Sistemas y APIs', 'desc' => 'Facilitamos la conexión con servicios externos (pasarelas de pago, CRMs, ERPs) y desarrollamos APIs personalizadas para automatizar procesos y mejorar la interoperabilidad.']
      ] as $service)
      <div class="col-md-4">
        <div class="card h-100 shadow text-center p-4">
          <div class="mb-3">
            <i class="bi bi-{{ $service['icon'] }} display-4 text-dark-green"></i>
          </div>
          <h5 class="card-title">{{ $service['title'] }}</h5>
          <p class="card-text">{{ $service['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section id="soluciones" class="section py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold">Soluciones a medida para tu negocio</h2>
      <p class="text-muted">Creamos plataformas y soluciones que transforman tu modelo de negocio, optimizan tus procesos y mejoran la experiencia de tus clientes.</p>
    </div>
    <div class="row text-center g-4">

      <!-- E-commerce -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-lg rounded-3" style="background-color: #f4f7fa;">
          <div class="card-body">
            <i class="bi bi-cart-check fs-1 text-primary"></i>
            <h5 class="card-title mt-3 text-dark">E-commerce a medida</h5>
            <p class="card-text text-muted">Diseñamos tiendas online personalizadas con un enfoque en conversión, seguridad, y experiencia de usuario, optimizando el flujo de ventas y adaptándonos a tus necesidades comerciales.</p>
          </div>
        </div>
      </div>

      <!-- Automatización -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-lg rounded-3" style="background-color: #f4f7fa;">
          <div class="card-body">
            <i class="bi bi-gear fs-1 text-success"></i>
            <h5 class="card-title mt-3 text-dark">Automatización de procesos</h5>
            <p class="card-text text-muted">Automatizamos tus operaciones y procesos internos para ahorrar tiempo, reducir costos, mejorar la productividad y permitirte centrarte en el crecimiento de tu negocio.</p>
          </div>
        </div>
      </div>

      <!-- CRM -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-lg rounded-3" style="background-color: #f4f7fa;">
          <div class="card-body">
            <i class="bi bi-person-lines-fill fs-1 text-warning"></i>
            <h5 class="card-title mt-3 text-dark">Gestión de relaciones con clientes</h5>
            <p class="card-text text-muted">Implementamos sistemas CRM avanzados que mejoran la interacción con tus clientes, ayudando a aumentar la satisfacción, fidelidad y las oportunidades de ventas adicionales.</p>
          </div>
        </div>
      </div>

      <!-- Soluciones de pago -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-lg rounded-3" style="background-color: #f4f7fa;">
          <div class="card-body">
            <i class="bi bi-wallet2 fs-1 text-danger"></i>
            <h5 class="card-title mt-3 text-dark">Soluciones de pago integradas</h5>
            <p class="card-text text-muted">Integramos sistemas de pago seguros y eficientes, permitiendo a tus clientes realizar transacciones de forma fácil y rápida, mejorando la experiencia de compra online.</p>
          </div>
        </div>
      </div>

      <!-- Soporte -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-lg rounded-3" style="background-color: #f4f7fa;">
          <div class="card-body">
            <i class="bi bi-chat-dots fs-1 text-info"></i>
            <h5 class="card-title mt-3 text-dark">Soporte y atención al cliente</h5>
            <p class="card-text text-muted">Creamos sistemas de soporte al cliente que incluyen chatbots y atención en tiempo real, mejorando la comunicación con los usuarios y aumentando la satisfacción del cliente.</p>
          </div>
        </div>
      </div>

      <!-- Análisis de datos -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-lg rounded-3" style="background-color: #f4f7fa;">
          <div class="card-body">
            <i class="bi bi-bar-chart fs-1 text-secondary"></i>
            <h5 class="card-title mt-3 text-dark">Análisis y optimización de datos</h5>
            <p class="card-text text-muted">Desarrollamos soluciones para la recolección, análisis e interpretación de datos, proporcionando información valiosa para la toma de decisiones estratégicas y la mejora continua de tus operaciones.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



{{-- PORTFOLIO --}}
<section id="portfolio" class="portfolio section py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>Proyectos Destacados</h2>
      <p>Algunos de nuestros desarrollos más recientes</p>
    </div>
    <div class="row g-4">
      @foreach(range(1, 9) as $i)
      <div class="col-md-4">
        <div class="shadow">
          <img src="{{ asset("assets/img/masonry-portfolio/proyecto$i.png") }}" class="img-fluid" alt="Proyecto {{ $i }}">
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- Agregar Animaciones AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>




<section id="cta" class="cta section bg-white text-dark py-5">
  <div class="container text-center">
    <h2 class="mb-3">¿Listo para transformar tu negocio con tecnología?</h2>
    <p class="mb-4">Hablemos sobre tu idea, estamos listos para llevarla al siguiente nivel.</p>
    <a href="/contacto" class="btn btn-dark btn-lg">Comienza tu proyecto</a>
  </div>
</section>



</main>
@endsection
