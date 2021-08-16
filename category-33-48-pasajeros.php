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

<main id="category-10-15-main" class="category-main category-10-15-main">
	<section class="hero">
		<figure>
			<img src="<?php echo get_template_directory_uri()?>/img/category-3-banner.png" alt="categoria 10-15">
		</figure>
	</section>
	<div class="container">
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

<?php
get_footer();
