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
                        <h2>Edicion Usuario {{$edicion->name}}</h2>
                    </div>
                    </legend>

                    <div class="form-group">
                        <label for="name" class="col-lg-label">Nombre</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $edicion->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-label">Email</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="email" name="email" value="{{ $edicion->email }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telef" class="col-lg-label">Telefono</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="telef" name="telef" value="{{ $edicion->telef }}">
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