@include('Plantillas.head')
<div class="bg-dark vh-100">
    <div class="container">
        @include('Plantillas.navbar')

        <a href="{{ url('vehiculo') }}" class="btn btn-secondary">Regresar</a>
        
<form action="{{ url('/vehiculo/'.$vehi->idVehiculos)}}" method="post" class="row g-3 needs-validation text-white" novalidate enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Marca</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="marca">
                  <option selected required>Marca</option>
                  <option value="{{ isset($vehi->marca) ? $vehi->marca : ''}}">Ford</option>
                  <option value="{{ isset($vehi->marca) ? $vehi->marca : ''}}">Chevrolet</option>
                  <option value="{{ isset($vehi->marca) ? $vehi->marca : ''}}">Nissan</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
    
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Modelo</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="modelo">
                  <option selected required>Modelo</option>
                  <option value="{{ isset($vehi->modelo) ? $vehi->modelo : ''}}">2010-2020</option>
                  <option value="{{ isset($vehi->modelo) ? $vehi->modelo : ''}}">2000-2009</option>
                  <option value="{{ isset($vehi->modelo) ? $vehi->modelo : ''}}">1990-1999</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Color</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="color">
                  <option selected required>color</option>
                  <option value="{{ isset($vehi->color) ? $vehi->color : ''}}">rojo</option>
                  <option value="{{ isset($vehi->color) ? $vehi->color : ''}}">azul</option>
                  <option value="{{ isset($vehi->color) ? $vehi->color : ''}}">negro</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Destino</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="destino">
                  <option selected required>Destino</option>
                  <option value="{{ isset($vehi->destino) ? $vehi->destino : ''}}">Vallarta</option>
                  <option value="{{ isset($vehi->destino) ? $vehi->destino : ''}}">Manzanillo</option>
                  <option value="{{ isset($vehi->destino) ? $vehi->destino : ''}}">Colima</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Placas</label>
      <input 
      type="text" 
      class="form-control" 
      id="validationTooltip01" 
      required 
      name="placas"
      value="{{ isset($vehi->placas)? $vehi->placas:'' }}"
      >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Tipo</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="tipo">
                  <option selected required>Tipo</option>
                  <option value="{{ isset($vehi->tipo) ? $vehi->tipo : ''}}">Camion</option>
                  <option value="{{ isset($vehi->tipo) ? $vehi->tipo : ''}}">Mini-ban</option>
                  <option value="{{ isset($vehi->tipo) ? $vehi->tipo : ''}}">camion-doble</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">capasidad</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="capasidad">
                  <option selected required>capasidad</option>
                  <option value="{{ isset($vehi->capasidad) ? $vehi->capasidad : ''}}">10-20</option>
                  <option value="{{ isset($vehi->capasidad) ? $vehi->capasidad : ''}}">20-30</option>
                  <option value="{{ isset($vehi->capasidad) ? $vehi->capasidad : ''}}">30-40</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Precio</label>
      <input 
      type="text" 
      class="form-control" 
      id="validationTooltip01" 
      required 
      name="precio"
      value="{{ isset($vehi->precio) ? $vehi->precio : ''}}"
      >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">status</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="estatus">
                  <option selected required>status</option>
                  <option value="{{ isset($vehi->estatus) ? $vehi->estatus : ''}}">Activo</option>
                  <option value="{{ isset($vehi->estatus) ? $vehi->estatus : ''}}">No activo</option>
              </select>
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
      value="{{ isset($vehi->foto) }}"
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