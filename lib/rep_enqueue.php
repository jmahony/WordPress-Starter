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
	wp_deregister_script( 'jquery' );

	wp_register_script( 'modernizr','http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js' );
	wp_register_script( 'jquery', CURRENT_THEME_URL . '/assets/js/jquery-1.8.2.min.js' );
	wp_register_script( 'isotope', CURRENT_THEME_URL . '/assets/js/jquery.isotope.min.js', array('jquery') );
	wp_register_script( 'hoverintent', CURRENT_THEME_URL . '/assets/js/jquery.hoverIntent.minified.js', array('jquery') );
	wp_register_script( 'application', CURRENT_THEME_URL . '/assets/js/app.js', array('jquery', 'isotope') );

	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'isotope' );
	wp_enqueue_script( 'hoverintent' );
	wp_enqueue_script( 'application' );
}

add_action( 'wp_enqueue_scripts', 'rep_enqueue_styles' );

function rep_enqueue_styles() {		
	//wp_register_style( '', CURRENT_THEME_URL . '/assets/' );
	//wp_enqueue_style( '' );

}
?>