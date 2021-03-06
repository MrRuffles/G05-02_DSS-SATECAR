@extends('barradenavegacion')
@section('content')
@if(Auth::user()->typeUser == 'Administrador')
<a href="/coches" type="button" class="btn btn-link btn-lg btn-block">Coches Registrados</a> 
@endif
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
      <th scope="col">Concesionario</th>
    </tr>
  </thead>
  <tbody> 
    <tr>
        <th scope="row">Coche {{$car->id}}</th> 
        <td>{{$car->enrollment}}</td>
        <td>{{$car->years}}</td>
        <td>{{$car->km}}</td>
        <td>{{$car->tradeMark}}</td>
        <td>{{$car->color}}</td>
        <td>{{$car->fuelConsumption}}</td>
        <td>{{$brand->name}}</td>
        <td>{{$conces->name}}</td>
        <!-- Button trigger modal -->
    </tr>
    
</tbody>

</table>
@if(Auth::user()->typeUser == 'Administrador')
<td><a href="/coches/{{$car->id}}/editar" type="button" class="btn btn-success btn-sm">Editar</a> </td>
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
  Eliminar
</button>
@endif
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header btn-info">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Coche</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Quieres eliminar el coche?
      </div>
      <div class="modal-footer">
      <form action="{{ action('CarController@deleteCar', $car->id) }}" method="POST">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="POST">
        <button a href="/coches" type="submit" class="btn btn-primary btn-sm ">Aceptar</button>
      </form>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

@if($accidentes != '[]')
   <p> <h3>Accidentes sufridos</h3></p>
        <div>
            <div id="tablaDeAccidentes"> 
                <table class="table table-hover table-condensed text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Tipo</th>
                        <th>Fecha de accidente</th>
                        <th>Coste</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($accidentes as $accidente)
                      @foreach($datos_accidente as $dato_accidente)
                      @if($dato_accidente->id === $accidente->incident_id)
                        <tr>
                          <td scope="row">{{$dato_accidente->type}}</td>
                          <td>{{$accidente->date}}</td>
                          <td>{{$dato_accidente->price}}</td>
                        </tr>
                      @endif
                      @endforeach
                    @endforeach
                </tbody>
                </table>
        </div>
        {{ $accidentes->links() }}
</div>
@endif
@if(Auth::user()->typeUser == 'Cliente')
  <div>
    <a type="button" href="/usuario" class="btn btn-success">Atras</a>
  </div>
@endif

@endsection