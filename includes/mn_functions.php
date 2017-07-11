<?php

// action to save metas when publish or update button is clicked
// do this only if $_POST values are set to avoid 'headers already send' error

add_action('save_post', 'mn_save_details');

function mn_save_details(){

	global $post;

	if ( isset($_POST["mn_text"]) ) {

		update_post_meta($post->ID, "mn_button_text", $_POST["mn_text"]);

	}

	if ( isset($_POST["mn_link"]) ) {

		update_post_meta($post->ID, "mn_button_link", $_POST["mn_link"]);

	}

}

// on admin init add button meta box

add_action("admin_init", "mn_init");

function mn_init() {

	add_meta_box("mn_button", "MN Button Details", "mn_button", "mnposts", "normal", "low");

}

// button markup on backend

function mn_button() {

	global $post;

    $mn_text = get_post_meta($post->ID, 'mn_button_text', true);

    $mn_link = get_post_meta($post->ID, 'mn_button_link', true);

    ?>

    <p>

        <label><?php _e('MN Button Text:', 'mnp_posts'); ?></label><br />

        <input style="width: 100%" name="mn_text" type="text" value="<?php echo $mn_text; ?>">

    </p>

	<p>

        <label><?php _e('MN Button Link:', 'mnp_posts'); ?></label><br />

		<input style="width: 100%" name="mn_link" type="text" value="<?php echo $mn_link; ?>">

    </p>

  <?php
}

// include Bootstrap via CDN (4.0)

if ( !function_exists('mn_bootstrap') ) {
	function mn_bootstrap() {
		echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">';
		echo '<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>';
		echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>';
	}
	add_action('wp_footer', 'mn_bootstrap');
}