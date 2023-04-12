<?php namespace WSUWP\Plugin\WSU_Options;

class Plugin {


	public static function get( $property ) {

		switch ( $property ) {

			case 'version':
				return '1.0.0';

			case 'dir':
				return plugin_dir_path( dirname( __FILE__ ) );

			case 'url':
				return plugin_dir_url( dirname( __FILE__ ) );

			default:
				return '';

		}

	}


	public static function init() {

		require_once __DIR__ . '/widgets.php';

		require_once __DIR__ . '/wsu-options.php';

		if ( defined( 'WDSTHEMEVERSION' ) && 3 === WDSTHEMEVERSION ) {

			require_once __DIR__ . '/customizer.php';

		} else {

			require_once __DIR__ . '/option-sync.php';

		}

	}


	public static function get_wsu_option( $option_group, $option_key, $default = '' ) {

		$wsu_options = get_option( 'wsuwp', array() );

		if ( ! empty( $wsu_options[ $option_group ] ) && isset( $wsu_options[ $option_group ][ $option_key ] ) ) {

			return $wsu_options[ $option_group ][ $option_key ];

		} else {

			return $default;

		}

	}

}

Plugin::init();
