@extends('layouts.app')

@section('content')
<div class="jumbotron jumbroton-fluid">
    <div class="container text-center">
        <h1 class="display-3">Bienvenido a Pinder</h1>
    </div>
</div>
<div class="container">
    @foreach ($registros as $registro)
    <div class="row mb-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ action('PinderController@show', $registro->id) }}">{{ $registro->name }}</a>
                    </h5>
                </div>
                <img src="{{ asset($registro->image) }}" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
</body>
</html>