@extends('layouts.app')

@section('content')
<main class="main">
<section id="contact" class="contact section">
<div class="mb-5">
  <iframe 
    style="width: 100%; height: 400px;" 
    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d102233.28954273989!2d-63.19113037555593!3d-17.77912781320539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sbo!4v1750951790463!5m2!1ses-419!2sbo"
    frameborder="0" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>


  <div class="container" data-aos="fade">
    <div class="row gy-5 gx-lg-5">
      <div class="col-lg-4">
        <div class="info">
          <h3>Contactanos</h3>
          <p>Estamos aquí para ayudarte. Escríbenos y te responderemos lo antes posible.</p>
          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div><h4>Ubicación:</h4><p>Av. Bush 2do anillo Santa Cruz. Bolivia</p></div>
          </div>
          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div><h4>Email:</h4><p>mixasoft.bo@gmail.com</p></div>
          </div>
          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div><h4>Teléfono:</h4><p>+591 62457146</p></div>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="contact-card p-4 shadow rounded">
          <h3 class="text-center mb-4">Envíanos un mensaje</h3>
          <p class="text-center">Déjanos tu mensaje y te responderemos lo antes posible.</p>

          <form id="contact-form" action="{{ route('contacto.enviar') }}" method="POST" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <div class="my-3">
              <div id="form-success" class="alert alert-success d-none">Tu mensaje ha sido enviado. ¡Gracias por contactarnos!</div>
              <div id="form-error" class="alert alert-danger d-none">Hubo un error al enviar el mensaje. Intenta más tarde.</div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary px-4 py-2" id="submit-btn">Enviar Mensaje</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contact-form');
  const successMsg = document.getElementById('form-success');
  const errorMsg = document.getElementById('form-error');
  const submitBtn = document.getElementById('submit-btn');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    successMsg.classList.add('d-none');
    errorMsg.classList.add('d-none');
    submitBtn.disabled = true;

    const formData = new FormData(form);

    fetch("{{ route('contacto.enviar') }}", {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
      },
      body: formData
    })
    .then(response => {
      if (response.ok) {
        form.reset();
        successMsg.classList.remove('d-none');
      } else {
        throw new Error('Error en la respuesta del servidor');
      }
    })
    .catch(error => {
      console.error(error);
      errorMsg.classList.remove('d-none');
    })
    .finally(() => {
      submitBtn.disabled = false;
    });
  });
});
</script>
@endsection
