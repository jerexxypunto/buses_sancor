<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Buses_Sancor
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootsrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/tablet.css" media="screen and (min-width:900px)">
	<link rel="stylesheet" href="css/descktop.css" media="screen and (min-width:992px)">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Roboto+Slab:wght@300;400;500;600&display=swap" rel="stylesheet">
	<title>Buses Sancor</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'buses_sancor'); ?></a>

		<div class="pre-header"></div>
		<!-- Header -->
		<header class="header">
			<div class="container">
				<div class="row navigator">
					<div class="col-9 col-md-4 navigator_logo"><img class="img-fluid" src="img/sancor-logo.png" alt="logo"></div>
					<div class="col-3 col-md-8 navigator_menu--button">
						<nav> <span class="fas fa-bars"></span></nav>
					</div>
					<div class="col-12 col-md-6 navigator_menu" id="lista-menu">
						<ul>
							<li> <a href="#">Inicio</a></li>
							<li> <a href="#">Flota</a></li>
							<li> <a href="#">Nosotros</a></li>
							<li> <a href="#">Preguntas Frecuentes</a></li>
							<li> <a href="#">Contacto</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- Header - END -->
