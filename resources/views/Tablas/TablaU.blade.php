<a href="{{ url('usuario/create') }}" class="btn btn-secondary m-3">Crear Registro</a>
<table class="table">
    <thead>
      <tr class="text-white">
        <th scope="col">#</th> 
        <th scope="col">Nombre</th> 
        <th scope="col">Apellido</th>
        <th scope="col">Edad</th>
        <th scope="col">Sexo</th>
        <th scope="col">Foto</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach ($usuarios as $us)
        <tr class="text-white">
          <th>{{ $us->idUsuarios }}</th>
          <th>{{ $us->nombres }}</th>
          <th>{{ $us->apellidos }}</th>
          <th>{{ $us->edad }}</th>
          <th>{{ $us->sexo }}</th>
          <td class="w-auto">
            <img src="{{ asset('storage').'/'.$us->foto }}" alt="" class="img-fluid" width="100px">
          </td>
          <td>
            <a href="{{ url('/usuario/'.$us->idUsuarios.'/edit') }}" class="btn btn-primary">Editar</a>
            | 
            
            <form action="{{ url('/usuario/'.$us->idUsuarios) }}" method="post">
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