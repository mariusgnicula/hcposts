<?php

// create a HCP settings page

function hcp_settings_page() {

	echo '<div class="wrap"><h1>HCP Settings</h1></div>';

	include_once HCP_PLUGIN_DIR . '/includes/hc_shortcode_generator.php';

	echo '<script type="text/javascript" src="'. HCP_PLUGIN_URL . 'assets/js/hc_shortcode_generator.js"></script>';

}

function hcp_options_page()  {

	add_submenu_page(
		'options-general.php',
		'HCP Settings',
		'HCP Settings',
		'manage_options',
		'hcp_settings',
		'hcp_settings_page'
	);

}

add_action('admin_menu', 'hcp_options_page');
