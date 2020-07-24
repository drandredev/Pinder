@extends ('layouts.plantilla')
@section('contenido')
<br>
<br>
<br>
<br>
<br>
    <div class="container">
        <legend>
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Nueva Mascota</h2>       
            </div>
        </legend>
        <div class="row justify-content-center">
        @if (count($errors)>0)
            <div class="row alert alert-dnager">
            <p>¡Opss! Hubo problemas con los datos proporcionados</p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
        @endif
        <form action="{{action('PinderController@store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label class="col-sm-5 col-form-label" for="name">{{ __('Nombre Mascota')}}</label>
            <div class="col-sm-12">
                <input id="name" class="form-control{{$errors->has('name') ? 'is-invalid' : ''}}" type="text" name="name" value="{{ old('name') }}" autofocus>
                @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-form-label" for="description">{{ __('Descripcion')}} </label>
            <div class="col-sm-12">
                <textarea class="form-control {{$errors->has('description') ? 'is invalid' : ''}} " id="description" name="description" rows="3">{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-form-label" for="sex">{{ __('Sexo')}} </label>
            <div class="col-sm-6">
                <textarea class="form-control {{$errors->has('sex') ? 'is invalid' : ''}} " id="sex" name="sex" rows="1">{{ old('sex') }}</textarea>
                @if ($errors->has('sex'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('sex') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-form-label" for="race">{{ __('Raza')}} </label>
            <div class="col-sm-12">
                <textarea class="form-control {{$errors->has('race') ? 'is invalid' : ''}} " id="race" name="race" rows="3">{{ old('race') }}</textarea>
                @if ($errors->has('race'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('race') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-form-label" for="type">{{ __('Tipo')}} </label>
            <div class="col-sm-12">
                <textarea class="form-control {{$errors->has('type') ? 'is invalid' : ''}} " id="type" name="type" rows="3">{{ old('type') }}</textarea>
                @if ($errors->has('type'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('type') }}</strong>
                </span>
                @endif
            </div>
            </div>

            
            <div class="form-group">
              <div class="col-sm-12">
                <div class="custom-file">
                  <input type="file" class="custom-file-input{{ $errors->has('image') ? 'is-invalid' : ''}}" id="image" name="image">
                  <label class="custom-file-label" for="customFile">{{ __('Elegir Imagen') }}</label>
                  @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn" style="background-color:#FF69B4; color:white;">
                    {{ __('Crear') }}
                </button>
            </div>
            </div>
        </form>
        </div>
    </div>
    <br>
<br>
<br>
<br>
<br>
@include('layouts.footer', ['container'=>'container-fluid'])

@endsection