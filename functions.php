<?php
/**
 * Theme functions and definitions
 *
 * This file contains the main theme setup, functions, and customizations.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Halyard
 * @since 1.0
 * @author Niels Lange
 * @license GPL v2 or later
 */

if ( ! function_exists( 'halyard_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function halyard_theme_setup() {
		// Add theme support for features like title tag, post thumbnails, etc.
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

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
		register_nav_menus(array(
			'header-menu' => 'Header Menu',
			'footer-menu' => 'Footer Menu',
		));
	}
}
add_action( 'after_setup_theme', 'halyard_theme_setup' );

if ( ! function_exists( 'halyard_enqueue_scripts' ) ) {
	/**
	 * Enqueues styles and scripts for the theme.
	 */
	function halyard_enqueue_scripts() {
		// Enqueue main stylesheet.
		wp_enqueue_style( 'halyard-style', get_stylesheet_uri(), array(), '1.0', 'all' );

		// Enqueue custom script.
		wp_enqueue_script( 'halyard-script', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'halyard_enqueue_scripts' );
