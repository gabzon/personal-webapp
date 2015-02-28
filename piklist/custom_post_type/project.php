<?php

// Register Custom Post Type
function project_post_type() {

	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'Projects', 'sage' ),
		'parent_item_colon'   => __( 'Parent Project:', 'sage' ),
		'all_items'           => __( 'All Projects', 'sage' ),
		'view_item'           => __( 'View Project', 'sage' ),
		'add_new_item'        => __( 'Add New Project', 'sage' ),
		'add_new'             => __( 'Add New', 'sage' ),
		'edit_item'           => __( 'Edit Project', 'sage' ),
		'update_item'         => __( 'Update Project', 'sage' ),
		'search_items'        => __( 'Search Project', 'sage' ),
		'not_found'           => __( 'Not found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	$rewrite = array(
		'slug'                => 'project',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'project', 'sage' ),
		'description'         => __( 'List of project made by the person', 'sage' ),
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
		'menu_icon'           => 'dashicons-feedback',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'project', $args );

}

// Hook into the 'init' action
add_action( 'init', 'project_post_type', 0 );
