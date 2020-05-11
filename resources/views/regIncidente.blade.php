@extends('barradenavegacion')
@section('content')

<h1>Registro de Incidente</h1>
<div class="container">
    <div class='col-md-5'>
        <div class="form-group">
          <label>Seleccionar Cliente:</label>
          <select class="form-control">
            <option>Seleccionar Cliente</option>
            @foreach($clients_rented as $cliente)
              <option>{{$cliente->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
    <div class='col-md-5'>
        <div class="form-group">
          <label>Seleccionar Coche Afectado:</label>
          <select class="form-control">
            <option>Seleccionar Coche</option>
            @foreach($cars_rented as $car)
              <option>{{$car->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
</div>

@endsection