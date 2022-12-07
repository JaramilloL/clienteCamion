<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/inicio')}}">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/')}}">Welcome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/auxiliar')}}">Auxiliar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/conductor') }}">Conductor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/jefe') }}">Jefe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/registro') }}">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/usuario') }}">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/vehiculo') }}">vehiculos</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>