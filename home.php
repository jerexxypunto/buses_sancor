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
			<p><span>Todos</span><span>10-15</span><span>15-20</span><span>20-30</span></p>
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
							<?php the_post_thumbnail() ?>
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

<?php
get_footer();
