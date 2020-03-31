@extends('barradenavegacion')
@section('content')
<form action="{{ action('ConcessionaireController@updateConcessionaire', $concesionario->id) }}" method="POST" role="form">
    {{ csrf_field() }}
	<input name="_method" type="hidden">

	<div class="form-group">
		<h1 style="color: #689F38;"> &nbsp;Actualizar Concesionario</h1>
		<label for= "form-group1" class="col-sm-2 control-label">Nombre: </label> 
		<div class="col-sm-10">
			<input type="text"  class="form-control" id ="nombre" name="name" value="{{ $concesionario->name }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group2" class="col-sm-2 control-label">Direccion: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="direccion" name="address" value="{{ $concesionario->address }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group3" class="col-sm-2 control-label">CIF: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="IDcif" name="cif" value="{{ $concesionario->cif }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group4" class="col-sm-2 control-label">Telefono: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="telefono" name= "phone" value="{{ $concesionario->phone }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group5" class="col-sm-2 control-label">Ciudad: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="ciudad" name="city" value="{{ $concesionario->city }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group6" class="col-sm-2 control-label">Pais: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="pais" name="country" value="{{ $concesionario->country }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group7" class="col-sm-2 control-label">Email: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="mail" name="email" value="{{ $concesionario->email }}">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div>
        		<button type="submit" class="btn btn-primary btn-ml">Confirmar</button>
        		<a type="button" href="/concesionario/{{ $concesionario->id }}" class="btn btn-secondary btn-ml">Cancelar</a>
    		</div>
        </div>
	</div>
</form>
@endsection