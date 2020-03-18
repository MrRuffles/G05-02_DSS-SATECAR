@extends('barradenavegacion')
@section('content')
<h3>Editar Perfil</h3>
<form action="{{ action('UsersController@update', $usuario->id) }}" method="POST" role="form">
    {{ csrf_field() }}
    <input name="_method" type="hidden">
    <div class="form-group">
        <label for="form1-group">DNI</label>
        <input type="text" class="form-control" id="dniUsuario" name="dni" value="{{ $usuario->dni }}" placeholder="{{ $usuario->dni }}">
    </div>
    <div class="form-group">
        <label for="form2-group">Nombre</label>
        <input type="text" class="form-control" id="nombreUsuario" name="name" value="{{ $usuario->name }}" placeholder="{{ $usuario->name }}">
    </div>
    <div class="form-group">
        <label for="form3-group">Apellidos</label>
        <input type="text" class="form-control" id="apellidosUsuario" name="surnames" value="{{ $usuario->surnames }}" placeholder="{{ $usuario->surnames }}">
    </div>
    <div class="form-group">
        <label for="form4-group">Correo Electrónico</label>
        <input type="text" class="form-control" id="emailUsuario" name="email" value="{{ $usuario->email }}" placeholder="{{ $usuario->email }}">
    </div>
    <div class="form-group">
        <label for="form5-group">Teléfono</label>
        <input type="text" class="form-control" id="telefonoUsuario" name="phone" value="{{ $usuario->phone }}" placeholder="{{ $usuario->phone }}">
    </div>
    <div class="form-group">
        <label for="form6-group">Dirección</label>
        <input type="text" class="form-control" id="direccionUsuario" name="adress" value="{{ $usuario->adress }}" placeholder="{{ $usuario->adress }}">
    </div>
    <div>
        <label>Tipo de Usuario</label>
        @if($usuario->typeUser == 'Administrador')
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeUser" id="exampleRadios1" value="Administrador" checked>
            <label class="form-check-label" for="exampleRadios1">
                Administrador
            </label>
        </div>
        @else
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeUser" id="exampleRadios1" value="Administrador">
            <label class="form-check-label" for="exampleRadios1">
                Administrador
            </label>
        </div>
        @endif
        @if($usuario->typeUser == 'Vendedor')
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeUser" id="exampleRadios2" value="Vendedor" checked>
            <label class="form-check-label" for="exampleRadios2">
                Vendedor
            </label>
        </div>
        @else
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeUser" id="exampleRadios2" value="Vendedor">
            <label class="form-check-label" for="exampleRadios2">
                Vendedor
            </label>
        </div>
        @endif
        @if($usuario->typeUser == 'Cliente')
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeUser" id="exampleRadios3" value="Cliente" checked>
            <label class="form-check-label" for="exampleRadios3">
                Cliente
            </label>
        </div>
        @else
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeUser" id="exampleRadios3" value="Cliente">
            <label class="form-check-label" for="exampleRadios3">
                Cliente
            </label>
        </div>
        @endif
    </div>
    <div>
        <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
        <a type="button" href="/usuario/{{ $usuario->id }}" class="btn btn-secondary btn-lg">Cancelar</a>
    </div>
</form>
@endsection