@extends('barradenavegacion')
@section('content')
<h2 align="center">Estos son los concesionarios con los que trabajamos</h2>
<table class="table table-striped table-dark">
  <thead>

    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">CIF</th>
      <th scope="col">Telefono</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Pais</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody> 
  @foreach($concesionarios as $concesionario)
    <tr>
        <th scope="row">{{$concesionario->name}}</th>
        <td>{{$concesionario->address}}</td>
        <td>{{$concesionario->cif}}</td>
        <td>{{$concesionario->phone}}</td>
        <td>{{$concesionario->city}}</td>
        <td>{{$concesionario->country}}</td>
        <td>{{$concesionario->email}}</td>

        <!-- Button trigger modal -->
    </tr>
    @endforeach
</tbody>

</table>
@endsection