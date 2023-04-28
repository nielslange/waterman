<?php
/**
 * Template part for displaying single post content
 *
 * @package Halyard
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php
			/**
			 * You can customize the meta information (author, date, categories, etc.) displayed here
			 * For example, displaying the post date and author:
			 */
			?>
			<span class="posted-on"><?php echo get_the_date(); ?></span>
			<span class="byline"><?php echo get_the_author(); ?></span>
		</div><!-- .entry-meta -->
	</header>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'halyard' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		/**
		 * You can add post tags, categories or other meta information here
		 * For example, displaying post categories and tags:
		 */
		?>
		<div class="entry-categories">
			<?php the_category( ', ' ); ?>
		</div>
		<div class="entry-tags">
			<?php the_tags( '', ', ', '' ); ?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
