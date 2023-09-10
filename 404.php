<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Waterman
 */

get_header();
?>

<main>
	<div class="main-inner">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can\'t be found.', 'waterman' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'waterman' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</div><!-- .container -->
</main>

<?php get_footer(); ?>
