@extends('barradenavegacion')
@section('content')
<br>
    <h3>Administración de Usuarios</h3>
    <div>
    
    <div id="botonCrearUsuarios">
        <!-- ESTE BOTON REDIRIGIRA A LA PÁGINA DE CREACIÓN DE USUARIOS -->
        <button type="button" class="btn btn-primary btn-lg btn-block">Crear Usuario Nuevo</button> 
    </div>

    <div id="tablaDeUsuarios"> 
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td scope="row">{{$usuario->dni}}</td>
                <td>{{$usuario->name}} {{$usuario->surnames}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                    <button type="button" class="btn btn-success">Ver</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
@endsection