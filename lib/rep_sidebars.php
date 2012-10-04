<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 * Place all of your custom sidebars here
 * 
 */

if ( !function_exists( 'rep_sidebars_init' ) ) {

	function rep_sidebars_init() {
		register_sidebar(array(
			'name'          => __('NAME', 'rep'),
			'id'            => 'NAME',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	}

	add_action( 'widgets_init', 'rep_sidebars_init' );

}

?>