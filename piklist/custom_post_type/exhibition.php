<?php

// Register Custom Post Type
function exhibition_post_type() {

	$labels = array(
		'name'                => _x( 'Exhibitions', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'Exhibition', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'Exhibitions', 'sage' ),
		'parent_item_colon'   => __( 'Parent exhibition:', 'sage' ),
		'all_items'           => __( 'All exhibitions', 'sage' ),
		'view_item'           => __( 'View exhibition', 'sage' ),
		'add_new_item'        => __( 'Add New exhibition', 'sage' ),
		'add_new'             => __( 'Add New', 'sage' ),
		'edit_item'           => __( 'Edit exhibition', 'sage' ),
		'update_item'         => __( 'Update exhibition', 'sage' ),
		'search_items'        => __( 'Search exhibition', 'sage' ),
		'not_found'           => __( 'Not found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	$rewrite = array(
		'slug'                => 'exhibition',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'exhibition', 'sage' ),
		'description'         => __( 'List of all exhibition made by the person', 'sage' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'menu_icon'           => 'dashicons-images-alt2',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'exhibition', $args );

}

// Hook into the 'init' action
add_action( 'init', 'exhibition_post_type', 0 );
