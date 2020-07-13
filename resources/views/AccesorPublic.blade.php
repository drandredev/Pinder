<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pinder</title>
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
          <li class="active"><a href="index.html">Inicio</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#services">Match</a></li>
          <li><a href="#portfolio">Mascotas</a></li>
          <li><a href="#team">Desarrolladores</a></li>
          <li><a href="#contact">Contacto</a></li>
          <li><a href="#contact">Login</a></li>


        </ul>
      </nav>

    </div>
  </header>

  <section id="hero">

  <div class="row featurette" style="margin:60px">
    <div class="col-md-5">
      <img src="{{ asset($accesoPu->imagen) }}" class="card-img-top" alt="...">
      <p><a class="btn btn-secondary" href="{{ action('AccesoriosController@index') }}" role="button">&vartriangleleft; Volver a Inicio </a></p>
      </div>

    <div class="col-md-6" style="background-color:#FF69B4;">
      <h2 class="featurette-heading"><span class="text-muted">{{ $accesoPu->nombre }}</span></h2>
      
      <h2 class="lead">Marca:</h2>
      <p class="lead"> {{ $accesoPu->marca }}</p>

      <h2 class="lead">Precio:</h2>
      <p class="lead"> {{ $accesoPu->precio }}</p>

      <h2 class="lead">Precio:</h2>
      <p class="lead"> {{ $accesoPu->tipo }}</p>
      
      <h2 class="lead">Talla:</h2>
      <p class="lead"> {{ $accesoPu->talla }}</p>

      <h2 class="lead">Color:</h2>
      <p class="lead"> {{ $accesoPu->color }}</p>
    </div>
 
  </div>
  </section>

  <main id="main">





    <!-- ======= INVITACION ======= 
    <section id="cta" class="cta">
      <div class="container" data-aos="fade-up">

        <div class="text-center">
          <h3>Prueba el Match</h3>
          <p> Comparamos las características físicas como la personalidad de tu mascota para encontrarle la mejor compañía posible.</p>
          <a class="cta-btn" href="#">Hacer match</a>
        </div>

      </div>-->
    </section><!-- FIN INVITACION -->




 

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

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