@extends('barradenavegacion')
@section('content')
<h3>Registro de Usuario</h3>
<form action="">
    <div class="form-group">
        <label for="form1-group">DNI</label>
        <input type="text" class="form-control" id="dniUsuario" placeholder="45831413T">
    </div>
    <div class="form-group">
        <label for="form1-group">Nombre</label>
        <input type="text" class="form-control" id="nombreUsuario" placeholder="Francisco Javier">
    </div>
    <div class="form-group">
        <label for="form1-group">Apellidos</label>
        <input type="text" class="form-control" id="apellidosUsuario" placeholder="Rico Pérez">
    </div>
    <div class="form-group">
        <label for="form1-group">Correo Electrónico</label>
        <input type="text" class="form-control" id="emailUsuario" placeholder="francisco@gmail.com">
    </div>
    <div class="form-group">
        <label for="form1-group">Teléfono</label>
        <input type="text" class="form-control" id="telefonoUsuario" placeholder="666666666">
    </div>
    <div class="form-group">
        <label for="form1-group">Dirección</label>
        <input type="text" class="form-control" id="direccionUsuario" placeholder="Murcia">
    </div>
    <div>
        <label>Tipo de Usuario</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
            <label class="form-check-label" for="exampleRadios1">
                Administrador
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Vendedor
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
            <label class="form-check-label" for="exampleRadios3">
                Cliente
            </label>
        </div>
    </div>
    <div>
        <button type="button" class="btn btn-primary btn-lg">Confirmar</button>
        <a type="button" href="/usuarios" class="btn btn-secondary btn-lg">Cancelar</a>
    </div>
</form>
@endsection