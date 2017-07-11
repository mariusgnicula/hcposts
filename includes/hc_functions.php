<?php

// action to save metas when publish or update button is clicked
// do this only if $_POST values are set to avoid 'headers already send' error

add_action('save_post', 'hc_save_details');

function hc_save_details(){

	global $post;

	if ( isset($_POST["hc_text"]) ) {

		update_post_meta($post->ID, "hc_button_text", $_POST["hc_text"]);

	}

	if ( isset($_POST["hc_link"]) ) {

		update_post_meta($post->ID, "hc_button_link", $_POST["hc_link"]);

	}

}

// on admin init add button meta box

add_action("admin_init", "hc_init");

function hc_init() {

	add_meta_box("hc_button", "HC Button Details", "hc_button", "hcposts", "normal", "low");

}

// button markup on backend

function hc_button() {

	global $post;

    $hc_text = get_post_meta($post->ID, 'hc_button_text', true);

    $hc_link = get_post_meta($post->ID, 'hc_button_link', true);

    ?>

    <p>

        <label><?php _e('HC Button Text:', 'hcp_posts'); ?></label><br />

        <input style="width: 100%" name="hc_text" type="text" value="<?php echo $hc_text; ?>">

    </p>

	<p>

        <label><?php _e('HC Button Link:', 'hcp_posts'); ?></label><br />

		<input style="width: 100%" name="hc_link" type="text" value="<?php echo $hc_link; ?>">

    </p>

  <?php
}

// include Bootstrap via CDN (4.0)

if ( !function_exists('hc_bootstrap') ) {
	function hc_bootstrap() {
		echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">';
		echo '<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>';
		echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>';
	}
	add_action('wp_footer', 'hc_bootstrap');
}