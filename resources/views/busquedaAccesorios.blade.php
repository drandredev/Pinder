@extends('layouts.app')
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


<div >
  <form class="form-inline">
  
    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar accesorio" aria-label="Search">
    
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>

</div>


<div class="container">
    @foreach ($Accesorio as $acceso)
    <div class="row mb-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ action('AccesoriosController@show', $acceso->id) }}">{{ $acceso->nombre }}</a>
                    </h5>
                </div>
                <img src="{{ asset($acceso->imagen) }}" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
    @endforeach
    
</div>
<br>
<br>
<br>
<br>
<br>

@include('layouts.footer', ['container'=>'container-fluid'])


@endsection



</body>
