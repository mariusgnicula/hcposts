<?php

// create MN Posts CPT with all the trimmings

function mnp_posts() {

	$labels = [
		'name'                  => _x( 'MN Posts', 'MN Post Type General Name', 'mnp_posts' ),
		'singular_name'         => _x( 'MN Post', 'MN Post Type Singular Name', 'mnp_posts' ),
		'menu_name'             => __( 'MN Posts', 'mnp_posts' ),
		'name_admin_bar'        => __( 'MN Post', 'mnp_posts' ),
		'archives'              => __( 'MN Post Archives', 'mnp_posts' ),
		'attributes'            => __( 'MN Post Attributes', 'mnp_posts' ),
		'parent_item_colon'     => __( 'Parent MN Post:', 'mnp_posts' ),
		'all_items'             => __( 'All MN Posts', 'mnp_posts' ),
		'add_new_item'          => __( 'Add New MN Post', 'mnp_posts' ),
		'add_new'               => __( 'Add New', 'mnp_posts' ),
		'new_item'              => __( 'New MN Post', 'mnp_posts' ),
		'edit_item'             => __( 'Edit MN Post', 'mnp_posts' ),
		'update_item'           => __( 'Update MN Post', 'mnp_posts' ),
		'view_item'             => __( 'View MN Post', 'mnp_posts' ),
		'view_items'            => __( 'View MN Posts', 'mnp_posts' ),
		'search_items'          => __( 'Search MN Post', 'mnp_posts' ),
		'not_found'             => __( 'MN Post not found', 'mnp_posts' ),
		'not_found_in_trash'    => __( 'MN Post not found in Trash', 'mnp_posts' ),
		'featured_image'        => __( 'Featured Image', 'mnp_posts' ),
		'set_featured_image'    => __( 'Set featured image', 'mnp_posts' ),
		'remove_featured_image' => __( 'Remove featured image', 'mnp_posts' ),
		'use_featured_image'    => __( 'Use as featured image', 'mnp_posts' ),
		'insert_into_item'      => __( 'Insert into post', 'mnp_posts' ),
		'uploaded_to_this_item' => __( 'Uploaded to this post', 'mnp_posts' ),
		'items_list'            => __( 'MN Posts list', 'mnp_posts' ),
		'items_list_navigation' => __( 'MN Posts list navigation', 'mnp_posts' ),
		'filter_items_list'     => __( 'Filter posts list', 'mnp_posts' ),
	];

	$args = [
		'label'                 => __( 'MN Post', 'mnp_posts' ),
		'description'           => __( 'MN Posts', 'mnp_posts' ),
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
	register_post_type( 'mnposts', $args );

}
add_action( 'init', 'mnp_posts', 0 );
