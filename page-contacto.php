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

	<main id="page-contacto" class="page-contacto"> <!-- main -->
        <figure class="banner-flota">
           <img src="<?php echo get_template_directory_uri()?>/img/banner-contacto.jpg" alt="banner contacto">
        </figure>
        <div class="container">
            <div class="row">
                <form class="col-12 col-md-7" id="formulario" action="../enviar" method="post">
                <h3>¿Con quién trabajaremos?</h3>
                    <div class="row">
                        <div class="col-10">
                            <div class="alert-container">
                                <div class="alert alert-warning">
                                    <p> * El nombre de pila hace referencia sólo al primer nombre y al primer apellido. <p/> 
                                    <p> * El teléfono se escribe anteponiendo un 9 y sin espacios.      </p>
                                </div>
                                <div class="alert alert-danger">
                                    Por favor <b>NO</b> deje ninguna casilla en blanco, si las casillas no se llenan correctamente, no podrá enviarse el formulario.
                                </div>
                            </div>
                        </div>
                        <label class="col-10 pb-3">
                            Nombre de pila
                            <input class="form-control" id="Nombre" type="text" placeholder="Juan Pérez" name="nombreDePila">
                        </label>
                        <span id="res-nombre" class="col-2"></span>
                        <label class="col-10 pb-3">
                            Teléfono
                            <div id="phone-label">
                                <p>+56</p>
                                <input class="form-control" id="telefono" type="text" placeholder="999999999" name="telefono">
                            </div>
                        </label>
                        <span id="res-telefono col-2"></span>
                        <label class="col-10 pb-3">
                            Correo electrónico
                            <input class="form-control" id="mail" type="email" placeholder="mail@mailito.com" name="correo">
                        </label>
                        <span id="res-mail" class="col-2"></span>
                        <div class="col-12">
                            <h3>Cuéntanos... ¿Cómo podemos ayudarte?</h3>
                        </div>
                        <label class="col-10 pb-3">
                            Mensaje
                            <textarea class="form-control" placeholder="Ingrese su mensaje" name="mensaje" id="msg" cols="30" rows="10"></textarea>
                        </label>
                        <span id="res-msg" class="col-2"></span>
                        <div class="col-10">
                            <input type="submit" id="send-button" value="Enviar" name="enviar">
                            <span class="submit-ocultar"></span>
                        </div>
                    </div>
                </form>
                <div class="col-12 col-md-5 map">
                    <h3>¿Cómo encontrarnos?</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3201.9429147143173!2d-72.1176837!3d-36.627760699999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669283e194d3a1b%3A0x8d8c06056bd22fa2!2sLas+Canoas+472%2C+Chill%C3%A1n%2C+Biob%C3%ADo%2C+Chile!5e0!3m2!1ses-419!2s!4v1424548300234"
                    >
                    </iframe>
                </div>
            </div>
        </div>
	</main><!-- #main -->
    <script src="<?php echo get_template_directory_uri()?>/js/contacto.js"></script>
<?php
get_footer();