<?php
// Register Custom Post Type
function jobs_post_type() {

	$labels = array(
		'name'                => _x( 'Jobs', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'Job', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'Jobs', 'sage' ),
		'parent_item_colon'   => __( 'Parent Job:', 'sage' ),
		'all_items'           => __( 'All Jobs', 'sage' ),
		'view_item'           => __( 'View Job', 'sage' ),
		'add_new_item'        => __( 'Add New Job', 'sage' ),
		'add_new'             => __( 'Add New', 'sage' ),
		'edit_item'           => __( 'Edit Job', 'sage' ),
		'update_item'         => __( 'Update Job', 'sage' ),
		'search_items'        => __( 'Search Item', 'sage' ),
		'not_found'           => __( 'Not found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	$rewrite = array(
		'slug'                => 'job',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'jobs', 'sage' ),
		'description'         => __( 'List of jobs made by the person', 'sage' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'menu_icon'           => 'dashicons-id-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'jobs', $args );

}

// Hook into the 'init' action
add_action( 'init', 'jobs_post_type', 0 );
