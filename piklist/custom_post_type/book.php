<?php

// Register Custom Post Type
function book_post_type() {

	$labels = array(
		'name'                => _x( 'Books', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'Book', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'Books', 'sage' ),
		'parent_item_colon'   => __( 'Parent book:', 'sage' ),
		'all_items'           => __( 'All books', 'sage' ),
		'view_item'           => __( 'View book', 'sage' ),
		'add_new_item'        => __( 'Add New Book', 'sage' ),
		'add_new'             => __( 'Add New', 'sage' ),
		'edit_item'           => __( 'Edit book', 'sage' ),
		'update_item'         => __( 'Update book', 'sage' ),
		'search_items'        => __( 'Search book', 'sage' ),
		'not_found'           => __( 'Not found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	$rewrite = array(
		'slug'                => 'book',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'book', 'sage' ),
		'description'         => __( 'List of favorites books', 'sage' ),
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
		'menu_icon'           => 'dashicons-book',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'book', $args );

}

// Hook into the 'init' action
add_action( 'init', 'book_post_type', 0 );
