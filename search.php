<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Waterman
 */

get_header();
?>

<main id="search">
	<div class="main-inner">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf(
						pll__( 'Search results for: %s' ),
						'<span><strong>' . get_search_query() . '</strong></span>'
					);
					?>
					<?php get_search_form(); ?>
				</h1>
			</header>

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;

			the_posts_navigation();

		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>
</main>

<?php get_footer(); ?>
