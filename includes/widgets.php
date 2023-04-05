<?php namespace WSUWP\Plugin\WSU_Options;


class Widgets {

	public static function init() {

	}

	public static function get_sidebars( $format = 'select' ) {

		global $wp_registered_sidebars;

		$sidebars = array();

		if ( 'select' === $format ) {

			foreach ( $wp_registered_sidebars as $id => $sidebar ) {

				$sidebars[ $id ] = $sidebar['name'];
			}

			return $sidebars;

		}

	}

}

Widgets::init();
