<?php
/**
 * MTM6303 Assignment functions and definitions
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage mtm6303_assignment
 * @since MTM6303 Assignment 1.0
 */

/*
 * Sets up theme defaults and registers support for various WordPress features.
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mtm6303assignment_setup() {
	//this theme uses wp_nav_menu() in two locations.
	register_nav_menus(array(
		'top' => __('Top Menu', 'mtm6303assignment'),
		'socia;' => __('Socia Links Menu', 'mtm6303assignment' ),
	));

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'mtm6303assignment-featured-image', 2000, 1200, true );
    
}

add_action( 'after_setup_theme', 'mtm6303assignment_setup' );

?>