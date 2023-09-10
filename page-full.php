<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Full Width
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Waterman
 */

get_header();
?>

<main>
	<div class="main-inner">
		<div class="main-content">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
