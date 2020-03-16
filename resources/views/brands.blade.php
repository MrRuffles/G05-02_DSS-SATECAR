@include('barradenavegacion')
<!doctype html>
<html>
<h1> Brands </h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Año de Fundacion</th>
      <th scope="col">Pais</th>
      <th scope="col">Gama</th>
    </tr>
  </thead>
  <tbody> 
@foreach ($brands as $brand)
    
    <tr>
        <th scope="row">{{$brand->id}}</th> 
        <td>{{$brand->name}}</td>
        <td>{{$brand->yearofdeparture}}</td>
        <td>{{$brand->country}}</td>
        <td>{{$brand->range}}</td>
    </tr>
    
   
@endforeach
</tbody>
</table>
{{ $brands->links() }}
</html>