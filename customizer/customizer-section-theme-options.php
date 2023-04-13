<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Theme_Options extends Customizer_Section {
	protected static $section_id    = 'wsu_theme_options';
	protected static $section_title = 'Theme Options';
	protected static $permissions   = 'manage_options';
	protected static $panel_id      = 'wsu_theme_options';
	protected static $description   = '';
	protected static $priority      = 10;

	protected static function add_controls( $wp_customize ) {

		$wp_customize->add_setting(
			static::get_option_id( 'theme', 'allow_restriced_options' ),
			array(
				'capability' => 'delete_sites',
				'default'    => false,
				'type'       => 'option',
			)
		);

		$wp_customize->add_control(
			static::get_option_slug( 'theme', 'allow_restriced_options' ),
			array(
				'settings'    => static::get_option_id( 'theme', 'allow_restriced_options' ),
				'type'        => 'checkbox',
				'section'     => static::$section_id,
				'label'       => 'Allow Restricted Options',
				'description' => '',
			)
		);

	}

}

