@extends('barradenavegacion')
@section('content')
<h2 align="center">Estos son algunos de los coches que tenemos actualmente</h2>
<table class="table table-hover text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Mátricula</th>
      <th scope="col">Años</th>
      <th scope="col">Km</th>
      <th scope="col">Modelo</th>
      <th scope="col">Color</th>
      <th scope="col">Consumo</th>
      <th scope="col">Marca</th>
    </tr>
  </thead>
  <tbody> 
  @foreach ($cars as $car)
    <tr>
        <th scope="row">Coche {{$car->id}}</th>
        <td>{{$car->enrollment}}</td>
        <td>{{$car->years}}</td>
        <td>{{$car->km}}</td>
        <td>{{$car->tradeMark}}</td>
        <td>{{$car->color}}</td>
        <td>{{$car->fuelConsumption}}</td>
        @foreach ($brands as $brand)
          @if($car->brand_id === $brand->id)
            <td>{{$brand->name}}</td>
            @break
          @endif
        @endforeach
    </tr>
  @endforeach
</tbody>
</table>

@endsection