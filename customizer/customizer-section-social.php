<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Social extends Customizer_Section {
	protected static $section_id = 'wsu_social_accounts';
	protected static $section_title = 'WSU Social Accounts';
	protected static $priority      = 170;
	protected static $permissions   = 'activate_plugins';
	protected static $description   = '';


	protected static function add_controls( $wp_customize ) {

		$wp_customize->add_setting(
			static::get_option_id( 'social_accounts', 'twitter' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			static::get_option_id( 'social_accounts', 'facebook' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			static::get_option_id( 'social_accounts', 'youtube' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			static::get_option_id( 'social_accounts', 'instagram' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			static::get_option_id( 'social_accounts', 'linkedin' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'social_accounts', 'twitter' ),
			array(
				'label'    => 'Twitter Account',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'social_accounts', 'twitter' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'social_accounts', 'facebook' ),
			array(
				'label'    => 'Facebook Account',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'social_accounts', 'facebook' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'social_accounts', 'youtube' ),
			array(
				'label'    => 'YouTube Account',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'social_accounts', 'youtube' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'social_accounts', 'instagram' ),
			array(
				'label'    => 'Instagram Account',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'social_accounts', 'instagram' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'social_accounts', 'linkedin' ),
			array(
				'label'    => 'Linkedin Account',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'social_accounts', 'linkedin' ),
				'type'     => 'text',
			)
		);

	}

}