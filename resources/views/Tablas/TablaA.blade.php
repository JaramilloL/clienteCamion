<a href="{{ url('auxiliar/create') }}" class="btn btn-secondary m-3">Crear Registro</a>

<table class="table">
    <thead>
      <tr class="text-white">
        <th scope="col">#</th>
        <th scope="col">Nombre</th> 
        <th scope="col">Apellido</th>
        <th scope="col">Status</th>
        <th scope="col">Sexo</th>
        <th scope="col">Foto</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>

    <tbody>
     @foreach ( $auxiliares as $aux )
     <tr class="text-white">
       <td>{{ $aux->idAuxiliares }}</td>
       <td>{{ $aux->nombre }}</td>
       <td>{{ $aux->apellido }}</td>
       <td>{{ $aux->status }}</td>
       <td>{{ $aux->sexo }}</td>

       <td class="w-auto">
         <img src="{{ asset('storage').'/'.$aux->foto }}" alt="" class="img-fluid" width="100px">
       </td>
       <td>
         <a href="{{ url('/auxiliar/'.$aux->idAuxiliares.'/edit') }}" class="btn btn-primary">Editar</a>
         | 
         
         <form action="{{ url('/auxiliar/'.$aux->idAuxiliares) }}" method="post">
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