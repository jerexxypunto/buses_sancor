<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Buses_Sancor
 */

get_header();
?>

	<main class="single-page" id="single-page">
		<section class="hero_single">
			<figure>
				<?php the_post_thumbnail(); ?>
			</figure>
		</section>
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<h3><?php echo the_category() ?></h3>
			<section class="content">
				<?php the_content() ?>
			</section>
		</div>
	</main>

<?php
get_footer();
