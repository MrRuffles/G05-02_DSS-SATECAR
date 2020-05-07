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
<div class="container">
    <div class='col-md-5'>
        <div class="form-group">
          <label>Fecha Inicio</label>
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control" />
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
                <input type='text' class="form-control"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>
<h3>Coches disponibles en las fechas</h3>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker({
            format: 'DD/MM/YYYY HH:mm:ss'
        });
        $('#datetimepicker7').datetimepicker({
            format: 'DD/MM/YYYY HH:mm:ss',
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