<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Template_Layout extends Customizer_Section {
	protected static $priority      = 170;
	protected static $permissions   = 'manage_options';
	protected static $description   = '';
	protected static $panel_id      = 'wsu_template_options';


	protected static function add_controls( $wp_customize, $section_args ) {

		if ( in_array( 'sidebar', $section_args['supports']) ) {

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

		if ( in_array( 'publishDateBefore', $section_args['supports']) ) {

			$wp_customize->add_setting(
				static::get_option_id( $section_args['option_group'], 'displayPublishDateBefore' ),
				array(
					'capability' => 'manage_options',
					'default'    => 'default',
					'type'       => 'option',
				)
			);
	
			$wp_customize->add_control(
				static::get_option_slug( $section_args['option_group'], 'displayPublishDateBefore' ),
				array(
					'settings'    => static::get_option_id( $section_args['option_group'], 'displayPublishDateBefore' ),
					'type'        => 'select',
					'section'     => static::$section_id,
					'label'       => 'Display Publish Date Before Content',
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

		}

	}

}