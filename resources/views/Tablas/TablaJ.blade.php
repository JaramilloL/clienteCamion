<a href="{{ url('jefe/create') }}" class="btn btn-secondary m-3">Crear Registro</a>
<table class="table">
    <thead>
      <tr class="text-white">
        <th scope="col">#</th> 
        <th scope="col">Nombre</th> 
        <th scope="col">Edad</th>
        <th scope="col">Correo</th>
        <th scope="col">Telefono</th>
        <th scope="col">Foto</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($jefes as $jef)
        <tr class="text-white">
          <td>{{ $jef->idJefes}}</td>
          <td>{{ $jef->nombre}}</td>
          <td>{{ $jef->edad}}</td>
          <td>{{ $jef->correo}}</td>
          <td>{{ $jef->telefono}}</td>
          <td class="w-auto">
            <img src="{{ asset('storage').'/'.$jef->foto }}" alt="" class="img-fluid" width="100px">
          </td>
          <td>
            <a href="{{ url('/jefe/'.$jef->idJefes.'/edit') }}" class="btn btn-primary">Editar</a>
            | 
            
            <form action="{{ url('/jefe/'.$jef->idJefes) }}" method="post">
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