<?php

// function to create shortcode
// so the shortcode generator can create a number value and a posts value

function hc_posts($atts) {

	// get shortcode values and set defaults

	$a = shortcode_atts( [
		'number' => 3,
		'posts' => []
	], $atts );

	// save those values, whether they are the default ones or custom ones, to variables
	$hc_number = (int)$a['number'];
	$hc_init_posts = $a['posts'];
	
	// convert posts argument to array
	$hc_init_posts = explode(',', $hc_init_posts);
	
	// check whether the set number is higher than the number of chosen posts
	// set a variable as an array
	$per_page = $hc_number - count($hc_init_posts);
	$hc_addon_posts = [];

	// if the number set in the shortcode is greater than the number of chosen posts
	// add more posts until number necessity is met
	// ignore posts that have already been chosen, so as to avoid duplicate content
	if ( $per_page > 0 ) {
		$addon_args = [
			'post_type' => 'hcposts',
			'posts_per_page' => $per_page,
			'post__not_in' => $hc_init_posts
		];

		$hc_addon_posts_array = get_posts($addon_args);
		
		// push new values to recently created array variable

		foreach ( $hc_addon_posts_array as $hc_addon_posts_array_item ) {
			
			array_push($hc_addon_posts, $hc_addon_posts_array_item->ID);
			
		}
	}
	
	// now merge chosen posts with the difference to ensure shortcode number is met
	// we now have our array of post IDs

	$hc_posts = array_merge($hc_init_posts, $hc_addon_posts);

	?><pre><?php print_r($hc_posts); ?></pre><?php

}
add_shortcode('hc_posts', 'hc_posts');