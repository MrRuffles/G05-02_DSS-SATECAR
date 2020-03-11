@include('barradenavegacion')
<!doctype html>

<html>
<h1> Cars </h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Enrollment</th>
      <th scope="col">Years</th>
      <th scope="col">Km</th>
      <th scope="col">TradeMark</th>
      <th scope="col">Color</th>
      <th scope="col">FuelConsumtion</th>
      <th scope="col">Brand</th>
    </tr>
  </thead>
  <tbody> 
@foreach ($cars as $car)
    
    <tr>
        <th scope="row">Car {{$car->id}}</th> 
        <td>{{$car->enrollment}}</td>
        <td>{{$car->years}}</td>
        <td>{{$car->km}}</td>
        <td>{{$car->tradeMark}}</td>
        <td>{{$car->color}}</td>
        <td>{{$car->fuelConsumption}}</td>
        <td>{{$car->brand_id}}</td>
    </tr>
    
   
@endforeach
</tbody>
</table>
</html>
