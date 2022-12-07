@include('Plantillas.head')
<div class="bg-dark vh-100">
    <div class="container">
        @include('Plantillas.navbar')
        
<form class="row g-3 needs-validation text-white" novalidate method="post" action="{{ url('/usuario/'.$us->idUsuarios)}}" enctype="multipart/form">
  @csrf
  {{ method_field('PATCH') }}
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Nombre</label>
      <input 
      type="text" 
      class="form-control" 
      id="validationTooltip01" 
      required 
      name="nombres"
      value="{{ isset($us->nombres) ? $us->nombres: '' }}"
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
      required 
      name="apellidos"
      value="{{ isset($us->apellidos) ? $us->apellidos: '' }}"
      >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">sexo</label>
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="sexo">
      <option selected>seleccione</option>
      <option value="{{ isset($us->sexo) ? $us->sexo : ''}}">M</option>
      <option value="{{ isset($us->sexo) ? $us->sexo : ''}}">F</option>
      <option value="{{ isset($us->sexo) ? $us->sexo : ''}}"">Otro</option>
  </select>
    <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
      <label for="validationTooltip02" class="form-label">edad</label>
      <input 
      type="number" 
      class="form-control" 
      id="validationTooltip02"  
      required 
      name="edad"
      value="{{ isset($us->edad) ? $us->edad: '' }}"
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
      required 
      name="correo"
      value="{{ isset($us->correo) ? $us->correo: '' }}"
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
      required 
      name="foto"
      value="{{ $us->foto}}"
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