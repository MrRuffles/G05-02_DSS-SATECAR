@extends('barradenavegacion')
@section('content')
<form action="{{ action('ConcessionaireController@updateConcessionaire', $concessionaire->id) }}" method="POST" role="form">
    {{ csrf_field() }}
	<input name="_method" type="hidden">

	<div class="form-group">
		<h1 style="color: #689F38;"> &nbsp;Actualizar Concesionario</h1>
		<label for= "form-group1" class="col-sm-2 control-label">Nombre: </label> 
		<div class="col-sm-10">
			<input type="text"  class="form-control" id ="nombre" name="name" value="{{ $concessionaire->name }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group2" class="col-sm-2 control-label">Direccion: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="direccion" name="address" value="{{ $concessionaire->address }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group3" class="col-sm-2 control-label">CIF: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="IDcif" name="cif" value="{{ $concessionaire->cif }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group4" class="col-sm-2 control-label">Telefono: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="telefono" name= "phone" value="{{ $concessionaire->phone }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group5" class="col-sm-2 control-label">Ciudad: </label> 
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="ciudad" name="city" value="{{ $concessionaire->city }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group6" class="col-sm-2 control-label">Pais: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="pais" name="country" value="{{ $concessionaire->country }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group7" class="col-sm-2 control-label">Email: </label> 
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="mail" name="emal" value="{{ $concessionaire->email }}">
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
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Concesionario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>¿Quieres confirmar los cambios?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary btn-sm" value="Guardar cambios" id="button_updateConcessionaire">
                        </div>
                    </div>
                </div>
            </div>
            <a href="/concesionario/{{$concessionaire->id}}" type="button" class="btn btn-secondary btn-sm">Cancelar</a>
		</div>
	</div>
</form>
@endsection