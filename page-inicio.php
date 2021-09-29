<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Buses_Sancor
 */

get_header();
?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<main>
  <!-- Hero -->
  <!-- inclyo modulo de hero -->
  <?php include 'hero.php' ?>
  <!-- Hero - end -->
  <!-- ¿Qué hacemos? -->
  <section id="hacemos">
    <div class="container">
      <figure class="row justify-content-around">
        <div>
          <p><strong>Viajes especiales</strong></p>
          <img src="<?php echo get_template_directory_uri()?>/img/cinturon-seg.png" alt="">
        </div>
        <div>
          <p><strong>Arriendo de buses</strong></p>
          <img src="<?php echo get_template_directory_uri()?>/img/chair.png" alt="">
        </div>
        <div>
          <p><strong>Transporte de trabajadores</strong></p>
          <img src="<?php echo get_template_directory_uri()?>/img/confiaabel.png" alt="">
        </div>
      </figure>
    </div>
    <h1 class="text-center tituloDeSeccion"><span class="black-text">¿</span> Por qué elegir Buses Sancor <span class="black-text">?</span></h1>
      <div class="container">
        <h3 class="text-center">Nos tomamos enserio tu seguridad y comodidad</h3>
        <div class="inicio-box-container">
          <div class="inicio-box">
            <div class="row">
              <div class="col-12 col-md-6 inicio-box__info">
                <h4>Nuestra flota</h4>
                <p>Contamos con una flota moderna y acorde a las necesidades de nuestros clientes, permitiendo la realización del
                  servicio
                  solicitado de una manera confortable y eficaz. Para ello realizamos mantenciones periódicas a todos nuestros
                  vehículos
                  que nos permiten contar con un amplio respaldo de nuestros usuarios.</p>
              </div>
              <div class="col-12 col-md-6 p-0">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/buses.png" alt="buses">
                </figure>
              </div>
            </div>
          </div>
          <div class="inicio-box">
            <div class="row">
              <div class="col-12 col-md-6 inicio-box__info">
                <h4>Mantenimiento exhaustivo</h4>
                <p>Nuestra flota se encuentra periódicamente sometida a mantenimiento en sus diversos ámbitos como carrocería, motor,
                  luces, neumáticos, etc. para ello nuestra empresa cuenta con un taller exclusivo en el cual se realizan estas
                  diversas
                  operaciones por un personal capacitado para ello.
                </p>
              </div>
              <div class="col-12 col-md-6 p-0">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/tools.png" alt="Herramientas">
                </figure>
              </div>
            </div>
          </div>
          <div class="inicio-box">
            <div class="row">
              <div class="col-12 col-md-6 inicio-box__info">
                <h4>Servicio de calidad</h4>
                <p>Contamos con un personal capacitado y grato que nos permite ofrecer un servicio cálido en la fecha y hora que
                  lo
                  solicites, como también todas tus consultas o dudas son respondidas en un tiempo acorde a las necesidades de hoy
                  en día,
                  por último destacar que nuestros vehículos cuentan con todos los elementos necesarios para brindar la mayor
                  seguridad en
                  nuestros servicios.
                </p>
              </div>
              <div class="col-12 col-md-6 p-0">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/happy.png" alt="happy">
                </figure>
              </div>
            </div>
          </div>
        </div>
        <h3 class="text-center">Nos preocupa que aproveches tus recursos</h3>
        <div class="inicio-box-container">
          <div class="inicio-box">
            <div class="row">
              <div class="col-12 col-md-6 p-0">
                <figure>
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Hablar.png" alt="dos personas hablando">
                </figure>
              </div>
              <div class="col-12 col-md-6 inicio-box__info">
                <h4>La comunicación es importante.</h4>
                <p>Te ofrecemos diversas maneras de comunicarte con nuestra empresa de manera que todas tus consultas sobre el viaje a
                  realizar puedan ser resueltas a la brevedad como por ejemplo el valor del viaje, disponibilidad, etc. además de
                  poder
                  reservar el vehículo para tu viaje en la fecha que más acomode a tus necesidades.</p>
              </div>
            </div>
          </div>
          <div class="inicio-box">
            <div class="row">
              <div class="col-12 col-md-6 p-0">
                <figure>
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Ahorro.png" alt="Ahorro">
                </figure>
              </div>
              <div class="col-12 col-md-6 inicio-box__info">
                <div>
                  <h4>¡No gastes demás!</h4>
                  <p>Nuestros clientes pueden acceder a algunos descuentos de acorde al presupuesto que deseare plantear.</p>
                </div>
              </div>
              <div class="col-4 mt-5">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Sernatur.png" alt="sernatur">
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="blue-section">
      <div class="container">
        <div class="contenedor-grid grid-col-2">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/reloj.png" alt="reloj">
              <div>
                <h3>Reserva tu hora con nosotros</h3>
                <p>Nuestra empresa permite que solicites presupuestos y reserves el traslado con anticipación, para ellos debes contactarte
                  vía mail (hacer click enlace de más abajo), celular o presencialmente en nuestra sucursal, además para
                  reservar tu viaje necesitaras abonar un 50% del valor este.</p>
              </div>
        </div>
    </div>
  </section>
  <section class="social">
    <picture>
      <source 
          media="(min-width:900px )" 
          srcset="<?php echo get_template_directory_uri()?>/img/facebook-coments.jpg"
      >
      <source 
          media="(min-width:500px )" 
          srcset="<?php echo get_template_directory_uri()?>/img/facebook-coments-md.jpg"
      >
      <img 
        class="img-fluid" 
        src="<?php echo get_template_directory_uri()?>/img/facebook-coments-mobile.jpg"
        alt="banner-social"
      >
    </picture>
    <div class="py-4 container">
      <center>
        <div 
          class="fb-comments" 
          data-href="https://sancor.cl"
          data-width="100%" data-numposts="2">
        </div>
      </center>
    </div>
  </section>
  <!-- ¿Qué hacemos? - END -->
</main>
<?php
get_footer();
