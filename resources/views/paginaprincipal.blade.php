@extends('barradenavegacion')
@section('content')
<h1>SATECAR</h1>
<p>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000">
      <img src="https://www.autobild.es/sites/autobild.es/public/styles/main_element/public/dc/fotos/Volvo-XC60-2018-C01.jpg?itok=fatKiKeg" class="d-block w-100" alt="1000">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/citroen-c3-2020-1600-01-1581430396.jpg?crop=1.00xw:0.670xh;0,0.182xh&resize=1200:*" class="d-block w-100" alt="1000">
    </div>
    <div class="carousel-item">
      <img src="https://www.cochesyconcesionarios.com/uploads/mercedes/clase-glc/1/OD/mercedes-benz-glc-2020-1024-08-11b1a84733614c8727150c104775fb0aed584f11.jpeg" class="d-block w-100" alt="1000">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</p>
<div align="center">
  <p>
  <a type="button" class="btn btn-primary btn-lg" href="/flotaCoches">Mostrar coches</a>
  <a type="button" class="btn btn-primary btn-lg" href="/concesionario">Mostrar concesionarios</a>
  </p>
</div> 
<p>
    <h3>Pagina de alquiler de vehiculos</h3>
</p>

<p>
    En nuestra página encontraras la mayor cantidad de coches para alquilar, desde
    modelos de gama alta, para la gente que le gustas las emociones fuertes y la velocidad,
    hasta modelos de gama mas económica para los conductores que necesitan un vehiculo para su dia a dia.
</p>
<p>
<a href="https://twitter.com/SateCar?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @SateCar</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</p>
@endsection
