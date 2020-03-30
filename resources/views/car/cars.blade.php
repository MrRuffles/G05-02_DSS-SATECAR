
@extends('barradenavegacion')
@section('content')

<div class="container">
<h2 class="mt-4"> Coches Registrados</h2>
<p>
<a href="/añadir" type="button" class="btn btn-success btn-lg btn-block">Añadir Coche</a> 
</p>
<table class="table table-hover text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Mátricula</th>
      <th scope="col">Marca</th>
      <th scope="col">Acciones</th>
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
{{ $cars->links() }}
</div>
@endsection