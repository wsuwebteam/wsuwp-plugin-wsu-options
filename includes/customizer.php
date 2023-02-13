<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer {

    protected static $wds_panel_id = 'wds_panel';
    protected static $customizers = array();


	public static function get( $property ) {

		switch ( $property ) {

			case 'advanced_panel_id':
				return self::$advanced_panel_id;

			default:
				return '';

		}

	}


	public static function init() {

        $customizer_dir = Plugin::get('dir') . '/customizer/';

        require_once Plugin::get('dir') . '/classes/class-customizer-section.php';

        require_once $customizer_dir . 'wds-advanced-options.php';

        add_action( 'customize_register', array( __CLASS__, 'setup_customizer' ) );

	}


    public static function setup_customizer( $wp_customize ) {

        $wp_customize->add_panel(
			self::$wds_panel_id,
			array(
				'title' => '(BETA) Web Design System Options',
				'description' => 'Settings for WSU Web Design System Theme', // Include html tags such as <p>.
				'priority' => 160, // Mixed with top-level-section hierarchy.
			)
		);


        self::$customizers[] = new WDS_Advanced_Options( $wp_customize, self::$wds_panel_id );

	}

}

Customizer::init();
