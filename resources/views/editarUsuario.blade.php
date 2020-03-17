@extends('barradenavegacion')
@section('content')
<h3>Editar Perfil</h3>
<form action="" method="POST" role="form">
    {{ csrf_field() }}
    <input name="_method" type="hidden">
    <div class="form-group">
        <label for="form1-group">DNI</label>
        <input type="text" class="form-control" id="dniUsuario" name="dni" placeholder="45831413T">
    </div>
    <div class="form-group">
        <label for="form2-group">Nombre</label>
        <input type="text" class="form-control" id="nombreUsuario" name="name" placeholder="Francisco Javier">
    </div>
    <div class="form-group">
        <label for="form3-group">Apellidos</label>
        <input type="text" class="form-control" id="apellidosUsuario" name="surnames" placeholder="Rico Pérez">
    </div>
    <div class="form-group">
        <label for="form4-group">Correo Electrónico</label>
        <input type="text" class="form-control" id="emailUsuario" name="email" placeholder="francisco@gmail.com">
    </div>
    <div class="form-group">
        <label for="form5-group">Teléfono</label>
        <input type="text" class="form-control" id="telefonoUsuario" name="phone" placeholder="666666666">
    </div>
    <div class="form-group">
        <label for="form6-group">Dirección</label>
        <input type="text" class="form-control" id="direccionUsuario" name="adress" placeholder="Murcia">
    </div>
    <div>
        <label>Tipo de Usuario</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeUser" id="exampleRadios1" value="Administrador">
            <label class="form-check-label" for="exampleRadios1">
                Administrador
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeUser" id="exampleRadios2" value="Vendedor">
            <label class="form-check-label" for="exampleRadios2">
                Vendedor
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeUser" id="exampleRadios3" value="Cliente">
            <label class="form-check-label" for="exampleRadios3">
                Cliente
            </label>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
        <a type="button" href="/usuario/{{ $usuario->id }}" class="btn btn-secondary btn-lg">Cancelar</a>
    </div>
</form>
@endsection