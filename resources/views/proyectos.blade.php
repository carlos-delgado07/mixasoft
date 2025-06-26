@extends('layouts.app')

@section('content')

<main class="main">

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Todo</li>
                    <li data-filter=".filter-app">Aplicación</li>
                    <li data-filter=".filter-product">Producto</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-web">Sitio Web</li>
                    <li data-filter=".filter-mobile-app">Aplicación Móvil</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  <!-- Proyecto 1: Aplicación Móvil - FitApp -->
  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
    <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="FitApp">
    <div class="portfolio-info">
      <h4>FitApp</h4>
      <p>Una app para entrenamientos y dietas personalizadas.</p>
      <a href="assets/img/masonry-portfolio/fitapp.jpg" title="FitApp" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="portfolio-details.html" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div>

  <!-- Proyecto 2: Sitio Web - ShopMaster -->
  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
    <img src="assets/img/masonry-portfolio/shopmaster.jpg" class="img-fluid" alt="ShopMaster">
    <div class="portfolio-info">
      <h4>ShopMaster</h4>
      <p>Tienda en línea para compras fáciles y seguras.</p>
      <a href="assets/img/masonry-portfolio/shopmaster.jpg" title="ShopMaster" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="portfolio-details.html" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div>

  <!-- Proyecto 3: Branding - Fresh Bites -->
  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
    <img src="assets/img/masonry-portfolio/freshbites.jpg" class="img-fluid" alt="Fresh Bites">
    <div class="portfolio-info">
      <h4>Fresh Bites</h4>
      <p>Rediseño completo de la marca para una tienda de alimentos frescos.</p>
      <a href="assets/img/masonry-portfolio/freshbites.jpg" title="Fresh Bites" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="portfolio-details.html" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div>

  <!-- Proyecto 4: Aplicación Móvil - MealPlanner -->
  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
    <img src="assets/img/masonry-portfolio/mealplanner.jpg" class="img-fluid" alt="MealPlanner">
    <div class="portfolio-info">
      <h4>MealPlanner</h4>
      <p>Planifica tus comidas saludables con un seguimiento fácil.</p>
      <a href="assets/img/masonry-portfolio/mealplanner.jpg" title="MealPlanner" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="portfolio-details.html" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div>

  <!-- Proyecto 5: Sitio Web - Travel Diaries -->
  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
    <img src="assets/img/masonry-portfolio/travel-diaries.jpg" class="img-fluid" alt="Travel Diaries">
    <div class="portfolio-info">
      <h4>Travel Diaries</h4>
      <p>Blog interactivo para compartir experiencias de viaje.</p>
      <a href="assets/img/masonry-portfolio/travel-diaries.jpg" title="Travel Diaries" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="portfolio-details.html" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div>

  <!-- Proyecto 6: Branding - TechNext -->
  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
    <img src="assets/img/masonry-portfolio/technext.jpg" class="img-fluid" alt="TechNext">
    <div class="portfolio-info">
      <h4>TechNext</h4>
      <p>Rediseño de marca para una empresa tecnológica.</p>
      <a href="assets/img/masonry-portfolio/technext.jpg" title="TechNext" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="portfolio-details.html" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div>
</div>


            </div>

        </div>

    </section><!-- /Portfolio Section -->

</main>

@endsection
