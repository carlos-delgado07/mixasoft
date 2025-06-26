@extends('layouts.app')

@section('content')
<main class="main">

  <section id="error-403" class="pricing section text-center">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6" data-aos="zoom-in">

          <div class="pricing-item">
            <p class="popular">¡Alto ahí!</p>
            <h3>Error 403 - Acceso denegado</h3>
            <p class="description">Usted no tiene los permisos suficientes para entrar aquí 🔒</p>
            <a href="{{ url('/') }}" class="cta-btn">Volver al inicio</a>
            <p class="text-center small mt-3">¿Tienes permisos? Intenta iniciar sesión.</p>

          </div>

        </div>
      </div>
    </div>

  </section>

</main>
@endsection
