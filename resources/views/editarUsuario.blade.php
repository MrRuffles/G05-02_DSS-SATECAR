@extends('barradenavegacion')
@section('content')
<h3>Editar Perfil</h3>
<form action="{{ action('UsersController@update', $usuario->id) }}" method="POST" role="form">
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
        <input type="text" class="form-control" id="dniUsuario" name="dni" value="{{ $usuario->dni }}" placeholder="{{ $usuario->dni }}">
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
        <input type="text" class="form-control" id="nombreUsuario" name="name" value="{{ $usuario->name }}" placeholder="{{ $usuario->name }}">
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
        <input type="text" class="form-control" id="apellidosUsuario" name="surnames" value="{{ $usuario->surnames }}" placeholder="{{ $usuario->surnames }}">
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
        <input type="text" class="form-control" id="emailUsuario" name="email" value="{{ $usuario->email }}" placeholder="{{ $usuario->email }}">
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
        <input type="text" class="form-control" id="telefonoUsuario" name="phone" value="{{ $usuario->phone }}" placeholder="{{ $usuario->phone }}">
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
        <input type="text" class="form-control" id="direccionUsuario" name="adress" value="{{ $usuario->adress }}" placeholder="{{ $usuario->adress }}">
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
        @if(Auth::user()->typeUser == 'Administrador')
            <a type="button" href="/usuario/{{ $usuario->id }}" class="btn btn-secondary btn-lg">Cancelar</a>
        @elseif(Auth::user()->typeUser == 'Cliente')
            <a type="button" href="/usuario" class="btn btn-secondary btn-lg">Cancelar</a>
        @endif
    </div>
</form>
@endsection