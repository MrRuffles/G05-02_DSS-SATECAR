@extends('barradenavegacion')
@section('content')
<br>
    <h3>Administración de Usuarios</h3>
    <div>
    <p>
        <div id="botonCrearUsuarios">
            <!-- ESTE BOTON REDIRIGIRA A LA PÁGINA DE CREACIÓN DE USUARIOS -->
            <a href="/registro" type="button" class="btn btn-primary btn-lg btn-block">Crear Usuario Nuevo</a> 
        </div>
    </p>
    <p>
        <div>
        <p>
            <h3>Buscador</h3>
        </p>
        <form action="{{ action('UsersController@find') }}" method="POST" role="form">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                    <input type="name" name="name" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <button type="submmit" class="btn btn-success">Buscar</button>
        </form>
        </div>
    </p>

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
                    <a type="button" href="/usuario/{{ $usuario->id }}" class="btn btn-success">Ver Perfil</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{ $usuarios->links() }}
    </div>
    </div>
@endsection