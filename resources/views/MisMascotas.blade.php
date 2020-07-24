@extends('layouts.plantilla')
@section('contenido')
<br>
<br>
<br>
<br>
<br>

<div class="container">
<legend>
<div class="section-title" data-aos="fade-in" data-aos-delay="100">
    <h2>Mis Mascotas</h2>       
</div>
</legend>

<a href="{{ route('CrearMascota') }}" class="btn" style="background-color:green; color:white;">&#x2B; Agregar Mascota</a>
<div class="row portfolio-container" data-aos="fade-up">
    @foreach( $registros as $publicacion)
    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap" style="text-align:center; margin-bottom:25px">
            <a style="color:black;" href="{{ action('PinderController@show', $publicacion->id) }}"><h2>{{ $publicacion->name }}</h2></a>
              <img src="{{ asset($publicacion->image) }}" class="img-fluid" alt="">
              <div class="portfolio-links">
              </div>

              <div class="container">
                  <form method="POST" action="{{ url("/mascota/{$publicacion->id}") }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn" style="background-color:red;color:white;width:150px; height:40px;margin-top:5px;">Borrar</button>
                  </form>
              </div>

              <div class="form-group">
                <div class="button">
                    <a class="btn " style="background-color:orange;color:white;width:150px; height:40px;" href="{{ action('PinderController@edit',$publicacion->id)}}" role="button">Editar Mascota</a>
                </div>
              </div>

            </div>
          </div>
    @endforeach
</div>
{{ $registros->render() }}
</div>
<br>
<br>
<br>
<br>
<br>

@include('layouts.footer', ['container'=>'container-fluid'])

@endsection