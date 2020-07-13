@extends('layouts.efectos')
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="{{ $container}}">
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
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#cta">Match</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Mascotas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Desarrolladores</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ action('AccesoriosController@index') }}">Accesorios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contacto</a></li>
            </ul>
          </div>

         
          <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
            <h4>¿Deseas recibir novedades de Pinder?</h4>
            <p>Podrás enterarte de nuevas mascotas</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Enviar">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="{{ $container}}">
      <div class="copyright">
        &copy; Copyright <strong><span>Pinder</span></strong>. Todos los derechos reservados 2020
      </div>
      <div class="credits">
       
        Designed by <a href="https://aliadoshoy.com/">Athycal</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>