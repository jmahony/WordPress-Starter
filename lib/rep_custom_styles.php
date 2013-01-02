<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 * Place all custom styles here, for use with CSS-Generator NHP
 * 
 */

add_action('wp_head', 'add_styles');

function add_styles() {
		$styleIndex = array(
		'navigation-bar-background-color' => array(
			'selector'     => '.sf-menu,',
			'property'     => 'background-color'
		)
	);
	generate_styles($styleIndex);
}

?>