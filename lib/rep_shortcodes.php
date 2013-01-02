<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 * Place all of your shortcodes here
 * 
 */

function shortcode_name($att = null, $content = null) {
	$output  = '';
	return $output;
}
add_shortcode( 'rep_call_to_action', 'shortcode_call_to_action' );

function heading1_shortcode($atts, $content = null) {
	return '<h1>' . $content . '</h1>';
}
add_shortcode( 'heading1', 'heading1_shortcode' );

function heading2_shortcode($atts, $content = null) {
	return '<h2>' . $content . '</h2>';
}
add_shortcode( 'heading2', 'heading2_shortcode' );

function heading3_shortcode($atts, $content = null) {
	return '<h3>' . $content . '</h3>';
}
add_shortcode( 'heading3', 'heading3_shortcode' );

function heading4_shortcode($atts, $content = null) {
	return '<h4>' . $content . '</h4>';
}
add_shortcode( 'heading4', 'heading4_shortcode' );

function heading5_shortcode($atts, $content = null) {
	return '<h5>' . $content . '</h5>';
}
add_shortcode( 'heading5', 'heading5_shortcode' );

function heading6_shortcode($atts, $content = null) {
	return '<h6>' . $content . '</h6>';
}
add_shortcode( 'heading6', 'heading6_shortcode' );
?>