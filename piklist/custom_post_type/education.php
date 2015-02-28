<?php

// Register Custom Post Type
function education_post_type() {

	$labels = array(
		'name'                => _x( 'Education', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'Education', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'Education', 'sage' ),
		'parent_item_colon'   => __( 'Parent Education:', 'sage' ),
		'all_items'           => __( 'All Education', 'sage' ),
		'view_item'           => __( 'View Education', 'sage' ),
		'add_new_item'        => __( 'Add New Education', 'sage' ),
		'add_new'             => __( 'Add Education', 'sage' ),
		'edit_item'           => __( 'Edit Education', 'sage' ),
		'update_item'         => __( 'Update Education', 'sage' ),
		'search_items'        => __( 'Search Item', 'sage' ),
		'not_found'           => __( 'Not found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	$rewrite = array(
		'slug'                => 'education',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Education', 'sage' ),
		'description'         => __( 'List of school, courses and diplomas made by a person', 'sage' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'education', $args );

}

// Hook into the 'init' action
add_action( 'init', 'education_post_type', 0 );
