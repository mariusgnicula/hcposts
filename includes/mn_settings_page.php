<?php

// create a MNP settings page
// function to output content on the page

function mnp_settings_page() {

	echo '<div class="wrap"><h1>MNP Settings</h1></div>';

	// externalize the shortcode generator

	include_once MN_PLUGIN_DIR . '/includes/mn_shortcode_generator.php';

	// we need JS to generate the shortcode
	// best to externalize it and place it only on this page

	echo '<script type="text/javascript" src="' . MN_PLUGIN_URL . 'assets/js/mn_shortcode_generator.js"></script>';

}

// add a submenu page to Settings tab

function mnp_options_page()  {

	add_submenu_page(
		'options-general.php',
		'MNP Settings',
		'MNP Settings',
		'manage_options',
		'mnp_settings',
		'mnp_settings_page'
	);

}

add_action('admin_menu', 'mnp_options_page');
