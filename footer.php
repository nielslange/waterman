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

?><footer>
	<div class="container">
		<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
			<nav class="footer-menu">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
					'container'      => '',
					'items_wrap'     => '<ul>%3$s</ul>',
				));
				?>
			</nav>
		<?php endif; ?>
		<p>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
