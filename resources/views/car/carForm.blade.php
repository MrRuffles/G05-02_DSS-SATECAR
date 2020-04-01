@extends('barradenavegacion')
@section('content')
<p><h2>Añadir Coche</h2></p>
<form action="{{ action('CarController@saveCar') }}" method="POST" role="form">
    {{ csrf_field() }}
	<input name="_method" type="hidden">

	<div class="form-group">
		<label for= "form-group1" class="col-sm-2 control-label">Matrícula:</label> 
		{{-- Error messages --}}
		@if ($errors->has('enrollment'))
			<ul>
			@foreach ($errors->get('enrollment') as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif
		<div class="col-sm-10">
			<input type="text"  class="form-control" id ="matricula" name="enrollment"placeholder="1234 ABC" value="{{ old('enrollment') }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group2" class="col-sm-2 control-label">Años: </label> 
		{{-- Error messages --}}
		@if ($errors->has('years'))
			<ul>
			@foreach ($errors->get('years') as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="años" name="years"placeholder="10" value="{{ old('years') }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group3" class="col-sm-2 control-label">kilómetros: </label> 
		{{-- Error messages --}}
		@if ($errors->has('km'))
			<ul>
			@foreach ($errors->get('km') as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="IDkm" name="km" placeholder="30000" value="{{ old('km') }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group4" class="col-sm-2 control-label">Modelo: </label> 
		{{-- Error messages --}}
		@if ($errors->has('tradeMark'))
			<ul>
			@foreach ($errors->get('tradeMark') as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="modelo" name= "tradeMark" placeholder="ranchera" value="{{ old('tradeMark') }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group5" class="col-sm-2 control-label">Color: </label> 
		{{-- Error messages --}}
		@if ($errors->has('color'))
			<ul>
			@foreach ($errors->get('color') as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif
		<div class="col-sm-10">	
			<input type="text"  class="form-control" id="idcolor" name="color"placeholder="azul" value="{{ old('color') }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group6" class="col-sm-2 control-label">Consumo: </label> 
		{{-- Error messages --}}
		@if ($errors->has('fuelConsumption'))
			<ul>
			@foreach ($errors->get('fuelConsumption') as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="consumo" name="fuelConsumption" placeholder="5.6" value="{{ old('fuelConsumption') }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group7" class="col-sm-2 control-label">Marca: </label> 
		{{-- Error messages --}}
		@if ($errors->has('brand'))
			<ul>
			@foreach ($errors->get('brand') as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="marca" name="brand"placeholder="SEAT" value="{{ old('brand') }}">
		</div>
	</div>
	<div class="form-group">
		<label for="form-group8" class="col-sm-2 control-label">Concesionario: </label> 
		{{-- Error messages --}}
		@if ($errors->has('conces'))
			<ul>
			@foreach ($errors->get('conces') as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif
		<div class="col-sm-10">	
			<input type="text" class="form-control" id="concesionario" name="conces" placeholder="Hijos de Manuel Crespo" value="{{ old('conces') }}">
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