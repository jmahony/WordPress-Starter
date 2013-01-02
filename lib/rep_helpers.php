<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 * Helper functions
 * 
 */


/**
 * rep_check_dependencies
 *
 * Replaces a custom URL placeholder with the URL to the latest post
 *
 * @param wp_post
 * @return array
 **/ 
function rep_check_dependencies($dependencies = null) {

	if ( !$dependencies ) return false;

	foreach ( $dependencies as $name => $location ) {
		if ( !rep_is_plugin_active($location) ) rep_show_warning( $name );
	}

}

/**
 * rep_show_warning
 *
 * Displayed a warning with the supplied text
 *
 * @param String text
 * @return String
 **/ 
function rep_show_warning($text = null) {

	printf( '<div class="container"><div class="row"><div class="span12"><div class="alert warning">You need to activate the %s plugin</div></div></div></div>', $text );

}

/**
 * rep_is_plugin_active
 *
 * Checks whether a plugin is active or not
 *
 * @param String plugin
 * @return Bool
 **/ 
function rep_is_plugin_active($plugin = null) {

	$active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

	if ( in_array( $plugin,  $active_plugins ) ) {
		return true;
	} else {
		return false;
	}

}

/**
 * rep_get_related_categories
 *
 * Returns an array of siblings and any parents children of the supplied post
 *
 * @param Int post_id
 * @return Array
 **/
function rep_get_related_categories( $post_id = null ) {

	$member_categories = wp_get_post_categories( $post_id );

	$search_categories = $member_categories;

	foreach ( $member_categories as $category_id ) {

		$category = get_category( $category_id );

		if ( $category->parent != 0 && !in_array( $category->parent, $search_categories ) ) {
			
			array_push( $search_categories, $category->parent );

			$child_categories = get_categories( array( 'child_of' => $category->parent ) );

			foreach ( $child_categories as $category ) {

				if ( !in_array( $category->cat_ID, $search_categories ) ) {
					array_push( $search_categories, $category->cat_ID );
				}

			}

		}

	}

	return $search_categories;

}

/**
 * rep_get_thumbnail
 *
 * Returns a posts thumbnail at the specified size, if a thumbnail is not
 * available, a placehold.it placeholder will be returned at the specified
 * size.
 *
 * @param Int post_id
 * @param String size
 * @return String
 **/
function rep_get_thumbnail( $post_id = null, $size = 'full' ) {
	
	if ( !$post_id ) return false;

	$thumbnail = null;

	global $image_sizes;

	if ( has_post_thumbnail( $post_id ) ) { 

		$thumbnail = get_the_post_thumbnail( $post_id, $size, array( 'alt' => get_the_title() ) );

	} else {

		if ( isset( $image_sizes ) ) {
			if ( array_key_exists( $size, $image_sizes ) ) {
				$image_sizes[$size]['width'];
				$image_sizes[$size]['height'];
				$thumbnail = '<img src="http://placehold.it/' . $image_sizes[$size]['width'] . 'x' . $image_sizes[$size]['height'] . '" />';
			}
		}

	}

	if (!$thumbnail) $thumbnail = '<img src="' . get_template_directory_uri() . '/assets/img/692x389.gif" />';

	return $thumbnail;

}

/**
 * rep_set_image_sizes
 *
 * Takes an array of image sizes and generates them
 *
 * @param Array image_sizes
 * @return void
 **/
function rep_set_image_sizes( $image_sizes = null ) {
	
	if ( !$image_sizes ) return false;

	foreach ( $image_sizes as $name => $size ) {
		add_image_size($name, $size['width'], $size['height']);
	}
	
}

?>