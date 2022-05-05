@extends('base')
@section('contacto')
<!-- Formulario Contacto -->
<section class="container">
  <div class="row justify-content-center">
    <div class="col-md-9 col-sm-12">
      <h2>Contacto</h2>
      <form id="form-contacto" name="form-contacto" method="post" onsubmit="validateForm(event)">
        <div class="mb-3">
          <label for="name_contact" class="form-label">Nombre y apellido</label>
          <input class="form-control" type="text" id="name_contact" name="name_contact" placeholder="Nombre y apellido" />
          <div id="nameError" class="invalid-feedback" style="display: block"></div>
        </div>
        <div class="mb-3">
          <label for="comment_contact" class="form-label">Mensaje</label>
          <textarea
            class="textarea-form form-control"
            id="comment_contact"
            name="comment_contact"
            cols="20"
            rows="8  "
            placeholder="Déjanos tu mensaje..."
            minlength="10"
            maxlength="200"
          ></textarea>
        </div>
        <button type="submit" class="mb-3 btn btn-primary" value="Submit" name="btn_enviar">Enviar</button>
      </form>
    </div>
  </div>
</section>
<!-- End Contacto -->
@endsection('contacto')