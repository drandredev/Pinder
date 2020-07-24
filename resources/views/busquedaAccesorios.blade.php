@extends('layouts.plantilla')
@section('content')
<br>
<br>
<br>
<br>
<br>

<div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Búsqueda de Accesorios</h2>
         
</div>

<div class="container">

  <div style="margin-bottom:50px">
    <form class="form-inline">
    
      <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar accesorio" aria-label="Search">
      
        <button class="btn btn-outline-success my-2 my-sm-0" style="border-bottom-color:pink;" type="submit">Buscar</button>
    </form>

  </div>

    <div class="row portfolio-container" data-aos="fade-up">
    @foreach ($accesor as $acceso)
    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap" style="text-align:center; margin-bottom:25px">
              <img src="{{ asset($acceso->imagen) }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a style="color:pink;" href="{{ action('AccesoriosController@show', $acceso->id) }}">{{ $acceso->nombre }}</a>
              </div>
            </div>
          </div>
    @endforeach
    </div>
    {{$accesor->render()}}  
</div>

<br>
<br>
<br>
<br>
<br>

@include('layouts.footer', ['container'=>'container-fluid'])


@endsection



</body>
