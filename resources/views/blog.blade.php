@extends('layouts.app')

@section('content')

<main class="main">

<!-- Blog Posts Section -->
<section id="blog-posts" class="blog-posts section">

  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/web-development.jpg" class="img-fluid" alt="Desarrollo de Aplicaciones Web">
            <span class="post-date">Abril 10</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Desarrollo de Aplicaciones Web: Mejores Prácticas y Herramientas</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Desarrollo de Aplicaciones Web</span>
              </div>
            </div>

            <p>
              En el desarrollo de aplicaciones web, la selección de las herramientas adecuadas y seguir las mejores prácticas puede hacer una gran diferencia. Este artículo analiza las tecnologías más utilizadas y cómo implementarlas de manera eficiente.
            </p>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/mobile-development.jpg" class="img-fluid" alt="Desarrollo de Aplicaciones Móviles">
            <span class="post-date">Abril 15</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Desarrollo de Aplicaciones Móviles: Tendencias y Futuro</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Desarrollo de Aplicaciones Móviles</span>
              </div>
            </div>

            <p>
              El desarrollo de aplicaciones móviles ha revolucionado la forma en que interactuamos con el mundo digital. Este artículo explora las últimas tendencias en el desarrollo de apps y qué esperar para el futuro.
            </p>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/ux-ui-design.jpg" class="img-fluid" alt="Diseño UX/UI">
            <span class="post-date">Abril 20</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Diseño UX/UI: Cómo Crear Experiencias Inolvidables</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Diseño UX/UI</span>
              </div>
            </div>

            <p>
              El diseño UX/UI juega un papel crucial en el éxito de cualquier aplicación o página web. En este artículo, discutimos cómo implementar un diseño intuitivo y atractivo que mejore la experiencia del usuario.
            </p>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/consulting-analysis.jpg" class="img-fluid" alt="Consultoría y Análisis de Requerimientos">
            <span class="post-date">Mayo 02</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Consultoría y Análisis de Requerimientos: Claves para el Éxito del Proyecto</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">John Parker</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Consultoría y Análisis</span>
              </div>
            </div>

            <p>
              Un análisis de requerimientos bien ejecutado puede ahorrar tiempo y recursos. Este artículo explica cómo una consultoría adecuada puede garantizar el éxito de cualquier proyecto tecnológico.
            </p>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/support-maintenance.jpg" class="img-fluid" alt="Mantenimiento y Soporte">
            <span class="post-date">Mayo 10</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Mantenimiento y Soporte: Asegura el Rendimiento de tus Sistemas</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">Maria White</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Mantenimiento y Soporte</span>
              </div>
            </div>

            <p>
              El mantenimiento y soporte son esenciales para mantener la estabilidad de las aplicaciones. Este artículo te ofrece consejos para garantizar que tus sistemas sigan funcionando de manera eficiente.
            </p>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/ecommerce-integration.jpg" class="img-fluid" alt="Ecommerce">
            <span class="post-date">Mayo 20</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Ecommerce: Soluciones para Potenciar tu Negocio Online</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Ecommerce</span>
              </div>
            </div>

            <p>
              El ecommerce ha transformado la forma de hacer negocios. Este artículo explica cómo puedes aprovechar las plataformas de comercio electrónico para mejorar la experiencia de compra de tus clientes.
            </p>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

    </div>
  </div>

</section><!-- End Blog Posts Section -->

</main>
@endsection
