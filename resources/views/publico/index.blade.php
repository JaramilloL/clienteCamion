@include('Plantillas.head')
@include('Plantillas.navbar')

<div class="w-100 row m-auto bg-dark mt-2 mb-2">
    
 @foreach ($vehiculos as $vehi)
 <div class="card m-auto mb-2 " style="width: 20rem;">
     <img src="{{ asset('storage').'/'.$vehi->foto }}" class="card-img-top h-50" alt="{{ asset('storage').'/'.$vehi->foto }}">
     <div class="card-body">
       <p class="card-header">ID: {{ $vehi->idvehiculos }}</p>
       <p class="card-header">MARCA: {{ $vehi->marca }}</p>
       <p class="card-header">MODELO: {{ $vehi->modelo }}</p>
       <p class="card-header">COLOR: {{ $vehi->color }}</p>
       <p class="card-header">DESTINO: {{ $vehi->destino }}</p>
       <p class="card-header">PLACAS: {{ $vehi->placas }}</p>
       <p class="card-header">TIPO: {{ $vehi->tipo }}</p>
       <p class="card-header">CAPASIDAD: {{ $vehi->capasidad }}</p>
       <p class="card-header">PRECIO: {{ $vehi->precio }}</p>
       <p class="card-header">ESTATUS: {{ $vehi->estatus }}</p>
     </div>
   </div>
   
   @endforeach
</div>