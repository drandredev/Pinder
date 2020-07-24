@extends('layouts.plantilla')
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<div class="container">
        <legend>
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Registro Accesorios</h2>       
        </div>
        </legend>
        <a href="{{ route('CrearAccesorio') }}" class="btn btn-info">&#x2B; Agregar Accesorio</a>

    <table class="table table-striped">
        <thead>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Precio</th>
        <th>Tipo</th>
        <th>Talla</th>
        <th>Color</th>

        </thead>
        <tbody>
            @foreach ($accesorios as $accesorio)
            <tr>
                <td>{{ $accesorio->nombre }}</td>
                <td>{{ $accesorio->marca }}</td>
                <td>{{ $accesorio->precio}}</td>
                <td>{{ $accesorio->tipo}}</td>
                <td>{{ $accesorio->talla}}</td>
                <td>{{ $accesorio->color}}</td>


                <td>
                    <a href="{{ route('borrarAccesorio', $accesorio->id) }}" class="btn btn-danger">&#x1F5D1;</a> 
                    
                    <a href="{{ route('editarAccesorioAdmin', $accesorio->id) }}" class="btn btn-info">&#x2692;</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$accesorios->render()}}
    <a href="{{ route('registros') }}" class="btn btn-info" style="background-color:red;">&#x21BB; Volver</a>
</div>
<br>
<br>
<br>
<br>
<br>

@include('layouts.footer', ['container'=>'container-fluid'])

@endsection