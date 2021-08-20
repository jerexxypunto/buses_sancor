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
		<h1><?php the_title(); ?></h1>
		<p><?php echo the_category() ?></p>
		<section class="content">
			<?php the_content() ?>
		</section>
	</main>

<?php
get_footer();
