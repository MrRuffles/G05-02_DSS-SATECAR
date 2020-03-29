@extends('barradenavegacion')
@section('content')

<form action="{{ action('CarController@updateCar', $car->id) }}" method="POST" role="form">
    {{ csrf_field() }}
	<input name="_method" type="hidden">

	<div class="form-group">
	<h2>Actualizar Coche</h2>
		<label for= "form-group1" class="col-sm-2 control-label">Matrícula:</label> 
		<div class="col-sm-10">
			<input type="text"  class="form-control" id ="matricula" name="enrollment" value="{{ $car->enrollment }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group2" class="col-sm-2 control-label">Años: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="años" name="years" value="{{ $car->years }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group3" class="col-sm-2 control-label">kilómetros: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="IDkm" name="km" value="{{ $car->km }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group4" class="col-sm-2 control-label">Modelo: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="modelo" name= "tradeMark" value="{{ $car->tradeMark }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group5" class="col-sm-2 control-label">Color: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="idcolor" name="color" value="{{ $car->color }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group6" class="col-sm-2 control-label">Consumo: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="consumo" name="fuelConsumption" value="{{ $car->fuelConsumption }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group7" class="col-sm-2 control-label">Marca: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="marca" name="brand" value="{{ $brand->name }}">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                Actualizar
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header btn-info">
                            <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Coche</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>¿Quieres confirmar los cambios?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary btn-sm" value="Guardar cambios" id="button_updateCar">
                        </div>
                    </div>
                </div>
            </div>
            <a href="/coches/{{$car->id}}" type="button" class="btn btn-secondary btn-sm">Cancelar</a>
		</div>
	</div>
</form>
@endsection