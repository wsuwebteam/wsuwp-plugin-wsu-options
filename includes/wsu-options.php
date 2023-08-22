<?php namespace WSUWP\Plugin\WSU_Options;


class WSU_Options {

	public static function init() {

		add_filter( 'wsu_theme_options', array( __CLASS__, 'get_theme_options' ), 10, 4 );

	}


	public static function get_theme_options( $default, $option_group = false, $option_key = false, $option_base = 'wsuwp' ) {

		$wsu_options = get_option( $option_base, array() );

		if ( ! $option_key ) {

			return $wsu_options;

		}

		if ( ! empty( $wsu_options[ $option_group ] ) && isset( $wsu_options[ $option_group ][ $option_key ] ) ) {

			return $wsu_options[ $option_group ][ $option_key ];

		} else {

			return $default;

		}

	}


	public static function get_wsu_option( $option_group, $option_key, $default = '', $option_base = 'wsuwp' ) {

		$wsu_options = get_option( $option_base, array() );

		if ( ! empty( $wsu_options[ $option_group ] ) && isset( $wsu_options[ $option_group ][ $option_key ] ) ) {

			return $wsu_options[ $option_group ][ $option_key ];

		} else {

			return $default;

		}

	}

	public static function has_wsu_option( $option_group, $option_key, $option_base = 'wsuwp', $allow_false = false ) {

		$wsu_options = get_option( $option_base, array() );

		return ( ! empty( $wsu_options[ $option_group ] ) && ! empty( $wsu_options[ $option_group ][ $option_key ] ) ) ? true : false;

	}

	public static function update_wsu_option( $option_group, $option_key, $value, $option_base = 'wsuwp' ) {

		$wsu_options = get_option( $option_base, array() );

		if ( ! isset( $wsu_options[ $option_group ] ) ) {

			$wsu_options[ $option_group ] = array();

		}

		$wsu_options[ $option_group ][ $option_key ] = $value;

		update_option( $option_base, $wsu_options );

	}


}

WSU_Options::init();
