@include('Plantillas.head')
<div class="bg-dark vh-100">
    <div class="container">
        @include('Plantillas.navbar')

        <form class="row g-3 needs-validation text-white" novalidate method="post" action="{{ url('/jefe/'. $jef->idJefes) }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}

            <div class="col-md-4 position-relative">
              <label for="validationTooltip01" class="form-label">Nombre</label>
              <input 
              type="text" 
              class="form-control" 
              id="validationTooltip01" 
              required 
              name="nombre"
              value="{{ isset($jef->nombre) ? $jef->nombre: '' }}"
              >
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
              value="{{ isset($jef->edad) ? $jef->edad: '' }}"
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
              value="{{ isset($jef->correo) ? $jef->correo: '' }}"
              >
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
          
            <div class="col-md-4 position-relative">
              <label for="validationTooltip02" class="form-label">telefono</label>
              <input 
              type="tel" 
              class="form-control" 
              id="validationTooltip02"  
              required 
              name="telefono"
              value="{{ isset($jef->telefono) ? $jef->telefono: '' }}"
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
              value="{{ $jef->foto}}"
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
