<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 * Place all of your custom post types and taxonomies here
 * 
 */

//add_action( 'after_switch_theme', 'add_categories' );

function add_categories() {
	
	if ( !term_exists( 'Match Highlights', 'category' ) ) {
		$match_highlights_id = wp_insert_term( 'Match Highlights', 'category' );
		if (!$match_highlights_id instanceof WP_Error) {
			wp_insert_term( 'Archive', 'category', array('parent' => $match_highlights_id) );
			wp_insert_term( 'Carling Cup', 'category', array('parent' => $match_highlights_id) );
			wp_insert_term( 'Europe', 'category', array('parent' => $match_highlights_id) );
			wp_insert_term( 'FA Cup', 'category', array('parent' => $match_highlights_id) );
			wp_insert_term( 'Pre Season', 'category', array('parent' => $match_highlights_id) );
			wp_insert_term( 'Premier League', 'category', array('parent' => $match_highlights_id) );
		}
	}

}

?>