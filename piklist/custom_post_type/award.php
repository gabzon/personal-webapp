<?php

// Register Custom Post Type
function award_post_type() {

	$labels = array(
		'name'                => _x( 'Awards', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'Award', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'Awards', 'sage' ),
		'parent_item_colon'   => __( 'Parent Award:', 'sage' ),
		'all_items'           => __( 'All Awards', 'sage' ),
		'view_item'           => __( 'View Award', 'sage' ),
		'add_new_item'        => __( 'Add New Award', 'sage' ),
		'add_new'             => __( 'Add Award', 'sage' ),
		'edit_item'           => __( 'Edit Award', 'sage' ),
		'update_item'         => __( 'Update Award', 'sage' ),
		'search_items'        => __( 'Search Award', 'sage' ),
		'not_found'           => __( 'Not found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	$rewrite = array(
		'slug'                => 'award',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'award', 'sage' ),
		'description'         => __( 'List of all awards received', 'sage' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'menu_icon'           => 'dashicons-awards',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'award', $args );

}

// Hook into the 'init' action
add_action( 'init', 'award_post_type', 0 );
