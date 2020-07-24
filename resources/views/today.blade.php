@extends('layouts.plantilla')

@section('contenido')
<br>
<br>
<br>
<br>
<br>

<legend>
<div class="section-title" data-aos="fade-in" data-aos-delay="100">
    <h2>Publicaciones Hoy</h2>       
</div>
</legend>
<div class="container">
<div class="row portfolio-container" data-aos="fade-up">
    @foreach ($siempre as $siemp)
    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap" style="text-align:center; margin-bottom:25px">
              <img src="{{ asset($siemp->image) }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a style="color:pink;" href="{{ action('PinderController@show', $siemp->id) }}">{{ $siemp->name }}</a>
              </div>
            </div>
          </div>
    @endforeach
</div> 
{{$siempre->render()}}
</div>
</div>
<br>
<br>
<br>
<br>
<br>

@include('layouts.footer', ['container'=>'container-fluid'])


@endsection
</body>