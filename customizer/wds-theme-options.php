<?php namespace WSUWP\Plugin\WSU_Options;

class WDS_Theme_Options extends Customizer_Section {
	protected $section_id = 'wds_theme_options';
	protected $section_title = 'WDS Theme Options';
	protected $priority      = 170;
	protected $permissions   = 'delete_site';
	protected $description   = '';


	protected function add_controls() {

		$this->wp_customize->add_setting(
			$this->get_option_id( 'wds', 'site_header' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => 'unit',
				'type'       => 'option',
			)
		);

		$this->wp_customize->add_control(
			$this->get_option_slug( 'wds', 'site_header' ),
			array(
				'settings'    => $this->get_option_id( 'wds', 'site_header' ),
				'type'        => 'select',
				'section'     => $this->section_id,
				'label'       => __( 'WDS Site Header' ),
				'description' => __( 'Campus and System options may only be used for campus and system sites. Colleges, units, and departments should use the unit header.' ),
				'choices'     => array(
					''       => 'None',
					'legacy' => 'Legacy',
					'unit'   => 'Unit',
					'campus' => 'Campus',
					'system' => 'System',
				),
			)
		);

		$this->wp_customize->add_setting(
			$this->get_option_id( 'wds', 'show_search' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => true,
				'type'       => 'option',
			)
		);

		$this->wp_customize->add_control(
			$this->get_option_slug( 'wds', 'show_search' ),
			array(
				'settings'    => $this->get_option_id( 'wds', 'show_search' ),
				'type'        => 'checkbox',
				'section'     => $this->section_id,
				'label'       => __( 'Show Quicklinks/Search' ),
				'description' => __( '' ),
			)
		);

		$this->wp_customize->add_setting(
			$this->get_option_id( 'wds', 'local_search' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => true,
				'type'       => 'option',
			)
		);

		$this->wp_customize->add_control(
			$this->get_option_slug( 'wds', 'local_search' ),
			array(
				'settings'    => $this->get_option_id( 'wds', 'local_search' ),
				'type'        => 'checkbox',
				'section'     => $this->section_id,
				'label'       => __( 'Default to Local Site Search' ),
				'description' => __( '' ),
			)
		);

	}

}