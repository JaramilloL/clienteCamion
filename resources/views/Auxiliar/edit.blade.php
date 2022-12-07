@include('Plantillas.head')
<div class='bg-dark'>
<div class="container">
    @include('Plantillas.navbar')
    
    <a href="{{ url('auxiliar') }}" class="btn btn-secondary">Regresar</a>

<form action="{{ url('/auxiliar/'.$aux->idAuxiliares) }}" method="post" class="row g-3 needs-validation text-white" novalidate enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
      <div class="col-md-4 position-relative">
        <label for="validationTooltip01" class="form-label">Nombre</label>
        <input 
            type="text" 
            class="form-control" 
            id="validationTooltip01" 
            name="nombre" 
            required
            value="{{ isset($aux->nombre)?$aux->nombre:'' }}"
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
            name="apellido" 
            required
            value="{{ $aux->apellido }}"
            >
        <div class="valid-tooltip">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 position-relative">
        <label for="validationTooltip01" class="form-label">Sexo</label>
        <input 
            type="text" 
            class="form-control" 
            id="validationTooltip02"  
            name="sexo" 
            required
            value="{{ $aux->sexo }}"
            >
      <div class="valid-tooltip">
          Looks good!
        </div>
      </div>
    
      <div class="col-md-4 position-relative">
        <label for="validationTooltip01" class="form-label">status</label>
        <input 
            type="text" 
            class="form-control" 
            id="validationTooltip02"  
            name="status" 
            required
            value="{{ $aux->status }}"
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
            name="foto"
            value="{{ $aux->foto }}"
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
