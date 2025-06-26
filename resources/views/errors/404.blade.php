@extends('layouts.app')

@section('content')
<main class="main">

  <section id="error-404" class="pricing section text-center">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6" data-aos="zoom-in">

          <div class="pricing-item featured">
            <p class="popular">Oops!</p>
            <h3>Error 404 - Página no encontrada</h3>
            <p class="description">Parece que te perdiste buscando la página</p>

            <img src="{{ asset('assets/img/robot-404.webp') }}" alt="" class="img-fluid my-4" >

            <a href="{{ url('/') }}" class="cta-btn">Volver al inicio</a>
            <p class="text-center small mt-3">Revisa si escribiste bien la URL.</p>

          </div>

        </div>
      </div>
    </div>

  </section>

</main>
@endsection
