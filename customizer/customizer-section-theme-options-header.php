<?php namespace WSUWP\Plugin\WSU_Options;

class Customizer_Section_Theme_Options_Header extends Customizer_Section {
	protected static $section_id    = 'wsu_theme_options_header';
	protected static $section_title = 'Header Options';
	protected static $permissions   = 'manage_options';
	protected static $panel_id      = 'wsu_theme_options';
	protected static $description   = '';
	protected static $priority      = 20;

	protected static function add_controls( $wp_customize ) {

	}

}

