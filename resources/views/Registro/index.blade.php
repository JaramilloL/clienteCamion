@include('Plantillas.head')
<div class="bg-dark vh-100">
    <div class="container">
        @include('Plantillas.navbar')
        <form class="form-horizontal text-white" method="get" action="registro" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>

          @include('Plantillas.footer')
        
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