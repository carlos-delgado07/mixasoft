@extends('layouts.app')

@section('content')
<main class="main">

  <section id="error-500" class="pricing section text-center">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6" data-aos="zoom-in">

          <div class="pricing-item">
            <p class="popular">¡Algo falló!</p>
            <h3>Error 500 - Problema interno del servidor</h3>
            <p class="description">El robot ha cruzado cables que no debía... estamos trabajando en ello ⚙️</p>
            <p></p>
            <a href="{{ url('/') }}" class="cta-btn">Volver al inicio</a>
            <p class="text-center small mt-3">Por favor, intenta nuevamente más tarde.</p>

          </div>

        </div>
      </div>
    </div>

  </section>

</main>
@endsection
