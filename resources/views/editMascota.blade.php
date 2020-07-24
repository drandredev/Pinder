@extends ('layouts.plantilla')
@section('contenido')
<br>
<br>
<br>
<br>
<br>
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
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
                        <h2>Edicion Mascotas</h2>       
                    </div>
                </legend>

                    <div class="form-group">
                        <label for="name" class="col-lg-label">Nombre</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $post->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sex" class="col-lg-label">Sexo</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="sex" name="sex" value="{{ $post->sex }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-lg-label">Descripcion</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="description" name="description" value="{{ $post->description }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="race" class="col-lg-label">Raza</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="race" name="race" value="{{ $post->race }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="type" class="col-lg-label">Tipo</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="type" name="type" value="{{ $post->type }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn" style="background-color:#FF69B4; color:white">Listo!</button>
                            <a class="btn btn-dange" href="{{ route('miMascot') }}" role="button" style="background-color:orange;color:white;">Volver</a>
                        </div>

                    </div>
                </fieldset>
                
            </form>
        </div>
<br>
<br>
<br>
<br>
<br>
</div>
@include('layouts.footer', ['container'=>'container-fluid'])

@endsection
