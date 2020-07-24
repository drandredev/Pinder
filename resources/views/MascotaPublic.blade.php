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
      <h1 class="featurette-heading" style="text-align:center"><span class="text-muted">{{ $post->name }}</span></h1>
      <img src="{{ asset($post->image) }}" class="card-img-top" alt="...">
      <p><a class="btn" href="{{ action('PinderController@index') }}" role="button" style="background-color:#FF69B4; color:white; margin-top:20px">&#x2190; Volver a Inicio </a></p>
      </div>

    <div class="col-md-6" style="background-color:#FFFF;">
      <br>
      <br>
      <br>
      
      <h2 class="lead"><b>SEXO:</b></h2>
      <p class="lead"> {{ $post->sex }}</p>

      <h2 class="lead"><b>RAZA:</b></h2>
      <p class="lead"> {{ $post->race }}</p>

      <h2 class="lead"><b>TIPO:</b></h2>
      <p class="lead"> {{ $post->type }}</p>
      
      <h2 class="lead"><b>DESCRIPCION:</b></h2>
      <p class="lead"> {{ $post->description }}</p>
      
      <h3 class="card-subtitle mb-2 text-muted">Contactos: {{$post->user->telef}}</h3>
          
    </div>
  </div>
  @auth
    <form action="{{ action('ComentariosController@store', ['post_id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <div class="form-group">
        <label class="col-sm-2 col-form-label" for="comentario"><h3>{{ __('Comentario') }}</h3></label>
        <div class="col-sm-9">
          <textarea class="form-control @error('comentario') id-invalid @enderror" id="comentario" name="comentario" rows="3">{{ old('comentario') }}</textarea>
          @error('content')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <button type="submit" class="btn" style="background-color:#FF69B4; color:white;">
            {{ __('Colocar Publicacion') }}
          </button>
      </div>
    </form>
  @endauth
  @guest
  <p>Si deseas comentar <a href="{{ action('Auth\LoginController@showLoginForm') }}">inicia sesion</a> o <a href="{{ action('Auth\RegisterController@showRegistrationForm') }}">registrate</a></p>
  @endguest
  @forelse ($post->comentarios as $comment)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comment->user->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at->toFormattedDateString() }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Telefono: {{ $comment->user->telef }}</h6>
                            <p class="card-text">{{ $comment->comentario }}</p>
                        </div>
                    </div>
                @empty
                    <p>No hay comentarios para esta publicacion, se el primero</p>
                @endforelse
    
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