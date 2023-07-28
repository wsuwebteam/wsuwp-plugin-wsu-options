<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer {

	protected static $theme_options_panel = 'wsu_theme_options';
	protected static $template_options_panel = 'wsu_template_options';

	protected static $templates = array(
		'frontpage' => array(
			'option_group'       => 'template_front_page',
			'displayName'        => 'Homepage',
			'supports' => array(
				'pageTitle',
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
				'featured-image',
				'widgetsBefore',
				'widgetsAfter',
				'sidebar',
			),
		),
		'home' => array(
			'option_group'       => 'template_home',
			'displayName'        => 'Post Archive/Blog',
			'supports' => array(
				'bylineBefore',
				'bylineAfter',
				'publishDateBefore',
				'publishDateAfter',
				'shareBefore',
				'shareAfter',
				'categories',
				'featured-image',
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
		'tag' => array(
			'option_group'       => 'template_tag',
			'displayName'        => 'Tag Archive',
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
			require_once $customizer_dir . 'classes/class-wp-customize-control-toggle.php';

			self::add_panels( $wp_customize );

			require_once $customizer_dir . 'customizer-section-site-header.php';
			require_once $customizer_dir . 'customizer-section-horizontal-nav.php';
			require_once $customizer_dir . 'customizer-section-vertical-nav.php';
			require_once $customizer_dir . 'customizer-section-theme-options.php';
			require_once $customizer_dir . 'customizer-section-theme-options-advanced.php';
			require_once $customizer_dir . 'customizer-section-social.php';
			require_once $customizer_dir . 'customizer-section-contact.php';
			require_once $customizer_dir . 'customizer-section-template-layout.php';


			Customizer_Section_Theme_Options::register_section( $wp_customize );
			Customizer_Section_Site_Header::register_section( $wp_customize );
			Customizer_Section_Horizontal_Nav::register_section( $wp_customize );
			Customizer_Section_Vertical_Nav::register_section( $wp_customize );
			Customizer_Section_Theme_Options_Advanced::register_section( $wp_customize );
			Customizer_Section_Social::register_section( $wp_customize );
			Customizer_Section_Contact::register_section( $wp_customize );

			$sidebars = Widgets::get_sidebars();

			$template_options = apply_filters( 'wsu_template_options', array() );

			$post_types = get_post_types( array( 'public' => true ), 'objects' );


			$exclude_post_types = array( 'post', 'page', 'attachement' );

			foreach ( $post_types as $post_type ) {

				if ( ! in_array( $post_type->name, $exclude_post_types, true ) && ! array_key_exists( $post_type->name, $template_options ) && array_key_exists( 'post_type', $template_options ) ) {

					$template_options[ $post_type->name ] = array(
						'option_group'       => 'template_' . $post_type->name,
						'displayName'        => $post_type->label,
						'supports'           => $template_options['post_type']['supports'],
					);
				}
			}

			foreach ( $template_options as $template_slug => $template_args ) {

				if ( 'post_type' !== $template_slug ) {

					$template_args['sidebars'] = array_merge( array( 'hide' => 'None' ), $sidebars );

					Customizer_Section_Template_Layout::register_section( $wp_customize, $template_args['option_group'], $template_args );

				}
			}
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
