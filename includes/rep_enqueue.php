<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 * Enqueue all of your scripts and styles here
 *
 */

function rep_enqueue_scripts() {

	// Get rid of WordPress default jQuery and include our version

	// Register Modernizr
	wp_register_script(
		'modernizr',
		'//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js',
		null,
		'2.6.2',
		true
	);

	// Register jQuery
	wp_register_script(
		'jquery',
		'//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
		null,
		'1.9.1',
		false
	);

	// Register general application javascript
	wp_register_script(
		'application',
		CURRENT_THEME_URL . '/assets/js/app.js',
		array(
			'jquery'
		),
		null,
		true
	);

	wp_enqueue_script( 'modernizr' );

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'application' );

}

function rep_enqueue_styles_admin() {}

if ( is_admin() ) add_action( 'wp_enqueue_scripts', 'rep_enqueue_styles_admin' );

?>
