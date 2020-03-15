@extends('barradenavegacion')
@section('content')
<br>
    <h3>Administración de Usuarios</h3>
    <div id="botonCrearUsuarios">
        <!-- ESTE BOTON REDIRIGIRA A LA PÁGINA DE CREACIÓN DE USUARIOS -->
        <button type="button" class="btn btn-primary btn-lg btn-block">Crear Usuario Nuevo</button> 
    </div>
    <div id="tablaDeUsuarios"> 
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>
    </div>
@endsection