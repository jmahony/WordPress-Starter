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
		define( 'CURRENT_THEME_URL', get_template_directory_uri() );
	}
}

/* -------------------- CONTENT WIDTH -------------------- */
if ( !isset( $content_width ) ) $content_width = 926;

/* -------------------- ADD IN CUSTOM META BOX SUPPORT -------------------- */
require_once( THEME_DIR . '/lib/wpalchemy/MetaBox.php' );
require_once( THEME_DIR . '/lib/rep_meta_boxes.php' );

require_once( THEME_DIR . '/lib/rep_custom_types.php' );

/* -------------------- EQNEUE STYLES AND SCRIPTS -------------------- */
require_once( THEME_DIR . '/lib/rep_enqueue.php' );

/* -------------------- DEFINE MENUS -------------------- */
require_once( THEME_DIR . '/lib/rep_menus.php' );

/* -------------------- DEFINE SHORTCODES -------------------- */
require_once( THEME_DIR . '/lib/rep_shortcodes.php' );

/* -------------------- DEFINE SIDEBARS -------------------- */
require_once( THEME_DIR . '/lib/rep_sidebars.php' );

/* -------------------- DEFINE SIDEBARS -------------------- */
require_once( THEME_DIR . '/lib/rep_helpers.php' );

/* -------------------- CUSTOM WIDGETS -------------------- */
require_once( THEME_DIR . '/lib/widgets/rep_widgets.php' );

/* -------------------- CUSTOM CATEGORIES -------------------- */
require_once( THEME_DIR . '/lib/rep_categories.php' );

/* -------------------- NHP OPTIONS FRAMEWORK -------------------- */
require_once( THEME_DIR . '/lib/NHP-Theme-Options-Framework/nhp-options.php' );
require_once( THEME_DIR . '/lib/CSS-Generator-for-NHP-Framework/css_generator.php' );
require_once( THEME_DIR . '/lib/rep_custom_styles.php' );

require_once( THEME_DIR . '/lib/ChromePhp.php' ); /** TODO: DEV ONLY DELETE WHEN PRODUCTION **/

/* -------------------- ADD CUSTOM THEME SUPPORT -------------------- */
add_theme_support('post-thumbnails');

$image_sizes = array(
	'rep-small-thumb' => array(
		'width'  => 139,
		'height' => 78
	),
	'rep-slider' => array(
		'width'  => 692,
		'height' => 389
	)
);
rep_set_image_sizes($image_sizes);

add_filter('excerpt_length', 'set_excerpt_length');
function set_excerpt_length() {

	return 20; //default value

}

function rep_dependencies() {

	$dependencies = array(
	);

	if ( rep_check_dependencies( $dependencies ) ) die( __( 'Please activate the plugins above', 'rep' ) );

}


?>