@extends('layouts.plantilla')
@section('contenido')
<br>
<br>
<br>
<br>
<br>
@auth
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                {!! csrf_field() !!}
                <fieldset>
                    <legend>
                    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                        <h2>Edicion Accesorio {{$edicionAcc->nombre}}</h2>
                    </div>
                    </legend>

                    <div class="form-group">
                        <label for="nombre" class="col-lg-label">Nombre</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $edicionAcc->nombre }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="marca" class="col-lg-label">Marca</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="marca" name="marca" value="{{ $edicionAcc->marca }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="precio" class="col-lg-label">Precio</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="precio" name="precio" value="{{ $edicionAcc->precio }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tipo" class="col-lg-label">Tipo</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $edicionAcc->tipo }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="talla" class="col-lg-label">Talla</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="talla" name="talla" value="{{ $edicionAcc->talla }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="color" class="col-lg-label">Color</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="color" name="color" value="{{ $edicionAcc->color }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn" style="background-color:#FF69B4;color:white;">Actualizar</button>
                            <a class="btn btn-dange" href="{{ route('miMascot') }}" role="button" style="background-color:orange;color:white" >Volver</a>
                        </div>
                    </div>

                </fieldset>
                
            </form>
        </div>
    </div>
@endauth

<br>
<br>
<br>
<br>
<br>
@include('layouts.footer', ['container'=>'container-fluid'])

@endsection