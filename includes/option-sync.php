<?php namespace WSUWP\Plugin\WSU_Options;


class Option_Sync {

	protected static $version = '0.0.1';

	public static function init() {

		add_action( 'admin_init', array( __CLASS__, 'sync_options' ) );

	}

	public static function sync_options() {

		$option_version = get_option( 'wsuwp_options_version', '' );

		if ( self::$version === $option_version ) {

			return true;

		}

		$wsu_options = get_option( 'wsuwp', array() );

		if ( ! empty( $wsu_options ) ) {

			update_option( 'wsuwp_archive', $wsu_options, false );

		}

		$theme_mod_map = array(
			array(
				'old' => 'wsu_wds_global_header_give_link',
				'new' => array( 'group' => 'site_options', 'key' => 'giveLink' ),
			),
			array(
				'old' => 'wsu_wds_global_header_apply_link',
				'new' => array( 'group' => 'site_options', 'key' => 'applyLink' ),
			),
			array(
				'old' => 'wsu_wds_site_header_subtitle_hide',
				'new' => array( 'group' => 'theme', 'key' => 'displaySubtitle', 'bool' => true, 'value' => 'hide' ),
			),
		);

		$wds_map = array(
			array(
				'old' => array( 'group' => 'contact', 'key' => 'name' ),
				'new' => array( 'group' => 'contact', 'key' => 'organization' ),
			),
			array(
				'old' => array( 'group' => 'contact', 'key' => 'address1' ),
				'new' => array( 'group' => 'contact', 'key' => 'address' ),
			),
			array(
				'old' => array( 'group' => 'contact', 'key' => 'city' ),
				'new' => array( 'group' => 'contact', 'key' => 'city' ),
			),
			array(
				'old' => array( 'group' => 'contact', 'key' => 'state' ),
				'new' => array( 'group' => 'contact', 'key' => 'state' ),
			),
			array(
				'old' => array( 'group' => 'contact', 'key' => 'zip' ),
				'new' => array( 'group' => 'contact', 'key' => 'zip' ),
			),
			array(
				'old' => array( 'group' => 'contact', 'key' => 'phone' ),
				'new' => array( 'group' => 'contact', 'key' => 'phone' ),
			),
			array(
				'old' => array( 'group' => 'contact', 'key' => 'email' ),
				'new' => array( 'group' => 'contact', 'key' => 'email' ),
			),
			array(
				'old' => array( 'group' => 'social', 'key' => 'twitter' ),
				'new' => array( 'group' => 'social_accounts', 'key' => 'twitter' ),
			),
			array(
				'old' => array( 'group' => 'social', 'key' => 'facebook' ),
				'new' => array( 'group' => 'social_accounts', 'key' => 'facebook' ),
			),
			array(
				'old' => array( 'group' => 'social', 'key' => 'youtube' ),
				'new' => array( 'group' => 'social_accounts', 'key' => 'youtube' ),
			),
			array(
				'old' => array( 'group' => 'social', 'key' => 'instagram' ),
				'new' => array( 'group' => 'social_accounts', 'key' => 'instagram' ),
			),
			array(
				'old' => array( 'group' => 'social', 'key' => 'linkedin' ),
				'new' => array( 'group' => 'social_accounts', 'key' => 'linkedin' ),
			),
			array(
				'old' => array( 'group' => 'scripts', 'key' => 'syndicate' ),
				'new' => array( 'group' => 'scripts', 'key' => 'syndicate' ),
			),
			array(
				'old' => array( 'group' => 'scripts', 'key' => 'jquery' ),
				'new' => array( 'group' => 'scripts', 'key' => 'jquery' ),
			),
		);

		update_option( 'wsuwp_options_version', self::$version, false );

		foreach ( $wds_map as $option_set ) {

			if ( ! empty( $option_set['new']['overwrite'] ) || ! WSU_Options::has_wsu_option( $option_set['new']['group'], $option_set['new']['key'] ) ) {

				if ( WSU_Options::has_wsu_option( $option_set['old']['group'], $option_set['old']['key'], $option_base = 'wsu_wds' ) ) {

					$legacy_value = WSU_Options::get_wsu_option( $option_set['old']['group'], $option_set['old']['key'], '', $option_base = 'wsu_wds' );

					WSU_Options::update_wsu_option( $option_set['new']['group'], $option_set['new']['key'], $legacy_value  );

				}
			}
		}

		foreach ( $theme_mod_map as $theme_mod_set ) {

			if ( 'notSet' !== get_theme_mod( $theme_mod_set['old'], 'notSet' ) ) {

				if ( ! empty( $theme_mod_sett['new']['overwrite'] ) || ! WSU_Options::has_wsu_option( $theme_mod_sett['new']['group'], $theme_mod_set['new']['key'] ) ) {

					$legacy_value = get_theme_mod( $theme_mod_set['old'], '' );

					WSU_Options::update_wsu_option( $theme_mod_set['new']['group'], $theme_mod_set['new']['key'], $legacy_value  );

				}
			}
		}
	}

}

Option_Sync::init();
