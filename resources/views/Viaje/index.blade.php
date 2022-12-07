
@include('Plantillas.head')
@include('Plantillas.navbar')

<div class="w-100 row m-auto bg-dark mt-2 mb-2">
    
 @foreach ($vehiculos as $vehi)
 <div class="card m-auto mb-2 " style="width: 20rem;">

    <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <img src="{{ asset('storage').'/'.$vehi->foto }}" class="card-img-top h-50" alt="{{ asset('storage').'/'.$vehi->foto }}">
        <div class="card-body">
          <p class="card-header">DESTINO: {{ $vehi->destino }}</p>
          <p class="card-header">PRECIO: {{ $vehi->precio }}</p>
          <p class="card-header">ESTATUS: {{ $vehi->estatus }}</p>
        </div>  
        <a href="" class="btn btn-primary">Agregar</a>
    </form>
   </div>
   
   @endforeach
</div>