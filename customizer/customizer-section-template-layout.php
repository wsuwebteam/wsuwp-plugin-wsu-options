<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Template_Layout extends Customizer_Section {
	protected static $priority      = 170;
	protected static $permissions   = 'manage_options';
	protected static $description   = '';
	protected static $panel_id      = 'wsu_template_options';


	protected static function add_controls( $wp_customize, $template_options ) {

		if ( empty( $template_options['supports'] ) ) {

			return false;

		}

		if ( array_key_exists( 'sidebar', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'sidebar' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['sidebar'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $template_options['option_group'], 'sidebar' ),
				array(
					'settings'    => static::get_option_id( $template_options['option_group'], 'sidebar' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Sidebar',
					'description' => '',
					'choices'     => $template_options['sidebars'],
				)
			);

		}

		if ( array_key_exists( 'addSidebar', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'addSidebar' ),
				array(
					'capability' => 'manage_options',
					'default'    => false,
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $template_options['option_group'], 'addSidebar' ),
				array(
					'settings'    => static::get_option_id( $template_options['option_group'], 'addSidebar' ),
					'type'        => 'checkbox',
					'section'     => static::$section_id,
					'label'       => 'Add Custom Sidebar',
					'description' => '(Additional/custom sidebars will not show up in other customizer options until changes are published)',
				)
			);

		}

		if ( array_key_exists( 'displayPageTitle', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayPageTitle' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayPageTitle'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayPageTitle' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayPageTitle' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Page Title',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayBreadcrumbs', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayBreadcrumbs' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayBreadcrumbs'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayBreadcrumbs' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayBreadcrumbs' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Breadcrumbs',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayPublishDateBefore', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayPublishDateBefore' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayPublishDateBefore'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayPublishDateBefore' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayPublishDateBefore' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Publish Date Before Content',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayBylineBefore', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayBylineBefore' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayBylineBefore'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayBylineBefore' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayBylineBefore' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Byline Before Content',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayShareBefore', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayShareBefore' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayShareBefore'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayShareBefore' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayShareBefore' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Share Icons Before Content',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayFeaturedImage', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayFeaturedImage' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayFeaturedImage'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayFeaturedImage' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayFeaturedImage' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Featured Image Banner',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayPublishDateAfter', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayPublishDateAfter' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayPublishDateAfter'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayPublishDateAfter' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayPublishDateAfter' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Publish Date After Content',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayBylineAfter', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayBylineAfter' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayBylineAfter'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayBylineAfter' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayBylineAfter' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Byline After Content',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayShareAfter', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayShareAfter' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayShareAfter'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayShareAfter' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayShareAfter' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Share Icons After Content',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayCategories', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayCategories' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayCategories'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayCategories' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayCategories' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Categories',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'displayTags', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'displayTags' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['displayTags'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'displayTags' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'displayTags' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Tags',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'widgetsBefore', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'widgetsBefore' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['widgetsBefore'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'widgetsBefore' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'widgetsBefore' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Widgets Area Before Content',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}

		if ( array_key_exists( 'widgetsAfter', $template_options['supports'] ) ) {

			$wp_customize->add_setting(
				static::get_option_id( $template_options['option_group'], 'widgetsAfter' ),
				array(
					'capability' => 'manage_options',
					'default'    => $template_options['supports']['widgetsAfter'],
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				new WP_Customize_Control_WSU_Toggle(
					$wp_customize,
					static::get_option_slug( $template_options['option_group'], 'widgetsAfter' ),
					array(
						'settings'    => static::get_option_id( $template_options['option_group'], 'widgetsAfter' ),
						'type'        => 'wsutoggle',
						'section'     => static::$section_id,
						'label'       => 'Widgets Area After Content',
						'description' => '',
						'choices'     => array(
							'show' => 'On',
							'hide' => 'Off',
						),
					)
				)
			);

		}


		/*if ( in_array( 'sidebar', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'sidebar' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'sidebar' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'sidebar' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Sidebar',
					'description' => '',
					'choices'     => $section_args['sidebars'],
				)
			);

		}

		if ( in_array( 'addSidebar', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'addSidebar' ),
				array(
					'capability' => 'manage_options',
					'default'    => false,
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'addSidebar' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'addSidebar' ),
					'type'        => 'checkbox',
					'section'     => static::$section_id,
					'label'       => 'Add Custom Sidebar',
					'description' => '(Additional/custom sidebars will not show up in other customizer options until changes are published)',
				)
			);

		}

		if ( in_array( 'pageTitle', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayPageTitle' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayPageTitle' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayPageTitle' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Page Title',
					'description' => '',
					'choices'     => array(
						'default' => 'Default',
						'show'    => 'Show',
						'hidden'  => 'Hidden',
						'hide'    => 'Remove',
					),
				)
			);

		}

		if ( in_array( 'bylineBefore', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayBylineBefore' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayBylineBefore' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayBylineBefore' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Author/Byline Before Content',
					'description' => '',
					'choices'     => array(
						'default' => 'Default',
						'show'    => 'Show',
						'hide'    => 'Hide',
					),
				)
			);

		}

		if ( in_array( 'shareBefore', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayShareBefore' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayShareBefore' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayShareBefore' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Share Icons Before Content',
					'description' => '',
					'choices'     => array(
						'default' => 'Default',
						'show'    => 'Show',
						'hide'    => 'Hide',
					),
				)
			);

		}

		if ( in_array( 'featured-image', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayFeaturedImage' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayFeaturedImage' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayFeaturedImage' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Feature Image',
					'description' => '',
					'choices'     => array(
						'default' => 'Default',
						'show'    => 'Show',
						'hide'    => 'Hide',
					),
				)
			);

		}

		if ( in_array( 'bylineAfter', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayBylineAfter' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayBylineAfter' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayBylineAfter' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Author/Byline After Content',
					'description' => '',
					'choices'     => array(
						'default' => 'Default',
						'show'    => 'Show',
						'hide'    => 'Hide',
					),
				)
			);

		}

		

		if ( in_array( 'publishDateAfter', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayPublishDateAfter' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayPublishDateAfter' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayPublishDateAfter' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Publish Date After Content',
					'description' => '',
					'choices'     => array(
						'default' => 'Default',
						'show'    => 'Show',
						'hide'    => 'Hide',
					),
				)
			);

		}

		

		if ( in_array( 'shareAfter', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayShareAfter' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayShareAfter' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayShareAfter' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Share Icons After Content',
					'description' => '',
					'choices'     => array(
						'default' => 'Default',
						'show'    => 'Show',
						'hide'    => 'Hide',
					),
				)
			);

		}

		if ( in_array( 'categories', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayCategories' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayCategories' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayCategories' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Categories',
					'description' => '',
					'choices'     => array(
						'default' => 'Default',
						'show'    => 'Show',
						'hide'    => 'Hide',
					),
				)
			);

		}

		if ( in_array( 'tags', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayTags' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayTags' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayTags' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Tags',
					'description' => '',
					'choices'     => array(
						'default' => 'Default',
						'show'    => 'Show',
						'hide'    => 'Hide',
					),
				)
			);

		}

		if ( in_array( 'widgetsBefore', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'widgetsBefore' ),
				array(
					'capability' => 'manage_options',
					'default'    => false,
					'type'       => 'option',
				)
			);

	
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'widgetsBefore' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'widgetsBefore' ),
					'type'        => 'checkbox',
					'section'     => static::$section_id,
					'label'       => 'Display Widget Area Before Content',
					'description' => '',
				)
			);

		}

		if ( in_array( 'widgetsAfter', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'widgetsAfter' ),
				array(
					'capability' => 'manage_options',
					'default'    => false,
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'widgetsAfter' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'widgetsAfter' ),
					'type'        => 'checkbox',
					'section'     => static::$section_id,
					'label'       => 'Display Widget Area After Content',
					'description' => '',
				)
			);

		}*/

	}

}