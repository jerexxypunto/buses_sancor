<?php
$nombre = $_POST['nombreDePila'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$msj = $_POST['mensaje'];
$body = "<p><b>El cliente:<b/> ".$nombre."<br/><b>con telefono: <b/>".$telefono."<br/> <b>con el e-mail: <b/>".$correo."<br/><b>Dice: </b>".$msj."</p>";
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

<main class="container">
        <?php 
             mail('jerexxypunto@gmail.com','Corre enviardo desde busessacor.cl', $body);
             headers('location:page-contacto');
        
        ?>
</main>



<?php
get_footer();