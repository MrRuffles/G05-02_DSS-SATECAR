@extends('barradenavegacion')
@section('content')
<br>
    <h3>Administración de Concesionarios</h3>
    <div>
    <p>
        <div id="botonCrearConcesionario">
            <!-- ESTE BOTON REDIRIGIRA A LA PÁGINA DE CREACIÓN DE CONCESIONARIOS -->
            <a href="/crearConcesionario" type="button" class="btn btn-primary btn-lg btn-block">Crear Concesionario Nuevo</a> 
        </div>
    </p>

    <div id="tablaDeConcesionarios"> 
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>CIF</th>
                <th>Telefono</th>
                <th>Ciudad</th>
                <th>Pais</th>
                <th>Email</th>
                <!-- <th>Accion</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($concesionarios as $concessionaire)
            <tr>
                <td scope="row">{{$concessionaire->name}}</td>
                <td>{{$concessionaire->address}}</td>
                <td>{{$concessionaire->cif}}</td>
                <td>{{$concessionaire->phone}}</td>
                <td>{{$concessionaire->city}}</td>
                <td>{{$concessionaire->country}}</td>
                <td>{{$concessionaire->email}}</td>
                <td>
                    <a type="button" href="/concesioario/{{ $concessionaire->id }}" class="btn btn-success">Ver Concesionario</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
@endsection