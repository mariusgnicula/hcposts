<?php
/*
Plugin Name: MN Posts
Plugin URI: https://github.com/mariusgnicula/hcposts
Description: A simple Wordpress Posts Plugin
Version: 0.1
Author: Marius Nicula
Author URI: https://github.com/mariusgnicula
License: GPL2
*/

define( 'MN_PLUGIN', __FILE__ );

define( 'MN_PLUGIN_URL', plugin_dir_url( __FILE__ ));

define( 'MN_PLUGIN_DIR', untrailingslashit( dirname( MN_PLUGIN ) ) );

// keeping this file just as an entry point to set constants
// require the settings file, where the real stuff happens

require_once MN_PLUGIN_DIR . '/mn_settings.php';
