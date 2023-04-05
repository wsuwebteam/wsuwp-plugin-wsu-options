<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer {

	protected static $theme_options_panel = 'wsu_theme_options';
	protected static $template_options_panel = 'wsu_template_options';

	protected static $templates = array(
		'page' => array(
			'option_group'       => 'template_page',
			'displayName'        => 'Page',
			'supports' => array(
				'bylineBefore',
				'bylineAfter',
				'publishDateBefore',
				'publishDateAfter',
				'shareBefore',
				'shareAfter',
				'categories',
				'tags',
				'format',
				'widgetsBefore',
				'widgetsAfter',
				'addSidebar',
				'sidebar',
			),
		),
		'post' => array(
			'option_group'       => 'template_post',
			'displayName'        => 'Single Post',
			'format'             => 'article',
			'supports'=> array(
				'bylineBefore',
				'bylineAfter',
				'publishDateBefore',
				'publishDateAfter',
				'shareBefore',
				'shareAfter',
				'categories',
				'tags',
				'format',
				'banner',
				'widgetsBefore',
				'widgetsAfter',
				'sidebar',
			),
		),
		'post_archive' => array(
			'option_group'       => 'template_post_archive',
			'displayName'        => 'Post Archive/Blog',
			'supports'=> array(
				'bylineBefore',
				'bylineAfter',
				'publishDateBefore',
				'publishDateAfter',
				'shareBefore',
				'shareAfter',
				'categories',
				'tags',
				'format',
				'widgetsBefore',
				'widgetsAfter',
				'addSidebar',
				'sidebar',
			),
		),
		'category' => array(
			'option_group'       => 'template_category',
			'displayName'        => 'Category Archive',
			'supports'=> array(
				'bylineBefore',
				'bylineAfter',
				'publishDateBefore',
				'publishDateAfter',
				'shareBefore',
				'shareAfter',
				'categories',
				'tags',
				'format',
				'widgetsBefore',
				'widgetsAfter',
				'addSidebar',
				'sidebar',
			),
		),
		'tag' => array(
			'option_group'       => 'template_tag',
			'displayName'        => 'Tag Archive',
			'supports'=> array(
				'bylineBefore',
				'bylineAfter',
				'publishDateBefore',
				'publishDateAfter',
				'shareBefore',
				'shareAfter',
				'categories',
				'tags',
				'format',
				'widgetsBefore',
				'widgetsAfter',
				'addSidebar',
				'sidebar',
			),
		),
	);


	public static function get( $property ) {

		switch ( $property ) {

			case 'theme_options_panel':
				return self::$theme_options_panel;

			case 'template_options_panel':
				return self::$template_options_panel;

			default:
				return '';

		}

	}


	public static function init() {

		add_action( 'customize_register', array( __CLASS__, 'setup_customizer' ) );

	}


	public static function setup_customizer( $wp_customize ) {

		if ( defined( 'WDSTHEMEVERSION' ) && 2 < WDSTHEMEVERSION ) {

			$customizer_dir = Plugin::get( 'dir' ) . '/customizer/';

			require_once Plugin::get( 'dir' ) . '/classes/class-customizer-section.php';

			self::add_panels( $wp_customize );

			require_once $customizer_dir . 'customizer-section-theme-options.php';
			require_once $customizer_dir . 'customizer-section-theme-options-advanced.php';
			require_once $customizer_dir . 'customizer-section-theme-options-header.php';
			require_once $customizer_dir . 'customizer-section-social.php';
			require_once $customizer_dir . 'customizer-section-template-layout.php';


			Customizer_Section_Theme_Options::register_section( $wp_customize );
			Customizer_Section_Theme_Options_Advanced::register_section( $wp_customize );
			Customizer_Section_Theme_Options_Header::register_section( $wp_customize );
			Customizer_Section_Social::register_section( $wp_customize );

			$sidebars = Widgets::get_sidebars();

			foreach ( self::$templates as $template_slug => $template_args ) {

				$template_args['sidebars'] = array_merge( array( 'default' => 'Default', 'hide' => 'None' ), $sidebars );

				Customizer_Section_Template_Layout::register_section( $wp_customize, $template_args['option_group'], $template_args );
			}

			/*require_once $customizer_dir . 'wsu-site-options.php';

			require_once $customizer_dir . 'wds-theme-options.php';
			require_once $customizer_dir . 'wds-advanced-options.php';
			require_once $customizer_dir . 'section-social-accounts.php';
			require_once $customizer_dir . 'section-contact.php';

			require_once $customizer_dir . 'wsu-theme-settings.php';

			self::add_panels( $wp_customize );

			self::$customizers[] = new WSU_Site_Options( $wp_customize, self::$wsu_panel_id );
			self::$customizers[] = new WDS_Theme_Options( $wp_customize, self::$wds_panel_id );
			self::$customizers[] = new WDS_Advanced_Options( $wp_customize, self::$wds_panel_id );
			self::$customizers[] = new Section_Social_Accounts( $wp_customize );
			self::$customizers[] = new Section_Contact( $wp_customize );
			self::$customizers[] = new WSU_Theme_Settings( $wp_customize );*/

		}

	}


	public static function add_panels( $wp_customize ) {

		$wp_customize->add_panel(
			self::get( 'theme_options_panel' ),
			array(
				'title' => 'WSU Theme Options',
				'description' => 'Settings for WSU Web Design System Theme', // Include html tags such as <p>.
				'priority' => 160, // Mixed with top-level-section hierarchy.
			)
		);

		$wp_customize->add_panel(
			self::get( 'template_options_panel' ),
			array(
				'title' => 'WSU Template Options',
				'description' => 'Settings for WSU Web Design System Theme', // Include html tags such as <p>.
				'priority' => 160, // Mixed with top-level-section hierarchy.
			)
		);

	}

	/*public static function add_sections( $wp_customize ) {

		$wp_customize->add_panel(
			self::$wsu_panel_id,
			array(
				'title' => '(BETA) WSU Site Settings',
				'description' => 'Settings for WSU Web Design System Theme', // Include html tags such as <p>.
				'priority' => 160, // Mixed with top-level-section hierarchy.
			)
		);

		$wp_customize->add_panel(
			self::$wds_panel_id,
			array(
				'title' => '(BETA) Web Design System Options',
				'description' => 'Settings for WSU Web Design System Theme', // Include html tags such as <p>.
				'priority' => 160, // Mixed with top-level-section hierarchy.
			)
		);

	}*/

}

Customizer::init();
