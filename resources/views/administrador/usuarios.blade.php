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
            <h2>Registro Usuarios</h2>       
        </div>
        </legend>
    <a href="{{ route('accesorios') }}" class="btn" style="background-color:brown; color:white;">&#x2637; Registro Accesorios</a>
    <a href="{{ route('mascotas') }}" class="btn" style="background-color:green; color:white;">&#x2637; Registro Mascotas</a>

    <table class="table table-striped">
        <thead>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Creacion</th>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->name }}</td>
                <td>
                    @if ($usuario->email =="pinder@tecsup.edu.pe")
                       <span class="label label-danger">{{ $usuario->email }}   ADMIN</span>
                    @else
                       <span class="label label-primary">{{ $usuario->email }}</span>
                    @endif
                </td>
                <td>{{ $usuario->telef}}</td>
                <td>{{ $usuario->created_at}}</td>

                <td>
                    <a href="{{ route('destroy', $usuario->id) }}" class="btn btn-danger">&#x1F5D1;</a> 
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$usuarios->render()}}
</div>
<br>
<br>
<br>
<br>
<br>

@include('layouts.footer', ['container'=>'container-fluid'])

@endsection