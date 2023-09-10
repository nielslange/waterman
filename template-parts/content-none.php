<?php
/**
 * Template part for displaying a message when no content is found
 *
 * @package Waterman
 */

?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'waterman' ); ?></h1>
	</header>

	<div class="page-content">
		<?php if ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'waterman' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'waterman' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
</section>
