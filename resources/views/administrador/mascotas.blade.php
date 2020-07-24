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
            <h2>Registro Mascotas</h2>       
        </div>
        </legend>

        <a href="{{ route('CrearMascota') }}" class="btn btn-info" style="color:white;">&#x2B; Agregar Mascota</a>

    <table class="table table-striped">
        <thead>
        <th>Nombre</th>
        <th>Sexo</th>
        <th>Descripcion</th>
        <th>Raza</th>
        <th>Tipo</th>

        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
            <tr>
                <td>{{ $mascota->name }}</td>
                <td>{{ $mascota->sex }}</td>
                <td style="width:290px">{{ $mascota->description}}</td>
                <td>{{ $mascota->race}}</td>
                <td>{{ $mascota->type}}</td>
                <!--<td>{{$mascota->user_id}}</td>-->


                <td>
                    <a href="{{ route('borrarMascota', $mascota->id) }}" class="btn btn-danger">&#x1F5D1;</a> 
                    
                    <a href="{{ route('editarMascotaAdmin', $mascota->id) }}" class="btn btn-info">&#x2692;</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$mascotas->render()}}
    <a href="{{ route('registros') }}" class="btn btn-info" style="background-color:red;">&#x21BB;Volver</a>
</div>
<br>
<br>
<br>
<br>
<br>

@include('layouts.footer', ['container'=>'container-fluid'])

@endsection