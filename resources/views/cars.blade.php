@extends('barradenavegacion')
@section('content')

<h1 class="text-center"> Coches </h1>
<!-- ESTE BOTON REDIRIGIRA A LA PÁGINA DE CREACIÓN DE USUARIOS -->
<a href="/añadir" type="button" class="btn btn-success btn-lg btn-block">Añadir Coche</a> 
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Mátricula</th>
      <th scope="col">Marca</th>
    </tr>
  </thead>
  <tbody> 
@foreach ($cars as $car)
    <tr>
        <th scope="row">Coche {{$car->id}}</th> 
        <td>{{$car->enrollment}}</td>
        @foreach ($brands as $brand)
          @if($car->brand_id === $brand->id)
            <td>{{$brand->name}}</td>
            @break
          @endif
        @endforeach
        <td><a href="/coches/{{$car->id}}" type="button" class="btn btn-info btn-sm">Ver perfil</a> </td>
    </tr>
@endforeach
</tbody>
</table>
@endsection