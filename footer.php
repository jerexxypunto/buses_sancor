<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Buses_Sancor
 */

?>

<!-- Footer -->
<footer class="footer">
	<h3>¡Contactanos! </h3>
	<div class="footer__social">
		<div class="footer__social__item"><i class="fab fa-facebook-f"></i>
			<p><a href="http://www.facebook.com/transporteyturismosancor">facebook.com/transporteyturismosancor</a></p>
		</div>
		<div class="footer__social__item"><i class="fab fa-whatsapp"></i>
			<p><b>Victor Díaz:</b> <a href="tel:+56963167092">+56 963 167 092</a></p>
		</div>
		<div class="footer__social__item"><i class="fab fa-whatsapp"></i>
			<p><b>Roberto Sandoval:</b><a href="tel:+56997223812">+56 997 223 812</a></p>
		</div>
		<div class="footer__social__item"><i class="far fa-envelope"></i>
			<p><b>E-mail: </b><a href="mailto:contacto@sancor.cl">contacto@sancor.cl</a></p>
		</div>
	</div>
	<div class="footer__horarios">
		<h4>Horarios de atención telefonica <i class="fas fa-clock"></i></h4>
		<div class="tabla-horario">
			<div class="row">
				<div class="col-6"><b>Lunes a Viernes</b></div>
				<div class="col-6"><b>Sabados y Domingos</b></div>
				<div class="col-6"><p>08:00 - 19:00</p></div>
				<div class="col-6"><p>09:00 - 20:00</p></div>
			</div>
		</div>
	</div>
	<p>Buses Sancor &copy; Todos los derechos reservados</p>
	<p>Desarrollado por <a href="www.gscdesigns.net">GSC Diseños</a></p>
</footer>
<!-- Footer - End -->
<script src="<?php echo get_template_directory_uri()?>/fontawesome/js/all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>

</html>