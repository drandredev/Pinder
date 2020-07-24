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
                <h2>Nuevo Accesorio</h2>       
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
        <form action="{{action('AccesoriosController@store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label class="col-sm-5 col-form-label" for="nombre">{{ __('Nombre Producto')}}</label>
            <div class="col-sm-12">
                <input id="nombre" class="form-control{{$errors->has('nombre') ? 'is-invalid' : ''}}" type="text" name="nombre" value="{{ old('nombre') }}" autofocus>
                @if ($errors->has('nombre'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('nombre') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-form-label" for="marca">{{ __('Marca')}} </label>
            <div class="col-sm-12">
                <textarea class="form-control {{$errors->has('marca') ? 'is invalid' : ''}} " id="marca" name="marca" rows="3">{{ old('marca') }}</textarea>
                @if ($errors->has('marca'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('marca') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-form-label" for="precio">{{ __('Precio')}} </label>
            <div class="col-sm-6">
                <textarea class="form-control {{$errors->has('precio') ? 'is invalid' : ''}} " id="precio" name="precio" rows="1">{{ old('precio') }}</textarea>
                @if ($errors->has('precio'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('precio') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-form-label" for="tipo">{{ __('Tipo')}} </label>
            <div class="col-sm-12">
                <textarea class="form-control {{$errors->has('tipo') ? 'is invalid' : ''}} " id="tipo" name="tipo" rows="3">{{ old('tipo') }}</textarea>
                @if ($errors->has('tipo'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('tipo') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-form-label" for="talla">{{ __('Talla')}} </label>
            <div class="col-sm-12">
                <textarea class="form-control {{$errors->has('talla') ? 'is invalid' : ''}} " id="talla" name="talla" rows="3">{{ old('talla') }}</textarea>
                @if ($errors->has('talla'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('talla') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-form-label" for="color">{{ __('Color')}} </label>
            <div class="col-sm-12">
                <textarea class="form-control {{$errors->has('color') ? 'is invalid' : ''}} " id="color" name="color" rows="3">{{ old('color') }}</textarea>
                @if ($errors->has('color'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('color') }}</strong>
                </span>
                @endif
            </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12">
                <div class="custom-file">
                  <input type="file" class="custom-file-input{{ $errors->has('imagen') ? 'is-invalid' : ''}}" id="imagen" name="imagen">
                  <label class="custom-file-label" for="customFile">{{ __('Elegir Imagen') }}</label>
                  @if ($errors->has('imagen'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('imagen') }}</strong>
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