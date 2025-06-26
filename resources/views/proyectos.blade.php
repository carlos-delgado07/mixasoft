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

                    <!-- Proyecto 1 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/proyecto1.png" class="img-fluid" alt="Proyecto 1">
                        <div class="portfolio-info">
                            <h4>Proyecto 1</h4>
                            <p>Descripción del Proyecto 1.</p>
                            <a href="assets/img/masonry-portfolio/proyecto1.png" class="glightbox preview-link" title="Proyecto 1" data-gallery="portfolio-gallery-app"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="Más detalles"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <!-- Proyecto 2 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/proyecto2.png" class="img-fluid" alt="Proyecto 2">
                        <div class="portfolio-info">
                            <h4>Proyecto 2</h4>
                            <p>Descripción del Proyecto 2.</p>
                            <a href="assets/img/masonry-portfolio/proyecto2.png" class="glightbox preview-link" title="Proyecto 2" data-gallery="portfolio-gallery-product"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="Más detalles"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <!-- Proyecto 3 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/proyecto3.png" class="img-fluid" alt="Proyecto 3">
                        <div class="portfolio-info">
                            <h4>Proyecto 3</h4>
                            <p>Descripción del Proyecto 3.</p>
                            <a href="assets/img/masonry-portfolio/proyecto3.png" class="glightbox preview-link" title="Proyecto 3" data-gallery="portfolio-gallery-branding"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="Más detalles"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <!-- Proyecto 4 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                        <img src="assets/img/masonry-portfolio/proyecto4.png" class="img-fluid" alt="Proyecto 4">
                        <div class="portfolio-info">
                            <h4>Proyecto 4</h4>
                            <p>Descripción del Proyecto 4.</p>
                            <a href="assets/img/masonry-portfolio/proyecto4.png" class="glightbox preview-link" title="Proyecto 4" data-gallery="portfolio-gallery-web"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="Más detalles"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <!-- Proyecto 5 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mobile-app">
                        <img src="assets/img/masonry-portfolio/proyecto5.png" class="img-fluid" alt="Proyecto 5">
                        <div class="portfolio-info">
                            <h4>Proyecto 5</h4>
                            <p>Descripción del Proyecto 5.</p>
                            <a href="assets/img/masonry-portfolio/proyecto5.png" class="glightbox preview-link" title="Proyecto 5" data-gallery="portfolio-gallery-mobile"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="Más detalles"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <!-- Proyecto 6 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/proyecto6.png" class="img-fluid" alt="Proyecto 6">
                        <div class="portfolio-info">
                            <h4>Proyecto 6</h4>
                            <p>Descripción del Proyecto 6.</p>
                            <a href="assets/img/masonry-portfolio/proyecto6.png" class="glightbox preview-link" title="Proyecto 6" data-gallery="portfolio-gallery-app"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="Más detalles"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <!-- Proyecto 7 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/proyecto7.png" class="img-fluid" alt="Proyecto 7">
                        <div class="portfolio-info">
                            <h4>Proyecto 7</h4>
                            <p>Descripción del Proyecto 7.</p>
                            <a href="assets/img/masonry-portfolio/proyecto7.png" class="glightbox preview-link" title="Proyecto 7" data-gallery="portfolio-gallery-product"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="Más detalles"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <!-- Proyecto 8 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/proyecto8.png" class="img-fluid" alt="Proyecto 8">
                        <div class="portfolio-info">
                            <h4>Proyecto 8</h4>
                            <p>Descripción del Proyecto 8.</p>
                            <a href="assets/img/masonry-portfolio/proyecto8.png" class="glightbox preview-link" title="Proyecto 8" data-gallery="portfolio-gallery-branding"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="Más detalles"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                    <!-- Proyecto 9 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mobile-app">
                        <img src="assets/img/masonry-portfolio/proyecto9.png" class="img-fluid" alt="Proyecto 9">
                        <div class="portfolio-info">
                            <h4>Proyecto 9</h4>
                            <p>Descripción del Proyecto 9.</p>
                            <a href="assets/img/masonry-portfolio/proyecto9.png" class="glightbox preview-link" title="Proyecto 9" data-gallery="portfolio-gallery-mobile"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="Más detalles"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>

                </div><!-- End Portfolio Items -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

</main>

@endsection
