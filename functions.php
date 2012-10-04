<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 */

if ( !defined('THEME_DIR') ) {
	define( 'THEME_DIR', get_stylesheet_directory() );
}

if ( !defined('CURRENT_THEME_URL') ) {
	if ( is_child_theme() ) {
		define( 'CURRENT_THEME_URL', dirname(get_stylesheet_uri()) );
	} else {
		define( 'CURRENT_THEME_URL', get_bloginfo('template_directory') );
	}
}

require_once( THEME_DIR . '/lib/rep_enqueue.php' );
require_once( THEME_DIR . '/lib/rep_custom_types.php' );
require_once( THEME_DIR . '/lib/NHP-Theme-Options-Framework/nhp-options.php' );
require_once( THEME_DIR . '/lib/rep_menus.php' );
require_once( THEME_DIR . '/lib/rep_shortcodes.php' );
require_once( THEME_DIR . '/lib/rep_sidebars.php' );
require_once( THEME_DIR . '/lib/widgets/rep_widgets.php' );

/* -------------------- ADD CUSTOM THEME SUPPORT -------------------- */
//add_theme_support('post-formats');
//add_theme_support('post-thumbnails');
//add_theme_support('custom-background');
//add_theme_support('custom-header');
//add_theme_support('automatic-feed-links');
//add_theme_support('menus');
//add_theme_support('custom-fields');
?>