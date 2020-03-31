@extends('barradenavegacion')
@section('content')
<a href="/concesionario" type="button" class="btn btn-primary btn-lg btn-block">Concesionario</a> 
<table class="table table-striped table-dark">
  <thead>
    <tr>
    <th scope="col">ID</th>
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
    <tr>
        <th scope="row">Concesionario {{$concesionario->id}}</th> 
        <td>{{$concesionario->name}}</td>
        <td>{{$concesionario>address}}</td>
        <td>{{$concesionario->cif}}</td>
        <td>{{$concesionario->phone}}</td>
        <td>{{$concesionario->city}}</td>
        <td>{{$concesionario->country}}</td>
        <td>{{$concesionario->email}}</td>

        <!-- Button trigger modal -->
    </tr>
    
</tbody>

</table>
<td><a href="/concesionario/{{$concesionario->id}}/editar" type="button" class="btn btn-success btn-sm">Editar</a> </td>
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
  Eliminar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar concesionario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Quieres eliminar el concesionario?
      </div>
      <div class="modal-footer">
      <form action="{{ action('ConcessionaireController@deleteConcessionaire', $concesionario->id) }}" method="POST">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="POST">
        <button type="submit" class="btn btn-primary btn-sm ">Aceptar</button>
      </form>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
@endsection