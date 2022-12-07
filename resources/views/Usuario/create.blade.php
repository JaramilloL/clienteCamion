@include('Plantillas.head')
<div class="bg-dark vh-100">
    <div class="container">
        @include('Plantillas.navbar')
        
<form class="row g-3 needs-validation text-white" novalidate method="post" action="{{ url('/usuario')}}" enctype="multipart/form-data">
  @csrf
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationTooltip01" required name="nombres">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
      <label for="validationTooltip02" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="validationTooltip02"  required name="apellidos">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">sexo</label>
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="sexo">
      <option selected>seleccione</option>
      <option value="M">M</option>
      <option value="F">F</option>
      <option value="O">Otro</option>
  </select>
    <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
      <label for="validationTooltip02" class="form-label">edad</label>
      <input type="number" class="form-control" id="validationTooltip02"  required name="edad">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">correo</label>
      <input type="email" class="form-control" id="validationTooltip01" required name="correo">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">foto</label>
      <input type="file" class="form-control" id="validationTooltip01" required name="foto">
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