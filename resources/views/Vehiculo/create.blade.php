@include('Plantillas.head')
<div class="bg-dark vh-100">
    <div class="container">
        @include('Plantillas.navbar')
        
<form action="{{ url('/vehiculo')}}" method="post" class="row g-3 needs-validation text-white" enctype="multipart/form-data">
@csrf
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Marca</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="marca">
                  <option selected required>Marca</option>
                  <option value="Ford">Ford</option>
                  <option value="Chevrolet">Chevrolet</option>
                  <option value="Nissan">Nissan</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
    
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Modelo</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="modelo">
                  <option selected required>Modelo</option>
                  <option value="2010-2020">2010-2020</option>
                  <option value="2000-2009">2000-2009</option>
                  <option value="1990-1999">1990-1999</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Color</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="color">
                  <option selected required>color</option>
                  <option value="rojo">rojo</option>
                  <option value="azul">azul</option>
                  <option value="negro">negro</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Destino</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="destino">
                  <option selected required>Destino</option>
                  <option value="Vallarta">Vallarta</option>
                  <option value="Manzanillo">Manzanillo</option>
                  <option value="Colima">Colima</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Placas</label>
      <input type="text" class="form-control" id="validationTooltip01" required name="placas">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Tipo</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="tipo">
                  <option selected required>Tipo</option>
                  <option value="Camion">Camion</option>
                  <option value="Mini-ban">Mini-ban</option>
                  <option value="Camion-doble">camion-doble</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">capasidad</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="capasidad">
                  <option selected required>capasidad</option>
                  <option value="10-20">10-20</option>
                  <option value="20-30">20-30</option>
                  <option value="30-40">30-40</option>
              </select>
          <div class="valid-tooltip">
          Looks good!
          </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Precio</label>
      <input type="text" class="form-control" id="validationTooltip01" required name="precio">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">status</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="estatus">
                  <option selected required>status</option>
                  <option value="Activo">Activo</option>
                  <option value="No activo">No activo</option>
              </select>
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