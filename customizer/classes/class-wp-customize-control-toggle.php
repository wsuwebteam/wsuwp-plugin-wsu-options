<?php namespace WSUWP\Plugin\WSU_Options; 

class WP_Customize_Control_WSU_Toggle extends \WP_Customize_Control {
	public $type = 'wsutoggle';
	/**
	* Render the control's content.
	*/
	public function render_content() {

		if ( empty( $this->choices ) ) {
			return;
		}

		$name = '_customize-radio-' . $this->id;
		$input_id         = '_customize-input-' . $this->id;
		$description_id   = '_customize-description-' . $this->id;
		$describedby_attr = ( ! empty( $this->description ) ) ? ' aria-describedby="' . esc_attr( $description_id ) . '" ' : '';

		include Plugin::get( 'dir' ) . '/customizer/templates/toggle.php';

	}

	public function enqueue() {
		wp_enqueue_style( 'custom-customize', Plugin::get( 'url' ) . '/customizer/css/wsutoggle.css', array(), Plugin::get( 'version' ) );

	}
}
