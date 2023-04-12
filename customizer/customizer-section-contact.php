<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Contact extends Customizer_Section {
	protected static $section_id    = 'wsu_contact';
	protected static $section_title = 'Contact Information';
	protected static $priority      = 170;
	protected static $permissions   = 'activate_plugins';
	protected static $description   = '';


	protected static function add_controls( $wp_customize ) {

		$wp_customize->add_setting(
			static::get_option_id( 'contact', 'organization' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			static::get_option_id( 'contact', 'address' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			static::get_option_id( 'contact', 'city' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			static::get_option_id( 'contact', 'state ' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			static::get_option_id( 'contact', 'zip' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

		$wp_customize->add_setting(
			static::get_option_id( 'contact', 'phone' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

		$wp_customize->add_setting(
			static::get_option_id( 'contact', 'email' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'contact', 'organization' ),
			array(
				'label'    => 'Organization',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'contact', 'organization' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'contact', 'address' ),
			array(
				'label'    => 'Address',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'contact', 'address' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'contact', 'city' ),
			array(
				'label'    => 'City',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'contact', 'city' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'contact', 'state' ),
			array(
				'label'    => 'State',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'contact', 'state' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			static::get_option_slug( 'contact', 'zip' ),
			array(
				'label'    => 'Zip',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'contact', 'zip' ),
				'type'     => 'text',
			)
		);
		
        $wp_customize->add_control( 
			static::get_option_slug( 'contact', 'phone' ),
			array(
				'label'    => 'Phone',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'contact', 'phone' ),
				'type'     => 'text',
			)
		);
		
        $wp_customize->add_control( 
			static::get_option_slug( 'contact', 'email' ),
			array(
				'label'    => 'Email',
				'section'  => static::$section_id,
				'settings' => static::get_option_id( 'contact', 'email' ),
				'type'     => 'text',
			)
		);

	}

}