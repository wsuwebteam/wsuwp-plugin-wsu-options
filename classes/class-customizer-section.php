<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section {

	protected static $panel_id;
	protected static $section_id;
	protected static $section_title;
	protected static $priority      = 10;
	protected static $permissions   = 'edit_theme_options';
	protected static $description   = '';


	public static function register_section( $wp_customize, $section_id = false, $section_args = array() ) {

		if ( $section_id ) {

			self::$section_id = $section_id;

		}

		$register_args = array(
			'title'       => ( ! empty( $section_args['displayName'] ) ) ? $section_args['displayName'] : static::$section_title,
			'description' => static::$description,
			'capability'  => static::$permissions,
			'priority'    => static::$priority,
		);

		if ( ! empty( static::$panel_id ) ) {

			$register_args['panel'] = static::$panel_id;

		}

		$wp_customize->add_section( static::$section_id, $register_args );

		static::add_controls( $wp_customize, $section_args );

	}


	protected function get_option_id( $group, $key, $option_slug = 'wsuwp' ) {

		return $option_slug . '[' . $group . '][' . $key . ']';

	}

	protected function get_option_slug( $group, $key, $option_slug = 'wsuwp' ) {

		return $option_slug . '_' . $group . '_' . $key . '_control';

	}

}
