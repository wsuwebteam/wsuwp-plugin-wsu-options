<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Theme_Options_Header extends Customizer_Section {
	protected static $section_id    = 'wsu_theme_options_header';
	protected static $section_title = 'Header Options';
	protected static $permissions   = 'activate_plugins';
	protected static $panel_id      = 'wsu_theme_options';
	protected static $description   = '';
	protected static $priority      = 20;

	protected static function add_controls( $wp_customize ) {

		$header_options = array( 'unit'   => 'Unit' );

		if ( Plugin::get_wsu_option( 'theme', 'allowRestricedOptions', false ) ) {

			$header_options = array_merge( 
				$header_options, 
				array(
					'campus' => 'Campus (Restricted)',
					'system' => 'System (Restricted)',
				)
			);
		}

		$wp_customize->add_setting(
			static::get_option_id( 'theme', 'siteHeader' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => 'unit',
				'type'       => 'option',
			)
		);

		$wp_customize->add_control(
			static::get_option_slug( 'theme', 'siteHeader' ),
			array(
				'settings'    => static::get_option_id( 'theme', 'siteHeader' ),
				'type'        => 'select',
				'section'     => self::$section_id,
				'label'       => __( 'Site Header' ),
				'description' => __( 'Campus and System options may only be used for campus and system sites. Colleges, units, and departments should use the unit header.' ),
				'choices'     => $header_options,
			)
		);


		$wp_customize->add_setting(
			static::get_option_id( 'theme', 'displayQuicklinks' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => 'default',
				'type'       => 'option',
			)
		);

		$wp_customize->add_control(
			static::get_option_slug( 'theme', 'displayQuicklinks' ),
			array(
				'settings'    => static::get_option_id( 'theme', 'displayQuicklinks' ),
				'type'        => 'select',
				'section'     => static::$section_id,
				'label'       => 'Display Search/Quicklinks',
				'description' => '',
				'choices'     => array(
					'default' => 'Default',
					'show'    => 'Show',
					'hide'    => 'Hide',
				),
			)
		);


	}

}

