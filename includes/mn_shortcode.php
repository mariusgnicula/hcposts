<?php

// function to create shortcode
// so the shortcode generator can create a number value and a posts value

function mn_posts($atts) {

	// get shortcode values and set defaults

	$a = shortcode_atts( [
		'number' => 3,
		'posts' => []
	], $atts );

	// save those values, whether they are the default ones or custom ones, to variables
	$mn_number = (int)$a['number'];
	$mn_init_posts = $a['posts'];
	
	// convert posts argument to array
	$mn_init_posts = explode(',', $mn_init_posts);
	
	// check whether the set number is higher than the number of chosen posts
	// set a variable as an array
	$per_page = $mn_number - count($mn_init_posts);
	$mn_addon_posts = [];

	// if the number set in the shortcode is greater than the number of chosen posts
	// add more posts until number necessity is met
	// ignore posts that have already been chosen, so as to avoid duplicate content
	if ( $per_page > 0 ) {
		$addon_args = [
			'post_type' => 'mnposts',
			'posts_per_page' => $per_page,
			'post__not_in' => $mn_init_posts
		];

		$mn_addon_posts_array = get_posts($addon_args);
		
		// push new values to recently created array variable

		foreach ( $mn_addon_posts_array as $mn_addon_posts_array_item ) {
			
			array_push($mn_addon_posts, $mn_addon_posts_array_item->ID);
			
		}
	}
	
	// now merge chosen posts with the difference to ensure shortcode number is met
	// we now have our array of post IDs

	$mn_posts = array_merge($mn_init_posts, $mn_addon_posts);

	// new WP_Query that only retrieves posts that are in $mn_posts array

	$mn_args = [
        'post_type' => 'mnposts',
        'posts_per_page' => $mn_number,
        'post__in' => $mn_posts
    ];

	$mn_query = new WP_Query($mn_args);

	$mn_posts_output = '';

	// externalize the loop for better control

	include_once MN_PLUGIN_DIR . '/includes/mn_loop.php';

	// return loop output

	return $mn_posts_output;

}

add_shortcode('mn_posts', 'mn_posts');