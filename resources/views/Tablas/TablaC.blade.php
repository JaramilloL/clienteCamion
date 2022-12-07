<a href="{{ url('conductor/create') }}" class="btn btn-secondary m-3">Crear Registro</a>
<table class="table">
    <thead>
      <tr class="text-white">
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Licencia</th>
        <th scope="col">Correo</th>
        <th scope="col">Foto</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach ($conductores as $con)
    
      <tr class="text-white">
        <td>{{ $con->idConductores }}</td>
        <td>{{ $con->nombre }}</td>
        <td>{{ $con->apellido }}</td>
        <td>{{ $con->licencia }}</td>
        <td>{{ $con->correo }}</td>
        <td class="w-auto">
          <img src="{{ asset('storage').'/'.$con->foto }}" alt="" class="img-fluid" width="100px">
        </td>
        <td>
          <a href="{{ url('/conductor/'.$con->idConductores.'/edit') }}" class="btn btn-primary">Editar</a>
          | 
          
          <form action="{{ url('/conductor/'.$con->idConductores) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}

            <input 
                type="submit" 
                onclick="return confirm('quieres borrar este dato?')" value="Borrar" 
                class="btn btn-danger">
          </form>
        </td>
        
      </tr>

      @endforeach
    </tbody>
  </table>