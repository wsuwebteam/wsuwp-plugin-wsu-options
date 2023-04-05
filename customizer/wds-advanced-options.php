<?php namespace WSUWP\Plugin\WSU_Options;

class WDS_Advanced_Options extends Customizer_Section {
	protected $section_id = 'wds_advanced';
	protected $section_title = 'WDS Advanced Options';
	protected $priority      = 170;
	protected $permissions   = 'delete_site';
	protected $description   = '';


	protected function add_controls() {

		$this->wp_customize->add_setting(
			$this->get_option_id( 'wds', 'version' ),
			array(
				'capability' => 'edit_theme_options',
				'default'    => 2,
				'type'       => 'option',
			)
		);

		$this->wp_customize->add_control(
			$this->get_option_slug( 'wds', 'version' ),
			array(
				'settings'    => $this->get_option_id( 'wds', 'version' ),
				'type'        => 'select',
				'section'     => $this->section_id,
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