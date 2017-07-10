<?php
/*
Plugin Name: HC Posts
Plugin URI: https://github.com/mariusgnicula/hcposts
Description: A simple Wordpress Posts Plugin
Version: 0.1
Author: Marius Nicula
Author URI: https://github.com/mariusgnicula
License: GPL2
*/

define( 'HCP_PLUGIN', __FILE__ );

define( 'HCP_PLUGIN_URL', plugin_dir_url( __FILE__ ));

define( 'HCP_PLUGIN_DIR', untrailingslashit( dirname( HCP_PLUGIN ) ) );

require_once HCP_PLUGIN_DIR . '/settings.php';
