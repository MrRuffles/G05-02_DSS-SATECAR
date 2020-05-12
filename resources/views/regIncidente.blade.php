@extends('barradenavegacion')
@section('content')

<h1>Registro de Incidente</h1>
<div class="container">
  <div class= 'row'>
  <div class='col-md-6'>
    <div class="form-group">
      <label>Seleccionar Cliente:</label>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
          </tr>
        </thead>
        <tbody>
          @foreach($clients_rented as $user)
            <form action="{{ action('IncidentsController@getCarsRented', [$user->id]) }}" method="POST" role="form">
            {{ csrf_field() }}
            <input name="_method" type="hidden">
            <tr>
              <td scope="row">{{$user->id}}</td>
              <td scope="row">{{$user->name}}</td>
              <td>
                <button type="submmit" class="btn btn-success">Buscar Coches</button>
              </td>
            </tr>
            </form>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <div class='col-md-6'>
    <div class="form-group">
      <label>Seleccionar Coche Afectado:</label>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cars_rented as $car)
            <form action="{{ action('IncidentsController@getIncidents', [$idUsuario, $car->car_id]) }}" method="POST" role="form">
            {{ csrf_field() }}
            <input name="_method" type="hidden">
            <tr>
            <td scope="row">{{$car->car_id}}</td>
              <td scope="row">{{$car->enrollment}}</td>
              <td>
                <button type="submmit" class="btn btn-success">Seleccionar</button>
              </td>
            </tr>
            </form>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>
  <div class = 'row'>
  <div class='col'>
    <div class="form-group">
      <label>Selecciona incidente:</label>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
        <th scope="col">ID</th>
        <th scope="col">Tipo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
        <th scope="col">Grado</th>
      </tr>
        </thead>
      <tbody> 
    @foreach ($incidents as $incident)
      <tr>
      <td scope="row">{{$incident->id}}</td> 
      <td scope="row">{{$incident->type}}</td>
      <td scope="row">{{$incident->description}}</td>
      <td scope="row">{{$incident->price}}</td>
      <td scope="row">{{$incident->grade}}</td>
      <td>
        <button type="submmit" class="btn btn-success">Seleccionar</button>
      </td>
      </tr>
    @endforeach
    </tbody>
    </table>
    </div>
  </div>
  </div>
</div>

@endsection