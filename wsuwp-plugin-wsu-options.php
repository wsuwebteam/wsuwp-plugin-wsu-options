<?php
/**
 * Plugin Name: (Beta) WSUWP Plugin WSU Options
 * Plugin URI: https://github.com/wsuwebteam/wsuwp-plugin-wsu-options
 * Description: Plugin to manage wsu options structure.
 * Version: 1.1.0
 * Requires PHP: 7.0
 * Author: Washington State University, Danial Bleile
 * Author URI: https://web.wsu.edu/
 * Text Domain: wsuwp-plugin-wsu-options
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'after_setup_theme', 'wsuwp_plugin_wsu_options_init' );

function wsuwp_plugin_wsu_options_init() {

	if ( defined( 'ISWDS' ) ) {

		require_once __DIR__ . '/includes/plugin.php';

	}

}


