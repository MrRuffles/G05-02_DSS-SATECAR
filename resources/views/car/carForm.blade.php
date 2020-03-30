@extends('barradenavegacion')
@section('content')
<p><h2>Añadir Coche</h2></p>
<form action="{{ action('CarController@saveCar') }}" method="POST" role="form">
    {{ csrf_field() }}
	<input name="_method" type="hidden">

	<div class="form-group">
		<label for= "form-group1" class="col-sm-2 control-label">Matrícula:</label> 
		<div class="col-sm-10">
			<input type="text"  class="form-control" id ="matricula" name="enrollment"placeholder="1234 ABC">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group2" class="col-sm-2 control-label">Años: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="años" name="years"placeholder="10">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group3" class="col-sm-2 control-label">kilómetros: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="IDkm" name="km" placeholder="30000">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group4" class="col-sm-2 control-label">Modelo: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="modelo" name= "tradeMark" placeholder="ranchera">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group5" class="col-sm-2 control-label">Color: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="idcolor" name="color"placeholder="azul">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group6" class="col-sm-2 control-label">Consumo: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="consumo" name="fuelConsumption" placeholder="5.6">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group7" class="col-sm-2 control-label">Marca: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="marca" name="brand"placeholder="SEAT">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-primary btn-sm" value="Añadir" id="button_addCar">
			<a href="/coches" type="button" class="btn btn-secondary btn-sm">Cancelar</a>
		</div>
	</div>
	
</form>
@endsection