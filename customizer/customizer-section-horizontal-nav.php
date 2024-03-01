<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Horizontal_Nav extends Customizer_Section {
	protected static $section_id    = 'wsu_horizontal_nav';
	protected static $section_title = 'Horizontal Navigation';
	protected static $permissions   = 'manage_options';
	protected static $panel_id      = 'wsu_theme_options';
	protected static $description   = '';
	protected static $priority      = 10;

	protected static function add_controls( $wp_customize ) {

		if ( has_nav_menu( 'site_horizontal' ) ) {

			$wsu_theme_options = apply_filters( 'wsu_theme_customizer_options', array() );

			$customizer_options = ( ! empty( $wsu_theme_options['horizontal_nav'] ) ) ? $wsu_theme_options['horizontal_nav'] : array();

			if ( array_key_exists( 'colorScheme', $customizer_options ) ) {

				$wp_customize->add_setting(
					static::get_option_id( 'horizontal_nav', 'colorScheme' ),
					array(
						'capability' => 'manage_options',
						'default'    => ( ! empty( $customizer_options['colorScheme']['default'] ) ) ? $customizer_options['colorScheme']['default'] : '',
						'type'       => 'option',
					)
				);
		
				$wp_customize->add_control(
					new WP_Customize_Control_WSU_Toggle(
						$wp_customize,
						static::get_option_slug( 'horizontal_nav', 'colorScheme' ),
						array(
							'settings'    => static::get_option_id( 'horizontal_nav', 'colorScheme' ),
							'type'        => 'wsutoggle',
							'section'     => static::$section_id,
							'label'       => 'Dark Mode',
							'description' => '',
							'choices'     => ( ! empty( $customizer_options['colorScheme']['options'] ) ) ? $customizer_options['colorScheme']['options'] : array(),
						)
					)
				);

			}

			if ( array_key_exists( 'menuDepth', $customizer_options ) ) {

				$wp_customize->add_setting(
					static::get_option_id( 'horizontal_nav', 'menuDepth' ),
					array(
						'capability' => 'manage_options',
						'default'    => ( ! empty( $customizer_options['menuDepth']['default'] ) ) ? $customizer_options['menuDepth']['default'] : '',
						'type'       => 'option',
					)
				);

				$wp_customize->add_control(
					static::get_option_slug( 'horizontal_nav', 'menuDepth' ),
					array(
						'settings'    => static::get_option_id( 'horizontal_nav', 'menuDepth' ),
						'type'        => 'select',
						'section'     => static::$section_id,
						'label'       => 'Menu Depth',
						'description' => '',
						'choices'     => array(
							1 => '1',
							2 => '2',
							3 => '3',
						),
					)
				);

			}

		}

	}

}

