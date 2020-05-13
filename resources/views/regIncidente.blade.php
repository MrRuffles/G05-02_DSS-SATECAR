@extends('barradenavegacion')
@section('content')

<h1>Registro de Incidente</h1>
<div class="container">
@if($idIncidente != 0)
  <div class = 'row'>
  <h3> Registrar Incidente {{$registro[0]->type}}, con prfecio {{$registro[0]->price}} al Coche {{$registro[0]->enrollment}} del Cliente {{$registro[0]->name}}. </h3>
  <input data-target="#abrirModalConfirmacion" data-toggle="modal" style="margin-left: 10px" type="button" value="Confirmar" class="btn btn-primary">
  </div>
  <div class="modal fade" id="abrirModalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="border: 2px solid #ea3232;">
        <div class="modal-header">
          <div class="modal-title" id="resultado"></div>
        </div>
        <div class="modal-body">
          <div class="row" style="justify-content: space-between; margin:0px">
            <h5>¿Esta seguro de realizar el registro? {{$registro[0]->price}}</h5>
          </div> 
        </div>
        <div class="modal-footer">
          <form action="{{ action('IncidentsController@confirmRegister', [$idUsuario, $idCoche, $idIncidente, $registro[0]->price, $registro[0]->balance]) }}" method="POST" role="form">
            {{ csrf_field() }}
            <input name="_method" type="hidden">
            <button  class="btn btn-primary" type="submmit">Si</button>
          </form>
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar">
        </div>
      </div>
    </div>
  </div>
@endif
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
  @if($idCoche != 0)
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
    <form action="{{ action('IncidentsController@getRegister', [$idUsuario, $idCoche, $incident->id]) }}" method="POST" role="form">
            {{ csrf_field() }}
            <input name="_method" type="hidden">
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
      </form>
    @endforeach
    </tbody>
    </table>
    </div>
  </div>
  </div>
  @endif
</div>

@endsection