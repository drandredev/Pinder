@extends('layouts.plantilla')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 
@section('title', 'Contact')

@section('content')
  
  <div class="container">
  <legend>
    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Contactanos</h2>       
    </div>
  </legend>

    
    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="content" rows="5" data-rule="required" data-msg="Escribe aquí" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <script>
                function Exito()
                {
                alert("Mensaje enviado, seras redirigido a la página principal");
                }
              </script>
              
              <div class="text-center"><button class="btn" onclick="Exito()" type="submit" style="background-color:#FF69B4;color:white;">Enviar mensaje</button></div>
              
      </form>
  </div>
    <br>
    <br>

    @include('layouts.footer', ['container'=>'container-fluid'])
@endsection