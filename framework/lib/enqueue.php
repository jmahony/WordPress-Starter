<?php namespace Rep\Enqueue;
/**
 * @package WordPress
 * @subpackage Template
 * 
 * Helper functions
 * 
 */

function enqueue_scripts() {

	// Get rid of WordPress default jQuery and include our version
	wp_deregister_script( 'jquery' );

	// Include jQuery
	wp_register_script(
		'jquery',
		CURRENT_THEME_URL . '/framework/js/jquery-1.8.3.min.js',
		false,
		'1.8.2',
		true
	);

	wp_register_script(
		'html5shiv',
		CURRENT_THEME_URL . '/framework/js/html5shiv.js',
		false,
		'3.6.2',
		true
	);

	wp_enqueue_script( 'html5shiv' );

	wp_enqueue_script( 'jquery' );

}

function enqueue_styles() {}

function enqueue_styles_admin() {

	wp_enqueue_style(
		'wpalchemy-metabox',
		CURRENT_THEME_URL . '/includes/metaboxes/meta.css'
	);

}

?>