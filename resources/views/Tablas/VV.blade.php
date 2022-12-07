    <table class="table">
        <thead>
          <tr class="text-white">
            <th scope="col">#</th> 
            <th scope="col">Nombre</th> 
            <th scope="col">Destino</th>
            <th scope="col">Precio</th>
            <th scope="col">Foto</th>
          </tr>
        </thead>
    
        <tbody>
          @foreach ($viajess as $viaj)
            <tr class="text-white">
              <td>{{ $viaj->idViaje}}</td>
              <td>{{ $viaj->nombre}}</td>
              <td>{{ $viaj->destino}}</td>
              <td>{{ $viaj->precio}}</td>
              <td class="w-auto">
                <img src="{{ asset('storage').'/'.$viaj->foto }}" alt="" class="img-fluid" width="200px">
              </td>
          </tr>  
          @endforeach
          
        </tbody>
        
      </table>