<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Theme_Options_Advanced extends Customizer_Section {
	protected static $section_id    = 'wsu_theme_options_advanced';
	protected static $section_title = 'Advanced Options';
	protected static $permissions   = 'activate_plugins';
	protected static $panel_id      = 'wsu_theme_options';
	protected static $description   = '';
	protected static $priority      = 100;

	protected static function add_controls( $wp_customize ) {

		$wp_customize->add_setting(
			static::get_option_id( 'wds', 'version' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => 2,
				'type'       => 'option',
			)
		);

		$wp_customize->add_control(
			static::get_option_slug( 'wds', 'version' ),
			array(
				'settings'    => static::get_option_id( 'wds', 'version' ),
				'type'        => 'select',
				'section'     => static::$section_id,
				'label'       => __( 'WDS Version' ),
				'description' => __( 'Change WDS Version.' ),
				'choices'     => array(
					'2.x'      => 'Version 2 (recommended)',
					'2.beta'   => 'Beta | Version 2',
					'3.beta'   => 'Beta | Version 3',
				),
			)
		);

	}

}

