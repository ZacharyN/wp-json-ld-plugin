<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://zacharynelson.me
 * @since      1.0.0
 *
 * @package    Wp_Json_Ld_Locations
 * @subpackage Wp_Json_Ld_Locations/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Json_Ld_Locations
 * @subpackage Wp_Json_Ld_Locations/includes
 * @author     Zachary Nelson <hello@zacharynelson.me>
 */
class Wp_Json_Ld_Locations_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-json-ld-locations',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
