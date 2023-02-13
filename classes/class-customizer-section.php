<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section {

	protected $wp_customize;
	protected $panel_id;
	protected $section_id;
	protected $section_title;
	protected $priority      = 10;
	protected $permissions   = 'edit_theme_options';
	protected $description   = '';

	public function __construct( $wp_customize, $panel_id = false ) {

		$this->wp_customize = $wp_customize;
		$this->panel_id     = $panel_id;

		if ( ! empty( $this->section_id ) ) {

			$this->add_section();

		}

		$this->add_controls();

	}


	protected function add_section() {

		$this->wp_customize->add_section(
			$this->section_id,
			array(
				'title'       => $this->section_title,
				'description' => $this->description,
				'capability'  => $this->permissions,
				'panel'       => $this->panel_id,
				'priority'    => $this->priority,
			)
		);

	}


	protected function get_option_id( $group, $key, $option_slug = 'wsuwp' ) {

		return $option_slug . '[' . $group . '][' . $key . ']';

	}

	protected function get_option_slug( $group, $key, $option_slug = 'wsuwp' ) {

		return $option_slug . '_' . $group . '_' . $key . '_control';

	}

}
