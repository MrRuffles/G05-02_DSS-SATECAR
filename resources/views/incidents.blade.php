@include('barradenavegacion')
<!doctype html>
<html>
<h1> Incidents </h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tipo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Grado</th>
    </tr>
  </thead>
  <tbody> 
@foreach ($incidents as $incident)
    
    <tr>
        <th scope="row">Incident {{$incident->id}}</th> 
        <td>{{$incident->type}}</td>
        <td>{{$incident->description}}</td>
        <td>{{$incident->price}}</td>
        <td>{{$incident->grade}}</td>
    </tr>
    
   
@endforeach
</tbody>
</table>
</html>