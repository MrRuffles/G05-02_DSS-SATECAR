@extends('barradenavegacion')
@section('content')
<table class="table">
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
        <td>{{$car->marca}}</td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection