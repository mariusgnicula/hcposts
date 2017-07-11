<?php

// create HC Posts CPT with all the trimmings

function hcp_posts() {

	$labels = [
		'name'                  => _x( 'HC Posts', 'HC Post Type General Name', 'hcp_posts' ),
		'singular_name'         => _x( 'HC Post', 'HC Post Type Singular Name', 'hcp_posts' ),
		'menu_name'             => __( 'HC Posts', 'hcp_posts' ),
		'name_admin_bar'        => __( 'HC Post', 'hcp_posts' ),
		'archives'              => __( 'HC Post Archives', 'hcp_posts' ),
		'attributes'            => __( 'HC Post Attributes', 'hcp_posts' ),
		'parent_item_colon'     => __( 'Parent HC Post:', 'hcp_posts' ),
		'all_items'             => __( 'All HC Posts', 'hcp_posts' ),
		'add_new_item'          => __( 'Add New HC Post', 'hcp_posts' ),
		'add_new'               => __( 'Add New', 'hcp_posts' ),
		'new_item'              => __( 'New HC Post', 'hcp_posts' ),
		'edit_item'             => __( 'Edit HC Post', 'hcp_posts' ),
		'update_item'           => __( 'Update HC Post', 'hcp_posts' ),
		'view_item'             => __( 'View HC Post', 'hcp_posts' ),
		'view_items'            => __( 'View HC Posts', 'hcp_posts' ),
		'search_items'          => __( 'Search HC Post', 'hcp_posts' ),
		'not_found'             => __( 'HC Post not found', 'hcp_posts' ),
		'not_found_in_trash'    => __( 'HC Post not found in Trash', 'hcp_posts' ),
		'featured_image'        => __( 'Featured Image', 'hcp_posts' ),
		'set_featured_image'    => __( 'Set featured image', 'hcp_posts' ),
		'remove_featured_image' => __( 'Remove featured image', 'hcp_posts' ),
		'use_featured_image'    => __( 'Use as featured image', 'hcp_posts' ),
		'insert_into_item'      => __( 'Insert into post', 'hcp_posts' ),
		'uploaded_to_this_item' => __( 'Uploaded to this post', 'hcp_posts' ),
		'items_list'            => __( 'HC Posts list', 'hcp_posts' ),
		'items_list_navigation' => __( 'HC Posts list navigation', 'hcp_posts' ),
		'filter_items_list'     => __( 'Filter posts list', 'hcp_posts' ),
	];

	$args = [
		'label'                 => __( 'HC Post', 'hcp_posts' ),
		'description'           => __( 'HC Posts', 'hcp_posts' ),
		'labels'                => $labels,
		'supports'              => ['title', 'editor', 'thumbnail'],
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	];
	register_post_type( 'hcposts', $args );

}
add_action( 'init', 'hcp_posts', 0 );
