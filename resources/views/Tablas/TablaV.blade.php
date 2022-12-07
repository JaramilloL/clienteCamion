<a href="{{ url('vehiculo/create') }}" class="btn btn-secondary m-3">Crear Registro</a>
<table class="table">
    <thead>
      <tr class="text-white">
        <th scope="col">#</th> 
        <th scope="col">Marca</th> 
        <th scope="col">Modelo</th>
        <th scope="col">Color</th>
        <th scope="col">Destino</th>
        <th scope="col">Placas</th>
        <th scope="col">Tipo</th>
        <th scope="col">Capacidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Status</th>
        <th scope="col">Foto</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach ($vehiculos as $vehi)
         <tr class="text-white">
            <td>{{ $vehi->idVehiculos }}</td>
            <td>{{ $vehi->marca }}</td>
            <td>{{ $vehi->modelo }}</td>
            <td>{{ $vehi->color }}</td>
            <td>{{ $vehi->destino }}</td>
            <td>{{ $vehi->placas }}</td>
            <td>{{ $vehi->tipo }}</td>
            <td>{{ $vehi->capasidad }}</td>
            <td>{{ $vehi->precio }}</td>
            <td>{{ $vehi->estatus }}</td>
            
            <td class="w-auto">
              <img src="{{ asset('storage').'/'.$vehi->foto }}" alt="" class="img-fluid" width="100px">
            </td>
            <td>
              <a href="{{ url('/vehiculo/'.$vehi->idVehiculos.'/edit') }}" class="btn btn-primary">Editar</a>
              | 
              
              <form action="{{ url('/vehiculo/'.$vehi->idVehiculos) }}" method="post">
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