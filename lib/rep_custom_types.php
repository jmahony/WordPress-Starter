<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 * Place all of your custom post types and taxonomies here
 * 
 */

add_action( 'init', 'rep_create_taxonomies' );

function rep_create_taxonomies() {
	/* -------------------- ADD TAXONOMY TYPE (team) -------------------- */
	
	/*register_taxonomy(
		'team',
		array('team'),
		array(
			'hierarchical' => true,
			'labels' => array(
				'name'              => _x( 'Teams', 'taxonomy general name' ),
				'singular_name'     => _x( 'Team', 'taxonomy singular name' ),
				'search_items'      =>  __( 'Search Team' ),
				'all_items'         => __( 'All Teams' ),
				'parent_item'       => null,
				'parent_item_colon' => null,
				'edit_item'         => __( 'Edit Team' ), 
				'update_item'       => __( 'Update Team' ),
				'add_new_item'      => __( 'Add New Team' ),
				'new_item_name'     => __( 'New Team' ),
				'menu_name'         => __( 'Teams' ),
			),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'team'
			)
		)
	);*/
}

add_action( 'init', 'rep_create_post_type' );

function rep_create_post_type() {
	/* -------------------- ADD CUSTOM POST TYPE (NAME) -------------------- */
	/*
	register_post_type(
		'clients',
		array(
			'labels' => array(
				'name'               => _x('NAME', 'post type general name', ''),
				'singular_name'      => _x('NAME', 'post type singular name', ''),
				'add_new'            => _x('Add New', '', ''),
				'add_new_item'       => __('Add New NAME', ''),
				'edit_item'          => __('Edit NAME', ''),
				'new_item'           => __('New NAME', ''),
				'all_items'          => __('All NAME', ''),
				'view_item'          => __('View NAME', ''),
				'search_items'       => __('Search NAME', ''),
				'not_found'          => __('No NAME found', ''),
				'not_found_in_trash' => __('No NAME found in Trash', ''), 
				'parent_item_colon'  => '',
				'menu_name'          => __('NAME', '')
			),
			'public'             => true,
			'has_archive'        => false,
			'publicly_queryable' => true,
			'show_ui'            => true, 
			'show_in_menu'       => true, 
			'query_var'          => true,
			'capability_type'    => 'post',
			'has_archive'        => false, 
			'hierarchical'       => false,
			'menu_position'      => 99,
			'supports'           => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
				'page-attributes',
			)
		)
	);*/
}


/* -------------------- ADD POST META FIELDS -------------------- */
add_action('add_meta_boxes', 'rep_metabox_pages');

function rep_metabox_pages() {

}
?>