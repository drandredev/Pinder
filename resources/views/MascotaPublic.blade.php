<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('jp/app.js') }}"></script>
    <title>Pinder</title>
</head>
<body>

<div class="jumbotron jumbroton-fluid">
    <div class="container text-center">
        <h1 class="display-3">Informacion Mascota</h1>
    </div>
</div>

<div class="container">
    <div class="row mb-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <img src="{{ asset($registro1->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nombre: {{ $registro1->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Sexo: {{$registro1->sex}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Raza: {{$registro1->race}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tipo: {{$registro1->type}}</h6>
                    <h4 class="card-title">Descripcion Mascota:</h4>
                    <p class="card-text"> {{ $registro1->description }}</p>
                    <a href="{{ action('PinderController@index') }}" class="card-link">Volver al menu de Inicio</a>
                </div>
            </div>
        </div>
    </div>        

</div>

</body>
</html>