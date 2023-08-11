<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Audience_Nav extends Customizer_Section {
	protected static $section_id    = 'wsu_audience_nav';
	protected static $section_title = 'Audience Navigation';
	protected static $permissions   = 'manage_options';
	protected static $panel_id      = 'wsu_theme_options';
	protected static $description   = '';
	protected static $priority      = 10;

	protected static function add_controls( $wp_customize ) {

		$wsu_theme_options = apply_filters( 'wsu_theme_customizer_options', array() );

		$audience_nav_options = ( ! empty( $wsu_theme_options['audience_nav'] ) ) ? $wsu_theme_options['audience_nav'] : array();

		if ( array_key_exists( 'colorScheme', $audience_nav_options ) ) {

			$wp_customize->add_setting(
				static::get_option_id( 'audience_nav', 'colorScheme' ),
				array(
					'capability' => 'manage_options',
					'default'    => ( ! empty( $audience_nav_options['colorScheme']['default'] ) ) ? $audience_nav_options['colorScheme']['default'] : '',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( 'audience_nav', 'colorScheme' ),
					array(
						'settings'    => static::get_option_id( 'audience_nav', 'colorScheme' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Dark Mode',
						'description' => '',
						'choices'     => ( ! empty( $audience_nav_options['colorScheme']['options'] ) ) ? $audience_nav_options['colorScheme']['options'] : array(),
					)
				)
			);

		}

	}

}

