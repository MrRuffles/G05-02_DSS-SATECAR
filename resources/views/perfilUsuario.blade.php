@extends('barradenavegacion')
@section('content')
<h3>Perfil de {{ $usuario->name }} {{ $usuario->surnames }} </h3>
<div  style="padding: 10px; border-style: dashed; border-width: 1px; margin-bottom: 11px">
    <div class="row" style="justify-content: space-between; margin:0px">
        <label>DNI: {{ $usuario->dni }}</label>
        <div>
            <a href="/usuario/{{ $usuario->id }}/editar" type="button" class="btn btn-primary">Editar Perfil</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                Eliminar Perfil
            </button>
        </div>
    </div>
    <p>Telefono: {{ $usuario->phone }}</p>
    <p>Dirección: {{ $usuario->adress }}</p>
    <p>Correo Electronico: {{ $usuario->email }}</p>
    <h3>Tipo de Usuario: {{ $usuario->typeUser }}</h3>
</div>
<!-- MODAL DEL BOTON DE BORRAR PERFIL -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Borrar Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        *Esta acción es irreversible, no se podran recuperar los datos borrados
      </div>
      <div class="modal-footer">
      <form action="{{ action('UsersController@delete', $usuario->id) }}" method="POST">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="POST">
        <button type="submit" class="btn btn-danger">Aceptar</button>
      </form>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
@if($coches != '[]')
    <h3>Coches Alquilados</h3>
        <div>
            <div id="tablaDeCoches"> 
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Matrícula</th>
                        <th>Fecha de alquiler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($coches as $coche)
                      @foreach($datos_coche as $dato_coche)
                      @if($dato_coche->id === $coche->car_id)
                        <tr>
                          <td scope="row">{{$dato_coche->enrollment}}</td>
                          <td>{{$coche->date}}</td>
                        </tr>
                      @endif
                      @endforeach
                    @endforeach
                </tbody>
                </table>
                {{ $coches->links() }}
        </div>
</div>
@endif
@endsection