<?php namespace WSUWP\Plugin\WSU_Options;

class Plugin {


	public static function get( $property ) {

		switch ( $property ) {

			case 'version':
				return '0.0.1';

			case 'dir':
				return plugin_dir_path( dirname( __FILE__ ) );

			case 'url':
				return plugin_dir_url( dirname( __FILE__ ) );

			default:
				return '';

		}

	}


	public static function init() {

		require_once __DIR__ . '/customizer.php';

	}

}

Plugin::init();
