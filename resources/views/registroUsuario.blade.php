@extends('barradenavegacion')
@section('content')
<h3>Registro de Usuario</h3>
<form action="{{ action('UsersController@store') }}" method="POST" role="form">
    {{ csrf_field() }}
    <input name="_method" type="hidden">
    <div class="form-group">
        <label for="form1-group">DNI</label>
        {{--Error messages --}}
        @if ($errors->has('dni'))
            <ul>
                @foreach($errors->get('dni') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" class="form-control" id="dniUsuario" name="dni" value="{{ old('dni') }}" placeholder="45831413T">
    </div>
    <div class="form-group">
        <label for="form2-group">Nombre</label>
        {{--Error messages --}}
        @if ($errors->has('name'))
            <ul>
                @foreach($errors->get('name') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" class="form-control" id="nombreUsuario" name="name" value="{{ old('name') }}" placeholder="Francisco Javier">
    </div>
    <div class="form-group">
        <label for="form3-group">Apellidos</label>
        {{--Error messages --}}
        @if ($errors->has('surnames'))
            <ul>
                @foreach($errors->get('surnames') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" class="form-control" id="apellidosUsuario" name="surnames" value="{{ old('surnames') }}" placeholder="Rico Pérez">
    </div>
    <div class="form-group">
        <label for="form4-group">Correo Electrónico</label>
        {{--Error messages --}}
        @if ($errors->has('email'))
            <ul>
                @foreach($errors->get('email') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" class="form-control" id="emailUsuario" name="email" value="{{ old('email') }}" placeholder="francisco@gmail.com">
    </div>
    <div class="form-group">
        <label for="form5-group">Teléfono</label>
        {{--Error messages --}}
        @if ($errors->has('phone'))
            <ul>
                @foreach($errors->get('phone') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" class="form-control" id="telefonoUsuario" name="phone" value="{{ old('phone') }}" placeholder="666666666">
    </div>
    <div class="form-group">
        <label for="form6-group">Dirección</label>
        {{--Error messages --}}
        @if ($errors->has('adress'))
            <ul>
                @foreach($errors->get('adress') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" class="form-control" id="direccionUsuario" name="adress" value="{{ old('adress') }}" placeholder="Murcia">
    </div>
    <div>
        <label>Tipo de Usuario</label>
        @if ($errors->has('typeUser'))
            <ul>
                @foreach($errors->get('typeUser') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
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
        <a type="button" href="/usuarios" class="btn btn-secondary btn-lg">Cancelar</a>
    </div>
</form>
@endsection