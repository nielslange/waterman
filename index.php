<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Halyard
 * @since 1.0
 * @author Niels Lange
 * @license GPL v2 or later
 */

get_header();
?>

<main>
	<div class="main-inner">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					</header>

					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div>

					<footer class="entry-footer">
						<a href="<?php the_permalink(); ?>">Read More</a>
					</footer>
				</article>
				<?php
			endwhile;
		else :
			?>
			<p>No posts found.</p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
