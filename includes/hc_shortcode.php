<?php

// function to create shortcode
// so the shortcode generator can create a number value and a posts value

function hc_posts($atts) {

	$a = shortcode_atts( [
		'number' => 3,
		'posts' => []
	], $atts );

	$custom_number = (int)$a['number'];
	$custom_posts = $a['posts'];
	$custom_posts = explode(',', $custom_posts);

	$initial_args = [
		'post_type' => 'hcposts',
		'posts_per_page' => 3 - count($custom_posts)
	];

	$hc_initial_posts_array = [];

	$hc_initial_posts = get_posts($initial_args);

	foreach ( $hc_initial_posts as $hc_initial_post ) {
		array_push($hc_initial_posts_array, $hc_initial_post->ID);
	}

	$merged_posts = array_merge($custom_posts, $hc_initial_posts_array);

	?><pre><?php print_r($merged_posts); ?></pre><?php

}
add_shortcode('hc_posts', 'hc_posts');