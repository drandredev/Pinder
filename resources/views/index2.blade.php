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
          <li class="active"><a href="#/">Inicio</a></li>
          <li><a href="#services">Nosotros</a></li>
          <li><a href="#cta">Match</a></li>
          <li><a href="#portfolio">Mascotas</a></li>
          <li><a href="#team">Desarrolladores</a></li>
          <li><a href="{{ action('AccesoriosController@index') }}">Accesorios</a></li>
          <li><a href="#contact">Contacto</a></li>
          
          @guest

            <li><a href="{{ route('login') }}">Ingresar</a></li>
              @if(Route::has('register'))
              <li><a href="{{ route('register') }}">Registrate</a></li>
              @endif
          @else
            <li>
              <a id="navbarDropdown" class="nav-link dropdown-toggle" style="background-color:#FF69B4;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
              {{ Auth::user()->name }} <span class="caret"></span>
              </a>
            
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
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
  
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      @if(Auth::guest())
      <h1>Bienvenido a Pinder</h1>
      @else
      <h1>Bienvenido a Pinder {{ Auth::user()->name }}</h1>
      @endif
      <h2>El mejor lugar para tu mascota.</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section>

  <main id="main">



    <!-- ======= Nosotros ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Nosotros</h2>
          <p>Nuestro proyecto consta de distintas soluciones de los problemas que llevan a cabo las personas al momento de encontrar un acompañante para su engreido(a) de casa que son las mascotas, y nos basamos con el tema de Tinder, pero la diferencia que en ves que sea un Tinder para personas sean para nuestras mascotas ósea nuestros engreídos de casa..</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Facilidad</a></h4>
              <p class="description">Fácil de utilizar debido a su interfaz intuitiva</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Registro</a></h4>
              <p class="description">Mantenemos un registro de las mascotas y sus Match</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Rapidez</a></h4>
              <p class="description">Realizar el Match demora menos de 1 minuto.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Local</a></h4>
              <p class="description">Se te mostrarán mascotas locales</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- FIN NOSOTROS -->

    <!-- ======= CONTADORES (ATRAER A LA GENTE)======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">432</span>
              <p><strong>Mascotas felices</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p><strong>Mascotas registradas</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">9</span>
              <p><strong>Horas</strong> de <br>Soporte al Cliente</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">6</span>
              <p><strong>Miembros</strong> del Equipo</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- FIN CONTADORES -->

    <!-- ======= INVITACION ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Prueba el Match</h3>
          <p> Comparamos las características físicas como la personalidad de tu mascota para encontrarle la mejor compañía posible.</p>
          <a class="cta-btn" href="#">Hacer match</a>
        </div>

      </div>
    </section><!-- FIN INVITACION -->

    <!-- ======= MASCOTAS REGISTRADAS ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Mascotas Registradas</h2>
          <p>Estas son todas las mascotas disponibles para dar la mejor compañía al engreido de la casa.</p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Destacadas</li>
              <li data-filter=".filter-card">Cerca a ti</li>
              <li data-filter=".filter-web">Vistas ultimamente</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
          @foreach ($registros as $registro)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset($registro->image) }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ action('PinderController@show', $registro->id) }}"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          @endforeach

          <!--<div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/static/img/perritos/perrito2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="/static/img/perritos/perrito2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/static/img/perritos/perrito3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="/static/img/perritos/perrito3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/static/img/perritos/perrito4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="/static/img/perritos/perrito4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/static/img/perritos/perrito5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="/static/img/perritos/perrito5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/static/img/perritos/perrito6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="/static/img/perritos/perrito6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/static/img/perritos/perrito7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="/static/img/perritos/perrito7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/static/img/perritos/perrito8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="/static/img/perritos/perrito8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/static/img/perritos/perrito9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="/static/img/perritos/perrito9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>-->
         
        </div>

      </div>
    </section><!-- FIN MASCOTAS REGISTRADAS -->

    <!-- ======= TESTIMONIOS CANINOS ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Testimonios</h2>
          <p>No hay mejores recomendaciones de las que pueden realizar usuarios como tú despues de probar Pinder.</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item" data-aos="fade-up">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Guau guau guauu guau guauu Guau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="/static/img/testimonios/perrito4.jpg" class="testimonial-img" alt="">
            <h3>Orejas</h3>
            <h4>Perrita de Ayrton</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Guau guau guauu guau guauu Guau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="/static/img/testimonios/perrito8.jpg" class="testimonial-img" alt="">
            <h3>El lenguas</h3>
            <h4>Perrito de Fiorela</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               Guau guau guauu guau guauu Guau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="/static/img/testimonios/perrito7.jpg" class="testimonial-img" alt="">
            <h3>El Mirasol</h3>
            <h4>Perrito de Michael</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               Guau guau guauu guau guauu Guau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="/static/img/testimonios/perrito1.jpg" class="testimonial-img" alt="">
            <h3>El Romantico</h3>
            <h4>Perrito de Adeerly</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               Guau guau guauu guau guauu Guau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="/static/img/testimonios/perrito5.jpg" class="testimonial-img" alt="">
            <h3>El Flores</h3>
            <h4>Perrito de Diego</h4>
          </div>

        </div>

      </div>
    </section><!-- FIN TESTIMONIOS CANINOS -->

    <!-- ======= EQUIPO DE DESARROLLO ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Equipo de Desarrollo</h2>
          <p>Gracias a cada uno de nuestros desarrolladores Pinder pudo convertirse en realidad.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="/static/img/team/Fiorella.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Fiorela Huarancca</h4>
                <span>Chief Operating Officer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/fiorela.pacheco.5"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="150">
              <div class="pic"><img src="/static/img/team/Andre.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Andre Delgado</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/AndreDRuiz"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="/static/img/team/Ayrton.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ayrton Taco</h4>
                <span>Chief Technical Officer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/Ayrton.taco.dev"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="/static/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Diego Pamo</h4>
                <span></span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="/static/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Michael Cahuana</h4>
                <span></span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="/static/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Adeerly Prieto</h4>
                <span></span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- FIN EQUIPO DE DESARROLLO -->

    <!-- ======= CONTACTO======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Contacto</h2>
          <p>Si tienes cualquier sugerencia o deseas formar parte de Pinder...</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Dirección</h3>
              <p>En las nubes de Arequipa</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Correo Electrónico</h3>
              <p>contacto@pinder.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Llámanos</h3>
              <p>+51 978898789</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30619.276893641578!2d-71.55652103778499!3d-16.404010456440233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a487785b9b3%3A0xa3c4a612b9942036!2sArequipa!5e0!3m2!1sen!2spe!4v1593995208352!5m2!1sen!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escribe aquí" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje fue envíado, gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- FIN CONTACTO -->

  </main><!-- FIN PRINCIPAL-->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
              <h3>Pinder</h3>
              <p class="pb-3"><em>El mejor lugar para tu mascota</em></p>
              <p>
                Nubes de Arequipa<br>
                Sin número, 04000<br><br>
                <strong>Celular:</strong> +51 987898987<br>
                <strong>Email:</strong> contacto@pinder.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
            <h4>Accesos directos</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Match</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos y condiciones</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacidad</a></li>
            </ul>
          </div>

         
          <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
            <h4>¿Desase recibir novedades de Pinder?</h4>
            <p>Podrás enterarte de nuevas mascotas</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Enviar">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Pinder</span></strong>. Todos los derechos reservados 2020
      </div>
      <div class="credits">
       
        Designed by <a href="https://aliadoshoy.com/">Athycal</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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