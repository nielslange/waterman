<?php
/**
 * The header template file
 *
 * This is the template file that displays the <head> section and the site's
 * header including the logo and navigation menu.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Halyard
 * @since 1.0
 * @author Niels Lange
 * @license GPL v2 or later
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</div>
			<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
				<nav class="header-menu">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'header-menu',
						'menu_id'        => 'header-menu',
						'container'      => '',
						'items_wrap'     => '<ul>%3$s</ul>',
					));
					?>
				</nav>
				<div class="hamburger-menu"></div>
			<?php endif; ?>
		</div>
	</header>
