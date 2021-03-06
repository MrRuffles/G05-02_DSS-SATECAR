<!doctype html>
<html>
    <title>SATECAR</title>
    <head>
<!-- LINKS NECESARIOS PARA EL FUNCIONAMIENTO DEL NAVBAR -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body id="container">
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="/">SATECAR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        @if(Auth::check())
            @if(Auth::user()->typeUser == 'Administrador')
            <a class="nav-item nav-link active" href="/usuarios">Administrar Usuarios<span class="sr-only"></span></a>
            <a class="nav-item nav-link active" href="/concesionario">Administrar Concesionarios<span class="sr-only"></span></a>
            <a class="nav-item nav-link active" href="/coches">Administrar Coches<span class="sr-only"></span></a>
            <a class="nav-item nav-link active" href="/marcas">Listado Marcas<span class="sr-only"></span></a>
            <a class="nav-item nav-link active" href="/incidentes">Listado Incidentes<span class="sr-only"></span></a>
            <a class="nav-item nav-link active" href="/incidentes/registro">Registro Incidente<span class="sr-only"></span></a>
            @endif
            @if(Auth::user()->typeUser == 'Cliente')
                <a class="nav-item nav-link active" href="/alquiler">Alquiler<span class="sr-only"></span></a>
            @endif
        @endif
        @guest
        <div class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/registroInicial">{{ __('Registro') }}</a>
            </li>
        @endguest
        <div class="navbar-nav ml-auto">
        @if(Auth::check())
            
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <!--img src="images/User.png" width="20" height="20"--> {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ action('UsersController@getPerfilUser') }}">Perfil</a>
                
                </div>
            </li>
        @endif
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            
        </div>
    </nav>
       
    </header>
    
    <div  class="container">
        @yield('content')
    </div>
    
    <footer class="container">
    <div class="row justify-content-center">
        <p>&copy; 2019-2020 Company SATECAR, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </div>
    </footer>

    </body>
</html>