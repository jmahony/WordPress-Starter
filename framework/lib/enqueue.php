<?php namespace Rep\Enqueue;
/**
 * @package WordPress
 * @subpackage Template
 *
 * Helper functions
 *
 */

function enqueue_scripts() {}

function enqueue_styles() {}

function enqueue_styles_admin() {

	wp_enqueue_style(
		'wpalchemy-metabox',
		CURRENT_THEME_URL . '/includes/metaboxes/meta.css'
	);

}

?>