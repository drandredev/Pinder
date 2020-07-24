@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('titulo','Pinder')</title>
  <!-- Palabras META SEO O COSAS ASI-->
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Iconografía -->
  <link href="/static/img/icon-box.png" rel="icon">
  <link href="/static/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fuente -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- VENDOR-->
  <link href="/static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/static/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/static/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/static/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/static/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/static/vendor/aos/aos.css" rel="stylesheet">

  <!-- CSS PRINCIPAL-->
  <link href="/static/css/style.css" rel="stylesheet">

</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <a href="/"><img src="/static/img/logotransparente.png" width="100px" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
      
        <ul>
          <li class="active" ><a href="{{ action('PinderController@index') }}">Inicio</a></li>
          <li><a href="#services">Nosotros</a></li>
          <li><a href="#cta">Match</a></li>
          <li><a href="#portfolio">Mascotas</a></li>
          <li><a href="#team">Desarrolladores</a></li>
          <li><a href="{{ action('AccesoriosController@index') }}">Accesorios</a></li>
          <li><a href="#contact">Contacto</a></li>

        @guest
          <li class="nav-item">
            <a href="{{ route('login') }}">Ingresar</a>
          </li>
          @if(Route::has('register'))
            <li class="nav-item">
              <a href="{{ route('register') }}">Registrate</a>
            </li>
          @endif

        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="background-color:#FF69B4;color:white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color:#FF69B4;">
            
                @if(Auth::user()->email == "pinder@tecsup.edu.pe")
                  <a href="{{ route('registros') }}" class="btn btn-info" style="color:white;">Admin</a>
                @endif
                <a class="dropdown-item" href="{{ route('editarUsuario') }}" style="color:white">Mi Cuenta</a>

                <a class="cta-btn" href="{{  route('mascotasMias') }} " style="color:white">Mis Mascotas</a>
                
                
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" style="color:white">
                  {{ __('Salir') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
                

             </div>
          </li>
        
        @endguest
        </ul>
      </nav>
      
    </div>
  </header>
  



@yield('contenido')



  

  <!-- ARCHIVOS DE JS (VENDOR)-->
  <script src="/static/vendor/jquery/jquery.min.js"></script>
  <script src="/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/static/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/static/vendor/php-email-form/validate.js"></script>
  <script src="/static/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/static/vendor/counterup/counterup.min.js"></script>
  <script src="/static/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/static/vendor/venobox/venobox.min.js"></script>
  <script src="/static/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/static/vendor/aos/aos.js"></script>

  <!-- JS PRINCIPAL -->
  <script src="/static/js/main.js"></script>

</body>

 
</html>