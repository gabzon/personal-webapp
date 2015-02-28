<?php
// Register Custom Post Type
function presentation_post_type() {

	$labels = array(
		'name'                => _x( 'Presentations', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'Presentation', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'Presentations', 'sage' ),
		'parent_item_colon'   => __( 'Parent Presentation:', 'sage' ),
		'all_items'           => __( 'All Presentations', 'sage' ),
		'view_item'           => __( 'View Presentation', 'sage' ),
		'add_new_item'        => __( 'Add New Presentation', 'sage' ),
		'add_new'             => __( 'Add New', 'sage' ),
		'edit_item'           => __( 'Edit Presentation', 'sage' ),
		'update_item'         => __( 'Update Presentation', 'sage' ),
		'search_items'        => __( 'Search Presentation', 'sage' ),
		'not_found'           => __( 'Not found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	$rewrite = array(
		'slug'                => 'presentation',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'presentation', 'sage' ),
		'description'         => __( 'Presentations, expositions & exhibitions made by the person', 'sage' ),
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
		'menu_icon'           => 'dashicons-microphone',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'presentation', $args );

}

// Hook into the 'init' action
add_action( 'init', 'presentation_post_type', 0 );
