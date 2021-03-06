@extends('barradenavegacion')
@section('content')

<script>
  function capturar(){
    var porIdTarjeta=document.getElementById("numAccount").value;
    document.getElementById("resultado").innerHTML="<h5>Número de tarjeta: " + porIdTarjeta + "</h5>";
    var porIdSaldoNuevo=document.getElementById("newbalance").value;
    if(porIdSaldoNuevo == ""){
      porIdSaldoNuevo = "0";
    }
    document.getElementById("resultadoSaldoNuevo").innerHTML="<h6>Saldo a añadir: " + porIdSaldoNuevo + "€ </h6>";
    var user = {!! $usuario->toJson() !!};
    var aux = parseFloat(user.balance.toString()) + parseFloat(porIdSaldoNuevo.toString());
    document.getElementById("resultadoSaldoNuevoMasSaldo").innerHTML="<h6>Saldo nuevo: " + aux + "€ </h6>";
  }
</script>
@if(Session::has('mensaje'))
	<div>{{Session::get('mensaje')}}</div>
@endif
<h3>Perfil de {{ $usuario->name }} {{ $usuario->surnames }} </h3>
<div  style="padding: 10px; border-style: dashed; border-width: 1px; margin-bottom: 11px">
    <div class="row" style="justify-content: space-between; margin:0px">
    <label>DNI: {{ $usuario->dni }}</label>
        <div>
            @if(Auth::user()->typeUser == 'Cliente')
              <a href="/usuario/editar" type="button" class="btn btn-primary">Editar Perfil</a>
            @elseif (Auth::user()->typeUser == 'Administrador')
              <a href="/usuario/{{$usuario->id}}/editar" type="button" class="btn btn-primary">Editar Perfil</a>
            @endif
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
@if(Auth::user()->typeUser == 'Cliente')
      <div>
      <form action="{{ action('UsersController@addSaldo', $usuario->id) }}" method="POST" > 
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <h3>Saldo actual: {{ $usuario->balance }} €</h3>    
                  <input type="hidden" id="saldoActual" value="{{ $usuario->balance }}">
                  <div class="form-group" style="display: flex; flex-wrap: wrap">
                      <label style="width: 27%; text-align: right; margin-right: 5px">Número de tarjeta: </label>
                      <input maxlength="16" style="width: 50%" class="form-control" name="numAccount" id="numAccount" placeholder="XXXX-XXXX-XXXX-XXXX" type="text"/>
                  </div>
                  <div class ="form-group" style="display: flex; flex-wrap: wrap">
                    <label style="width: 27%; text-align: right; margin-right: 5px">Saldo a añadir: </label>
                    <input  style="width: 30%" class="form-control" name="newbalance" id="newbalance" placeholder="¿Cuanto desea añadir?" type="text"/>
                    <div>
                        <input data-target="#abrirModalAñadirSaldo" data-toggle="modal" style="margin-left: 10px" type="button" value="Añadir Saldo" onclick="capturar()" class="btn btn-primary">
                    </div>    
                  </div>
                  <div class="modal fade" id="abrirModalAñadirSaldo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content" style="border: 2px solid #ea3232;">
                        <div class="modal-header">
                          <div class="modal-title" id="resultado"></div>
                        </div>
                        <div class="modal-body">
                          <div class="row" style="justify-content: space-between; margin:0px">
                            <h6>Saldo actual: {{ $usuario->balance }} €</h6>
                          </div>
                          <div id="resultadoSaldoNuevo"></div>
                          <div><hr style="color: #0056b2;"></div>
                          <div id="resultadoSaldoNuevoMasSaldo"></div>    
                        </div>
                        <div class="modal-footer">
                          <button href="/usuario/{{ $usuario->id }}" class="btn btn-primary" type="submmit">Confirmar</button>
                          <input type="button" class="btn btn-outline-light" data-dismiss="modal" style="color: #000000; border-color: #d2d3d4" onclick="resetear()" value="Cancelar">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
      </div>
@endif
@if(Auth::user()->typeUser == 'Administrador' && Auth::user()->id == $usuario->id)
@else
@if($coches != '[]')
          <h3>Coches Alquilados</h3>
              <div>
                  <div id="tablaDeCoches"> 
                      <table class="table">
                      <thead class="thead-dark">
                          <tr>
                              <th>Matrícula</th>
                              <th>Fecha de alquiler</th>
                              @if(Auth::user()->typeUser == 'Cliente')
                                <th>Accion</th>
                              @endif
                              <th>Ver Coche</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($coches as $coche)
                            @foreach($datos_coche as $dato_coche)
                            @if($dato_coche->id === $coche->car_id)
                              <tr>
                                <td scope="row">{{$dato_coche->enrollment}}</td>
                                <td>{{$coche->date}}</td>
                                @if(Auth::user()->typeUser == 'Cliente')
                                <td>
                                  <form action="{{ action('UsersController@giveBack', [$usuario->id, $dato_coche->id]) }}" method="POST" role="form">
                                      {{ csrf_field() }}
                                      <input name="_method" type="hidden">
                                      <button type="submit" class="btn btn-success">Devolver</button>
                                  </form>
                                </td>
                                @endif
                                <td>
                                  <a type="button" href="/coches/{{ $dato_coche->id }}" class="btn btn-warning">Ver</a>
                                </td>
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
@endif
@endsection