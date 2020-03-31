@extends('barradenavegacion')
@section('content')
<form action="{{ action('ConcessionaireController@saveConcessionaire') }}" method="POST" role="form">
    {{ csrf_field() }}
	<input name="_method" type="hidden">

	<div class="form-group">
		<h1 style="color: #689F38;"> &nbsp;Añadir Concesionario</h1>
		<label for= "form-group1" class="col-sm-2 control-label">Nombre: </label> 
		<div class="col-sm-10">
			<input type="text"  class="form-control" id ="nombre" name="name"placeholder="Autos Bañon">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group2" class="col-sm-2 control-label">Direccion: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="direccion" name="address"placeholder="Av Mediterraneo 115">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group3" class="col-sm-2 control-label">Cif: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="IDcif" name="cif" placeholder="B04544904">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group4" class="col-sm-2 control-label">Telefono: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="telefono" name= "phone" placeholder="965389999">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group5" class="col-sm-2 control-label">Ciudad: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="ciudad" name="citi"placeholder="Elda">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group6" class="col-sm-2 control-label">Pais: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="pais" name="country" placeholder="España">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group7" class="col-sm-2 control-label">Email: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="mail" name="email"placeholder="info@autosbanon.es">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-primary btn-sm" value="Añadir" id="button_addConcessionaire">
		</div>
	</div>
</form>
@endsection