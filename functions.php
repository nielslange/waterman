<?php
/**
 * Theme functions and definitions
 *
 * This file contains the main theme setup, functions, and customizations.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Waterman
 * @since 1.0
 * @author Niels Lange
 * @license GPL v2 or later
 */

/**
 * Include helper files.
 */
require get_template_directory() . '/inc/disallow-comments.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function waterman_theme_setup() {
	// Add generic support
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// Add WooCommerce support
	// add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	// Add theme support for custom logo.
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );

	// Register menus.
	register_nav_menus( array(
		'header-menu' => 'Header Menu',
		'mobile-menu' => 'Mobile Menu',
		'footer-menu' => 'Footer Menu',
	));

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'after_setup_theme', 'waterman_theme_setup' );

/**
 * Stripe UPE
 *
 * @link https://woocommerce.com/document/stripe/customization/style-payment-form/
 */
add_filter( 'wc_stripe_upe_params', function ( $stripe_params ) {
	$stripe_params['blocksAppearance'] = (object) [ 'theme' => 'flat' ];
	$stripe_params['appearance'] = (object) [ 'theme' => 'flat'	];

	return $stripe_params;
} );

/**
 * Remove "Description" Heading Title @ WooCommerce Single Product Tabs
 */
add_filter( 'woocommerce_product_description_heading', '__return_null' );


/**
 * Enqueues styles and scripts for the theme.
 */
function waterman_enqueue_scripts() {
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' );

	wp_enqueue_style( 'waterman-style', get_stylesheet_uri(), array(), $version, 'all' );
	wp_enqueue_script( 'waterman-script', get_template_directory_uri() . '/assets/js/menu.js', null, $version, true );
}
add_action( 'wp_enqueue_scripts', 'waterman_enqueue_scripts' );

/**
 * Register Polylang translation strings.
 */
function waterman_pll_register_string() {
	// Bail out if Polylang is not active.
	if ( ! class_exists( 'Polylang' ) ) {
		return;
	}

	pll_register_string( 'waterman-theme', 'All rights reserved' );
	pll_register_string( 'waterman-theme', 'by' );
	pll_register_string( 'waterman-theme', 'Developed with' );
	pll_register_string( 'waterman-theme', 'Page:' );
	pll_register_string( 'waterman-theme', 'Search results for: %s' );
}
add_action( 'init', 'waterman_pll_register_string' );

/**
 * WooCommerce specific functions and hooks
 */
function waterman_woocommerce_setup() {
	// Remove default WooCommerce wrappers
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

	// Add custom wrappers
	add_action( 'woocommerce_before_main_content', 'waterman_woocommerce_wrapper_start', 10 );
	add_action( 'woocommerce_after_main_content', 'waterman_woocommerce_wrapper_end', 10 );

	// Add custom WooCommerce styles
	// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}
add_action( 'after_setup_theme', 'waterman_woocommerce_setup' );

/**
 * Start WooCommerce wrapper
 */
function waterman_woocommerce_wrapper_start() {
	echo '<main>';
	echo '<div class="main-inner">';
}

/**
 * End WooCommerce wrapper
 */
function waterman_woocommerce_wrapper_end() {
	echo '</div>';
	echo '</main>';
}

/**
 * Add WooCommerce specific styles
 */
function waterman_woocommerce_scripts() {
	wp_enqueue_style( 'waterman-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
}
add_action( 'wp_enqueue_scripts', 'waterman_woocommerce_scripts' );

/**
 * Add WooCommerce body class
 */
function waterman_woocommerce_body_class( $classes ) {
	if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) {
		$classes[] = 'woocommerce-page';
	}
	return $classes;
}
add_filter( 'body_class', 'waterman_woocommerce_body_class' );
