@extends('barradenavegacion')
@section('content')

<style>
    .rectangulo {
        width: 250px;
        height: 100px;
        border: 3px solid #555;
        background: #428bca;
    }
</style>

<h3>Perfil de Usuario</h3>
<div  style="padding: 10px; border-style: dashed; border-width: 1px; margin-bottom: 11px">
    <div class="row" style="justify-content: space-between; margin:0px">
        <label>DNI: {{ $usuario->dni }}</label>
        <div>
        <button href="#" type="button" class="btn btn-primary">Editar Perfil</button>
        <button href="#" type="button" class="btn btn-danger">Eliminar Perfil</button>
        </div>
    </div>
    <p>Nombre: {{ $usuario->name }}</p>
    <p>Apellidos: {{ $usuario->surnames }}</p>
    <p>Telefono: {{ $usuario->phone }}</p>
    <p>Dirección: {{ $usuario->adress }}</p>
    <p>Correo Electronico: {{ $usuario->email }}</p>
    <h3>Tipo de Usuario: {{ $usuario->typeUser }}</h3>
</div>
@endsection