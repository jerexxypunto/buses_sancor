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
  <section id="hero">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-2.png"" class=" d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="contenedor-boton-carrousel">
      <a class="boton-enlace" href="./"><span class="triangle triangle-left"></span>Leer más<span class="triangle triangle-rigth"></span></a>
    </div>
  </section>
  <!-- Hero - end -->
  <!-- ¿Qué hacemos? -->
  <section id="hacemos">
    <h1 class="text-center tituloDeSeccion"><span class="black-text">¿</span> Por qué elegir Buses Sancor <span class="black-text">?</span></h1>
    <div class="container">
      <h3>Nos tomamos enserio tu seguridad y comodidad</h3>
      <div class="inicio-box-container">
        <div class="inicio-box">
          <div class="row">
            <div class="col-12 col-md-6">
              <h4>Nuestra flota</h4>
              <p>Contamos con una flota moderna y acorde a las necesidades de nuestros clientes, permitiendo la realización del
                servicio
                solicitado de una manera confortable y eficaz. Para ello realizamos mantenciones periódicas a todos nuestros
                vehículos
                que nos permiten contar con un amplio respaldo de nuestros usuarios.</p>
            </div>
            <div class="col-12 col-md-6">
              <figure class="justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/buses.png" alt="buses">
              </figure>
            </div>
          </div>
        </div>
        <div class="inicio-box">
          <div class="row">
            <div class="col-12 col-md-6">
              <h4>Mantenimiento exhaustivo</h4>
              <p>Nuestra flota se encuentra periódicamente sometida a mantenimiento en sus diversos ámbitos como carrocería, motor,
                luces, neumáticos, etc. para ello nuestra empresa cuenta con un taller exclusivo en el cual se realizan estas
                diversas
                operaciones por un personal capacitado para ello.
              </p>
            </div>
            <div class="col-12 col-md-6">
              <figure class="justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tools.png" alt="Herramientas">
              </figure>
            </div>
          </div>
        </div>
        <div class="inicio-box">
          <div class="row">
            <div class="col-12 col-md-6">
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
            <div class="col-12 col-md-6">
              <figure class="justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/happy.png" alt="happy">
              </figure>
            </div>
          </div>
        </div>
      </div>
      <h3>Nos preocupa que aproveches tus recursos</h3>
      <div class="inicio-box-container">
        <div class="inicio-box">
          <div class="row">
            <div class="col-12 col-md-6">
              <figure class="justify-content-center">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Hablar.png" alt="dos personas hablando">
              </figure>
            </div>
            <div class="col-12 col-md-6">
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
            <div class="col-12 col-md-6">
              <figure class="justify-content-center">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Ahorro.png" alt="Ahorro">
              </figure>
            </div>
            <div class="col-12 col-md-6">
              <h4>¡No gastes demás!</h4>
              <p>Nuestros clientes pueden acceder a algunos descuentos de acorde al presupuesto que deseare plantear.</p>
            </div>
          </div>
        </div>
      </div>



    </div>
    <div class="blue-section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <figure class="d-flex justify-content-between">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Sernatur.png" alt="sernatur">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/reloj.png" alt="reloj">
            </figure>
          </div>
          <div class="col-12 col-md-6">
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
          data-href="http://www.sancor.cl/comments/"
          data-width="100%" data-numposts="2">
        </div>
      </center>
    </div>
  </section>
  <!-- ¿Qué hacemos? - END -->
</main>
<?php
get_footer();
