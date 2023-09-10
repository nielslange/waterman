<?php
/**
 * Template part for displaying pages
 *
 * @package Waterman
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . pll__( 'Page:' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

</article>
