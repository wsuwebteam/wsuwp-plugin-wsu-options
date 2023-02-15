<?php namespace WSUWP\Plugin\WSU_Options;

class WSU_Site_Options extends Customizer_Section {
	protected $section_id = 'wsu_site_options';
	protected $section_title = 'WSU Site Options';
	protected $priority      = 170;
	protected $permissions   = 'delete_site';
	protected $description   = '';


	protected function add_controls() {

		$this->wp_customize->add_setting(
			$this->get_option_id( 'site_options', 'parent_name' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);


		$this->wp_customize->add_control( 
			$this->get_option_slug( 'site_options', 'parent_name' ),
			array(
				'label'    => 'Parent Site Name (Optional)',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'site_options', 'parent_name' ),
				'type'     => 'text',
			)
		);

		$this->wp_customize->add_setting(
			$this->get_option_id( 'site_options', 'parent_name_mobile' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

		$this->wp_customize->add_control( 
			$this->get_option_slug( 'site_options', 'parent_name_mobile' ),
			array(
				'label'    => 'Mobile/ Responsive Parent Site Name (Optional)',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'site_options', 'parent_name_mobile' ),
				'type'     => 'text',
			)
		);

		$this->wp_customize->add_setting(
			$this->get_option_id( 'site_options', 'parent_url' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

		$this->wp_customize->add_control( 
			$this->get_option_slug( 'site_options', 'parent_url' ),
			array(
				'label'    => 'Parent Site URL (Optional)',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'site_options', 'parent_url' ),
				'type'     => 'text',
			)
		);

		$this->wp_customize->add_setting(
			$this->get_option_id( 'site_options', 'give_link' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => '',
				'type'       => 'option',
			)
		);

		$this->wp_customize->add_control( 
			$this->get_option_slug( 'site_options', 'give_link' ),
			array(
				'label'    => 'Give Link',
				'section'  => $this->section_id,
				'settings' => $this->get_option_id( 'site_options', 'give_link' ),
				'type'     => 'text',
			)
		);

	}

}
