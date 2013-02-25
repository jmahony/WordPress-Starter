<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 * Place all of your custom post types and taxonomies here
 *
 */

function rep_create_taxonomies() {
	/* -------------------- ADD TAXONOMY TYPE (team) -------------------- */
	/*$name = 'f';
	register_taxonomy(
		$name,
		array( $name ),
		array(
			'hierarchical' => true,
			'labels'       => Rep\Helpers\post_type_labels($name),
			'show_ui'      => true,
			'query_var'    => true,
			'rewrite'      => array(
				'slug' => $name
			)
		)
	);*/
}

function rep_create_post_type() {

	/* -------------------- ADD CUSTOM POST TYPE (NAME) -------------------- */
	/*$name = 'name';

	register_post_type(
		$name,
		array(
			'labels'             => Rep\Helpers\post_type_labels( $name ),
			'public'             => true,
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

?>
