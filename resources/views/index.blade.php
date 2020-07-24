


@extends('layouts.plantilla')


@section('titulo','Pinder')

@section('contenido')

<body>
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
      @if(Auth::guest())
      <h1>Bienvenido a Pinder</h1>
      @else
      <h1>Bienvenido a Pinder <br>{{ Auth::user()->name }}</h1>
      @endif
      <h2>El mejor lugar para tu mascota.</h2>
    </div>
  </section>
</body>

<main id="main">
    <!-- ======= Nosotros ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Nosotros</h2>
          <p>Nuestro proyecto consta de dar distintas soluciones a los problemas que llevan a cabo las personas al momento de encontrar un acompañante para su engreido(a) de casa que son las mascotas, y nos basamos con el tema de Tinder, pero la diferencia que en ves que sea un Tinder para personas sean para nuestras mascotas.</p>
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
          <h3>Prueba el la funcion de Busqueda Avanzada</h3>
          <p> Comparamos las características físicas como la personalidad de tu mascota para encontrarle la mejor compañía posible.</p>
          <a class="cta-btn" href="{{  route('BusquedaAv') }}">Busqueda Avanzada</a>
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
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".filter-app"><a>Destacadas</a></li>
              <li data-filter=".filter-web"><a href="{{ route('today') }}">Publicaciones Hoy</a></li>
              <li>
              <form class="form-inline">
  
                <input name="buscarporM" class="form-control mr-sm-2" type="search" placeholder="Buscar mascota" aria-label="Search">
                
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
              </li>

            </ul>
          </div>
        </div>

        
        <div class="row portfolio-container" data-aos="fade-up">
          @foreach ($registros as $registro)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap" >
              <img src="{{ asset($registro->image) }}" class="img-fluid" alt="" style="height:400px; max-widht:100%">
              <div class="portfolio-links">
                <a href="{{ action('PinderController@show', $registro->id) }}"><i class="bx bx-plus"></i></a>
                <a style="color:white;" href="{{ action('PinderController@show', $registro->id) }}">{{ $registro->name }}</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{$registros->render()}}
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
               Guau guau guauu guau guauu Guau guguau guauu guau guauuGuau guau guauu guau guauuGuau 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="/static/img/testimonios/perrito7.jpg" class="testimonial-img" alt="">
            <h3>El Mirasol</h3>
            <h4>Perrito de Michael</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               uau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="/static/img/testimonios/perrito1.jpg" class="testimonial-img" alt="">
            <h3>El Romantico</h3>
            <h4>Perrito de Adeerly</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               Guau guau guauu guau guauu Guau guauauu guau guauuGuau guau guauu guau guauuGuau guau guauu guau guauuGuau 
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
                <span>Chief Communications Officerr</span>
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
              <div class="pic"><img src="/static/img/team/Michael.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Michael Cahuana</h4>
                <span>Chief Operating Officer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100008873386390"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="/static/img/team/Diego.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Diego Pamo</h4>
                <span>Chief Tecnology Officer</span>
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
              <div class="pic"><img src="/static/img/team/Adeerly.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Adeerly Prieto</h4>
                <span>Chief Information Officer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/diego.pamocastro.5"><i class="icofont-facebook"></i></a>
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
              <a class="cta-btn" href="{{  route('contact') }}">contacto@pinder.com</a>
              
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

      </div>
    </section><!-- FIN CONTACTO -->
  </main><!-- FIN PRINCIPAL-->


  @include('layouts.footer', ['container'=>'container-fluid'])


@endsection