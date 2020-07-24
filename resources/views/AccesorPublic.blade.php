@extends('layouts.plantilla')
@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



  <div class="row featurette" style="margin:60px">
    <div class="col-md-5">
      <img src="{{ asset($accesoPu->imagen) }}" class="card-img-top" alt="...">
      <p><a class="btn btn-secondary" href="{{ action('AccesoriosController@index') }}" role="button" style="background-color:#FF69B4; color:white; margin-top:20px">&#x2190; Volver a Inicio </a></p>
      </div>

    <div class="col-md-6" style="background-color:#FFFF;">
      <h2 class="featurette-heading text-center"><span class="text-muted">{{ $accesoPu->nombre }}</span></h2>
      
      <h2 class="lead"><b>Marca:</b></h2>
      <p class="lead"> {{ $accesoPu->marca }}</p>

      <h2 class="lead"><b>Precio:</b></h2>
      <p class="lead"> {{ $accesoPu->precio }}</p>

      <h2 class="lead"><b>Tipo:</b></h2>
      <p class="lead"> {{ $accesoPu->tipo }}</p>
      
      <h2 class="lead"><b>Talla:</b></h2>
      <p class="lead">{{ $accesoPu->talla }}</p>

      <h2 class="lead"><b>Color:</b></h2>
      <p class="lead">{{ $accesoPu->color }}</p>
    </div>
 
  </div>
  <br>
  <br>
  
  
@include('layouts.footer', ['container'=>'container-fluid'])

</html>