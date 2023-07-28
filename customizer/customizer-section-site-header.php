<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Site_Header extends Customizer_Section {
	protected static $section_id    = 'wsu_site_header';
	protected static $section_title = 'Site Header';
	protected static $permissions   = 'manage_options';
	protected static $panel_id      = 'wsu_theme_options';
	protected static $description   = '';
	protected static $priority      = 10;

	protected static function add_controls( $wp_customize ) {

		$wsu_theme_options = apply_filters( 'wsu_theme_options', array() );

		$site_header_options = ( ! empty( $wsu_theme_options['site_header'] ) ) ? $wsu_theme_options['site_header'] : array();

		if ( array_key_exists( 'siteHeader', $site_header_options ) ) {

			$site_header_types = ( Plugin::get_wsu_option( 'theme', 'allowRestricedOptions', false ) && ! empty( $site_header_options['siteHeader']['restrictedOptions'] ) ) ? $site_header_options['siteHeader']['restrictedOptions'] : $site_header_options['siteHeader']['options'];
	
			$wp_customize->add_setting(
				static::get_option_id( 'theme', 'siteHeader' ),
				array(
					'capability' => 'manage_options',
					'default'    => ( ! empty( $site_header_options['siteHeader']['default'] ) ) ? $site_header_options['siteHeader']['default'] : '',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( 'theme', 'siteHeader' ),
				array(
					'settings'    => static::get_option_id( 'theme', 'siteHeader' ),
					'type'        => 'select',
					'section'     => self::$section_id,
					'label'       => __( 'Site Header' ),
					'description' => __( 'Campus and System options may only be used for campus and system sites. Colleges, units, and departments should use the unit header.' ),
					'choices'     => $site_header_types,
				)
			);
		}

		if ( array_key_exists( 'mobileMenu', $site_header_options ) ) {

			$wp_customize->add_setting(
				static::get_option_id( 'theme', 'mobileMenu' ),
				array(
					'capability' => 'manage_options',
					'default'    => ( ! empty( $site_header_options['mobileMenu']['default'] ) ) ? $site_header_options['mobileMenu']['default'] : '',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( 'theme', 'mobileMenu' ),
					array(
						'settings'    => static::get_option_id( 'theme', 'mobileMenu' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Mobile Menu',
						'description' => '',
						'choices'     => ( ! empty( $site_header_options['mobileMenu']['options'] ) ) ? $site_header_options['mobileMenu']['options'] : array(),
					)
				)
			);

		}

		if ( array_key_exists( 'colorScheme', $site_header_options ) ) {

			$wp_customize->add_setting(
				static::get_option_id( 'site_header', 'colorScheme' ),
				array(
					'capability' => 'manage_options',
					'default'    => ( ! empty( $site_header_options['colorScheme']['default'] ) ) ? $site_header_options['colorScheme']['default'] : '',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( 'site_header', 'colorScheme' ),
					array(
						'settings'    => static::get_option_id( 'site_header', 'colorScheme' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Dark Mode',
						'description' => '',
						'choices'     => ( ! empty( $site_header_options['colorScheme']['options'] ) ) ? $site_header_options['colorScheme']['options'] : array(),
					)
				)
			);

		}


		if ( array_key_exists( 'displayQuicklinks', $site_header_options ) ) {

			$wp_customize->add_setting(
				static::get_option_id( 'theme', 'displayQuicklinks' ),
				array(
					'capability' => 'manage_options',
					'default'    => ( ! empty( $site_header_options['displayQuicklinks']['default'] ) ) ? $site_header_options['displayQuicklinks']['default'] : '',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( 'theme', 'displayQuicklinks' ),
					array(
						'settings'    => static::get_option_id( 'theme', 'displayQuicklinks' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Search/Quicklinks',
						'description' => '',
						'choices'     => ( ! empty( $site_header_options['displayQuicklinks']['options'] ) ) ? $site_header_options['displayQuicklinks']['options'] : array(),
					)
				)
			);

		}

		if ( array_key_exists( 'searchOptions', $site_header_options ) ) {

			$wp_customize->add_setting(
				static::get_option_id( 'search', 'showOptions' ),
				array(
					'capability' => 'manage_options',
					'default'    => ( ! empty( $site_header_options['searchOptions']['default'] ) ) ? $site_header_options['searchOptions']['default'] : '',
					'type'       => 'option',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( 'search', 'showOptions' ),
					array(
						'settings'    => static::get_option_id( 'search', 'showOptions' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Search Toggle Options',
						'description' => '',
						'choices'     => ( ! empty( $site_header_options['searchOptions']['options'] ) ) ? $site_header_options['searchOptions']['options'] : array(),
					)
				)
			);

		}

		if ( array_key_exists( 'searchContext', $site_header_options ) ) {

			$wp_customize->add_setting(
				static::get_option_id( 'search', 'context' ),
				array(
					'capability' => 'manage_options',
					'default'    => ( ! empty( $site_header_options['searchContext']['default'] ) ) ? $site_header_options['searchContext']['default'] : '',
					'type'       => 'option',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( 'search', 'context' ),
					array(
						'settings'    => static::get_option_id( 'search', 'context' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Search Context',
						'description' => '',
						'choices'     => ( ! empty( $site_header_options['searchContext']['options'] ) ) ? $site_header_options['searchContext']['options'] : array(),
					)
				)
			);
		};

		if ( array_key_exists( 'primaryActionText', $site_header_options ) ) {

			$wp_customize->add_setting(
				static::get_option_id( 'site_options', 'primaryActionText' ),
				array(
					'capability' => 'manage_options',
					'default'    => ( ! empty( $site_header_options['primaryActionText']['default'] ) ) ? $site_header_options['primaryActionText']['default'] : '',
					'type'       => 'option',
				)
			);

			$wp_customize->add_control( 
				static::get_option_slug( 'site_options', 'primaryActionText' ),
				array(
					'label'    => 'Quicklinks CTA Text',
					'section'  => static::$section_id,
					'settings' => static::get_option_id( 'site_options', 'primaryActionText' ),
					'type'     => 'text',
				)
			);
		}

		if ( array_key_exists( 'primaryActionLink', $site_header_options ) ) {

			$wp_customize->add_setting(
				static::get_option_id( 'site_options', 'primaryActionLink' ),
				array(
					'capability' => 'manage_options',
					'default'    => ( ! empty( $site_header_options['primaryActionText']['default'] ) ) ? $site_header_options['primaryActionText']['default'] : '',
					'type'       => 'option',
				)
			);

			$wp_customize->add_control( 
				static::get_option_slug( 'site_options', 'primaryActionLink' ),
				array(
					'label'    => 'Quicklinks CTA Link',
					'section'  => static::$section_id,
					'settings' => static::get_option_id( 'site_options', 'primaryActionLink' ),
					'type'     => 'text',
				)
			);
		};
	}

}

