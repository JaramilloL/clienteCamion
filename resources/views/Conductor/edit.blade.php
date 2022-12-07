@include('Plantillas.head')
<div class="bg-dark vh-100">
    <div class="container">
    @include('Plantillas.navbar')
    <a href="{{ url('conductor') }}" class="btn btn-secondary">Regresar</a>
    
<form class="row g-3 needs-validation text-white" method="post" action="{{ url('/conductor/'. $con->idConductores) }}" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Nombre</label>
      <input 
      type="text" 
      class="form-control" 
      id="validationTooltip01" 
      name='nombre' 
      required
      value="{{ isset($con->nombre) ? $con->nombre : '' }}"
      >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
      <label for="validationTooltip02" class="form-label">Apellidos</label>
      <input 
      type="text" 
      class="form-control" 
      id="validationTooltip02" 
      name='apellido'  
      required
      value="{{ isset($con->apellido) ? $con->apellido : '' }}"
      >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip02" class="form-label">licencia</label>
      <input 
      type="text" 
      class="form-control" 
      id="validationTooltip02" 
      name='licencia'  
      required
      value="{{ isset($con->licencia) ? $con->licencia : '' }}"
      >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">correo</label>
      <input 
      type="email" 
      class="form-control" 
      id="validationTooltip01" 
      name='correo'  
      required
      value="{{ isset($con->correo) ? $con->correo : '' }}"
      >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">foto</label>
      <input 
      type="file" 
      class="form-control" 
      id="validationTooltip01" 
      name='foto' 
      required
      value="{{ $con->foto }}"
      >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()
  </script>
</div>
</div>
