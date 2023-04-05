<?php namespace WSUWP\Plugin\WSU_Options;

class Section_Contact extends Customizer_Section {
	protected $section_id    = 'wsu_contact';
	protected $section_title = 'Contact Information';
	protected $priority      = 170;
	protected $permissions   = 'activate_plugins';
	protected $description   = '';


	protected function add_controls( $wp_customize ) {

		$wp_customize->add_setting(
			$this->get_option_id( 'contact', 'organization' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			$this->get_option_id( 'contact', 'address' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			$this->get_option_id( 'contact', 'city' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			$this->get_option_id( 'contact', 'state ' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_setting(
			$this->get_option_id( 'contact', 'zip' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

		$wp_customize->add_setting(
			$this->get_option_id( 'contact', 'phone' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

		$wp_customize->add_setting(
			$this->get_option_id( 'contact', 'email' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

        $wp_customize->add_control( 
			$this->get_option_slug( 'contact', 'organization' ),
			array(
				'label'    => 'Organization',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'contact', 'organization' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			$this->get_option_slug( 'contact', 'address' ),
			array(
				'label'    => 'Address',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'contact', 'address' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			$this->get_option_slug( 'contact', 'city' ),
			array(
				'label'    => 'City',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'contact', 'city' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			$this->get_option_slug( 'contact', 'state' ),
			array(
				'label'    => 'State',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'contact', 'state' ),
				'type'     => 'text',
			)
		);

        $wp_customize->add_control( 
			$this->get_option_slug( 'contact', 'zip' ),
			array(
				'label'    => 'Zip',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'contact', 'zip' ),
				'type'     => 'text',
			)
		);
		
        $wp_customize->add_control( 
			$this->get_option_slug( 'contact', 'phone' ),
			array(
				'label'    => 'Phone',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'contact', 'phone' ),
				'type'     => 'text',
			)
		);
		
        $wp_customize->add_control( 
			$this->get_option_slug( 'contact', 'email' ),
			array(
				'label'    => 'Email',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'contact', 'email' ),
				'type'     => 'text',
			)
		);

	}

}