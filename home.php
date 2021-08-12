<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Buses_Sancor
 */

get_header();
?>

<main id="primary" class="flota-page site-main">
	<h1 class="text-center">Flota</h1>
	<div class="container">
		<div class="contenedor-filtro">
			<p><span>Todos
				<br>
				Asientos
			</span><span>1-11
				<br>
				Asientos
			</span><span>12-32
				<br>
				Asientos
			</span><span>33-48
				<br>
				Asientos
			</span></p>
			<input type="range" value="0" name="filtro" id="filtro" min="0" max="15" step="5">
			<button class="btn btn-sancor">filtrar</button>
		</div>
		<div class="contenedor-grid grid-col-1 grid-col-sm-2 grid-col-lg-3 gap-30">
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
			?>
					<article>
						<figure>
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail() ?>
							</a>
						</figure>
						<h3><?php the_title(); ?></h3>
						<p>
							<?php echo the_category('&bull;') ?>
						</p>
					</article>
			<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</main><!-- #main -->
<aside class="aside-flota">
	<div class="container my-3">
		<div class="title-container">
			<h3>Buscar por numero de pasajeros</h3>
		</div>
		<div class="contenedor-grid grid-col-1 grid-col-sm-2 grid-col-md-3 gap-30 p-3">
			<article>
				<a href="<?php echo bloginfo('url')?>/category/1-11-pasajeros/">
					<figure><img src="<?php echo get_template_directory_uri() ?>/img/category-1.png" alt="Categoria 1-11"></figure>
				</a>
			</article>
			<article>
				<a href="<?php echo bloginfo('url')?>/category/12-32-pasajeros/">
					<figure><img src="<?php echo get_template_directory_uri() ?>/img/category-2.png" alt="Categoria 12-32"></figure>
				</a>
			</article>
			<article>
				<a href="<?php echo bloginfo('url')?>/category/33-48-pasajeros/">
					<figure><img src="<?php echo get_template_directory_uri() ?>/img/category-3.png" alt="Categoria 33-48"></figure>
				</a>
			</article>
		</div>
	</div>
</aside>

<?php
get_footer();
