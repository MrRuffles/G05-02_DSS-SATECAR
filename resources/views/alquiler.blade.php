@extends('barradenavegacion')
@section('content')
<script>
     $(function() {
        $('#datetimepicker1').datetimepicker({
          language: 'pt-BR'
        });       
      });
</script>
<h1>Alquiler de vehiculos</h1>
<h3>Selecciona las fechas del alquiler</h3>
<form action="{{ action('RentsController@getDateOfRent') }}" method="POST" role="form">
  <input type="hidden" name="_method" value="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="container">
    <div class='col-md-5'>
        <div class="form-group">
          <label>Fecha Inicio</label>
            <div class='input-group date' id='datetimepicker6'>
                <input name="fecha_inicio" type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-5'>
        <div class="form-group">
            <label>Fecha  Final</label>
            <div class='input-group date' id='datetimepicker7'>
                <input name="fecha_final" type='text' class="form-control"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>
<button type="submmit" class="btn btn-success">Buscar</button>
</form>

<h3>Coches disponibles en las fechas</h3>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker({
            format: 'DD/MM/YYYY'
        });
        $('#datetimepicker7').datetimepicker({
            format: 'DD/MM/YYYY',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>

@endsection