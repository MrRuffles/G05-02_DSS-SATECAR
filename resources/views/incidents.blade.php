@extends('barradenavegacion')
@section('content')
<h1> Incidentes </h1>
<div>
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
          <th scope="row">{{$incident->id}}</th> 
          <td>{{$incident->type}}</td>
          <td>{{$incident->description}}</td>
          <td>{{$incident->price}}</td>
          <td>{{$incident->grade}}</td>
      </tr>
      
    
  @endforeach
  </tbody>
  </table>
  {{ $incidents->links() }}
</div>
@endsection