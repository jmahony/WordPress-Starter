<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 * Enqueue all of your scripts and styles here
 * 
 */

add_action( 'wp_enqueue_scripts', 'rep_enqueue_scripts' );

function rep_enqueue_scripts() {

	// Get rid of WordPress default jQuery and include our version
	wp_deregister_script( 'jquery' );

	// Include Modernizr
	wp_register_script( 'modernizr', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js', null, null, true );

	// Include jQuery
	wp_register_script( 'jquery', CURRENT_THEME_URL . '/assets/js/jquery-1.8.2.min.js', false, '1.8.2', true );

	// Include hoverIntent
	wp_register_script( 'hoverintent', CURRENT_THEME_URL . '/assets/js/jquery.hoverIntent.minified.js', array('jquery'), null, true );

	// Include Superfish for dropdown menus
	wp_register_script( 'superfish', CURRENT_THEME_URL . '/assets/js/superfish.js', array('jquery'), false, true );

	// Include responsive drop down menu
	wp_register_script( 'selectnav', CURRENT_THEME_URL . '/assets/js/selectnav.min.js', false, false, true);

	// Include general application javascript
	wp_register_script( 'application', CURRENT_THEME_URL . '/assets/js/app.js', array('jquery'), false, true );

	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'hoverintent' );
	wp_enqueue_script( 'superfish' );
	wp_enqueue_script( 'selectnav' );

	wp_enqueue_script( 'application' );

}

add_action( 'wp_enqueue_scripts', 'rep_enqueue_styles' );

function rep_enqueue_styles() {
}

if (is_admin()) add_action('admin_enqueue_scripts', 'rep_enqueue_styles_admin');

function rep_enqueue_styles_admin() {
	wp_enqueue_style( 'wpalchemy-metabox', CURRENT_THEME_URL . '/lib/metaboxes/meta.css' );
}

?>