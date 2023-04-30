<?php
/**
 * The footer template file
 *
 * This is the template file that displays the site's footer including
 * the footer navigation menu and copyright information.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Halyard
 * @since 1.0
 * @author Niels Lange
 * @license GPL v2 or later
 */

?>
<footer id="site-footer">
	<div class="footer-inner">
		<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
			<nav class="footer-menu">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
					'container'      => '',
					'items_wrap'     => '<ul class="footer-menu">%3$s</ul>',
				));
				?>
			</nav>
		<?php endif; ?>
		<p class="footer-copyright">
			&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.
			<?php pll_e( 'All rights reserved.' ); ?>

		</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
