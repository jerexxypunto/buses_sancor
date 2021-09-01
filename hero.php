<section id="hero">
    <div id="carouselExampleControls" class="carousel slide"  data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <picture>
              <source
                media="screen and (max-width:600px)" 
                srcset="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-1-sm.png">  
              <source
                media="screen and (max-width:900px)" 
                srcset="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-1-md.png">  
              <img 
                src="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-1.png" 
                class="d-block w-100" 
                alt="...">
          </picture>
          <div class="contenedor-boton-carrousel">
            <a class="boton-enlace" href="./#hacemos"><span class="triangle triangle-left"></span>Leer más<span class="triangle triangle-rigth"></span></a>
          </div>
        </div>
        <div class="carousel-item">
          <picture>
            <source
                media="screen and (max-width:600px)" 
                srcset="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-2-sm.png">  
              <source
                media="screen and (max-width:900px)" 
                srcset="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-2-md.png">  
              <img 
                src="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-2.png"
                class="d-block w-100"
                alt="...">
          </picture>
          <div class="contenedor-boton-carrousel">
            <a class="boton-enlace" href="./contacto"><span class="triangle triangle-left"></span>Leer más<span class="triangle triangle-rigth"></span></a>
          </div>
        </div>
        <div class="carousel-item">
          <picture>
              <source
                media="screen and (max-width:600px)" 
                srcset="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-3-sm.jpg">  
              <source
                media="screen and (max-width:900px)" 
                srcset="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-3-md.jpg">  
              <img 
                src="<?php echo get_template_directory_uri(); ?>/img/Hero/hero-3.jpg"
                class="d-block w-100"
                alt="...">  
          </picture>         <div class="contenedor-boton-carrousel">
            <a class="boton-enlace" href="./flota"><span class="triangle triangle-left"></span>Leer más<span class="triangle triangle-rigth"></span></a>
          </div>
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
  </section>