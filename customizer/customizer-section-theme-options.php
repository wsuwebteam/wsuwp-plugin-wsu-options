<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Theme_Options extends Customizer_Section {
	protected static $section_id    = 'wsu_theme_options';
	protected static $section_title = 'Theme Options';
	protected static $permissions   = 'manage_options';
	protected static $panel_id      = 'wsu_theme_options';
	protected static $description   = '';
	protected static $priority      = 10;

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
				'capability' => 'manage_options',
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
			static::get_option_id( 'site_options', 'campus' ),
			array(
				'capability' => 'manage_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

		$wp_customize->add_control(
			static::get_option_slug( 'site_options', 'campus' ),
			array(
				'settings'    => static::get_option_id( 'site_options', 'campus' ),
				'type'        => 'select',
				'section'     => static::$section_id,
				'label'       => 'Campus',
				'description' => '',
				'choices'     => array(
					''           => 'N/A',
					'pullman'    => 'Pullman',
					'spokane'    => 'Spokane',
					'tri-cities' => 'Tri-Cities',
					'vancouver'  => 'Vancouver',
					'everett'    => 'Everett',
					'global'     => 'Global Campus',
				),
			)
		);


		$wp_customize->add_setting(
			static::get_option_id( 'theme', 'displayQuicklinks' ),
			array(
				'capability' => 'manage_options',
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

		$wp_customize->add_setting(
			static::get_option_id( 'search', 'showOptions' ),
			array(
				'capability' => 'manage_options',
				'default'    => 'default',
				'type'       => 'option',
			)
		);

		$wp_customize->add_control(
			static::get_option_slug( 'search', 'showOptions' ),
			array(
				'settings'    => static::get_option_id( 'search', 'showOptions' ),
				'type'        => 'select',
				'section'     => static::$section_id,
				'label'       => 'Show Search Options',
				'description' => '',
				'choices'     => array(
					'default' => 'Default',
					'show'    => 'Show',
					'hide'    => 'Hide',
				),
			)
		);

		$wp_customize->add_setting(
			static::get_option_id( 'search', 'context' ),
			array(
				'capability' => 'manage_options',
				'default'    => 'default',
				'type'       => 'option',
			)
		);

		$wp_customize->add_control(
			static::get_option_slug( 'search', 'context' ),
			array(
				'settings'    => static::get_option_id( 'search', 'context' ),
				'type'        => 'select',
				'section'     => static::$section_id,
				'label'       => 'Default Search Context',
				'description' => '',
				'choices'     => array(
					'default' => 'Default',
					'site'    => 'This Site',
					'wsu'     => 'All WSU',
				),
			)
		);

		$wp_customize->add_setting(
			static::get_option_id( 'site_options', 'primaryActionText' ),
			array(
				'capability' => 'manage_options',
				'default'    => 'Give',
				'type'       => 'option',
			)
		);

		$wp_customize->add_control( 
			static::get_option_slug( 'site_options', 'primaryActionText' ),
			array(
				'label'    => 'Quicklinks CTA Text',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'site_options', 'primaryActionText' ),
				'type'     => 'text',
			)
		);

		$wp_customize->add_setting(
			static::get_option_id( 'site_options', 'primaryActionLink' ),
			array(
				'capability' => 'manage_options',
				'default'    => 'https://foundation.wsu.edu/give/',
				'type'       => 'option',
			)
		);

		$wp_customize->add_control( 
			static::get_option_slug( 'site_options', 'primaryActionLink' ),
			array(
				'label'    => 'Quicklinks CTA Link',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'site_options', 'primaryActionLink' ),
				'type'     => 'text',
			)
		);

	}

}

