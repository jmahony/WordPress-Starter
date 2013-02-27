<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 */

/* Initialise the framework */
require( 'framework/init.php' );

/* Content width */
if ( !isset( $content_width ) ) $content_width = 926;

/* Custom theme support */
add_theme_support('post-thumbnails');

/* Declare image sizes */
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

Rep\Helpers\set_image_sizes( $image_sizes );

/* Setup the excerpt length */
add_filter( 'excerpt_length', 'set_excerpt_length' );
function set_excerpt_length() {

	return 20; //default value

}
/* Setup the excerpt length */
function rep_dependencies() {

	$dependencies = array();

	if ( rep_check_dependencies( $dependencies ) ) die( __( 'Please activate the plugins above', 'rep' ) );

}

?>
