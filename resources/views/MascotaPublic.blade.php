@extends('layouts.plantilla')

@section('titulo','Pinder')

@section('contenido')

<br>
<br>
<br>
<br>
<br>

  <div class="row featurette" style="margin:60px">
    <div class="col-md-5">
      <img src="{{ asset($registro1->image) }}" class="card-img-top" alt="...">
      <p><a class="btn btn-dark" href="{{ action('PinderController@index') }}" role="button">&vartriangleleft; Volver a Inicio </a></p>
      </div>

    <div class="col-md-6" style="background-color:#FFFF;">
      <h2 class="featurette-heading"><span class="text-muted">{{ $registro1->name }}</span></h2>
      
      <h2 class="lead">SEXO:</h2>
      <p class="lead"> {{ $registro1->sex }}</p>

      <h2 class="lead">RAZA:</h2>
      <p class="lead"> {{ $registro1->race }}</p>

      <h2 class="lead">TIPO:</h2>
      <p class="lead"> {{ $registro1->type }}</p>
      
      <h2 class="lead">DESCRIPCION:</h2>
      <p class="lead"> {{ $registro1->description }}</p>
    </div>
 
  </div>
  </section>


 

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<br>
<br>
<br>
<br>
<br>

@include('layouts.footer', ['container'=>'container-fluid'])

</html>