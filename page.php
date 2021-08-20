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

	<main id="page-main" class="page-main">
		<figure class="hero_page">
			<?php the_post_thumbnail(); ?>
		</figure>
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
