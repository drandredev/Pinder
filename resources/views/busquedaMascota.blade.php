
@extends('layouts.plantilla')

@section('contenido')
<br>
<br>
<br>
<br>
<br>

<legend>
<div class="section-title" data-aos="fade-in" data-aos-delay="100">
    <h2>Búsqueda Especifica Mascota</h2>       
</div>
</legend>

<div class="container">
<div >
  <form class="form-inline">
  
    <input name="buscarRaza" class="form-control mr-sm-2" type="search" placeholder="Buscar raza" aria-label="Search">

    <input name="buscarSexo" class="form-control mr-sm-2" type="search" placeholder="Buscar sexo" aria-label="Search">

    <input name="buscarTipo" class="form-control mr-sm-2" type="search" placeholder="Buscar tipo" aria-label="Search">

       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>

</div>


<div class="row portfolio-container" data-aos="fade-up">
    @foreach ($busquedaA as $busquedaAv)
    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap" style="text-align:center; margin-bottom:25px">
              <img src="{{ asset($busquedaAv->image) }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a style="color:pink;" href="{{ action('PinderController@show', $busquedaAv->id) }}">{{ $busquedaAv->name }}</a>
              </div>
            </div>
          </div>
    @endforeach
</div> 
{{$busquedaA->render()}}
</div>
<br>
<br>
<br>
<br>
<br>

@include('layouts.footer', ['container'=>'container-fluid'])

@endsection
</body>