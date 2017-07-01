<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://zacharynelson.me
 * @since             1.0.0
 * @package           Wp_Json_Ld_Locations
 *
 * @wordpress-plugin
 * Plugin Name:       JSON-LD for Locations
 * Plugin URI:        https://github.com/ZacharyN/wp-json-ld-plugin.git
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Zachary Nelson
 * Author URI:        https://zacharynelson.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-json-ld-locations
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-json-ld-locations-activator.php
 */
function activate_wp_json_ld_locations() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-json-ld-locations-activator.php';
	Wp_Json_Ld_Locations_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-json-ld-locations-deactivator.php
 */
function deactivate_wp_json_ld_locations() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-json-ld-locations-deactivator.php';
	Wp_Json_Ld_Locations_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_json_ld_locations' );
register_deactivation_hook( __FILE__, 'deactivate_wp_json_ld_locations' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-json-ld-locations.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_json_ld_locations() {

	$plugin = new Wp_Json_Ld_Locations();
	$plugin->run();

}
run_wp_json_ld_locations();
