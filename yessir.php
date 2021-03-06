<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              mathewborja.com
 * @since             2.0.0
 * @package           Yessir
 *
 * @wordpress-plugin
 * Plugin Name:       Test Plugin
 * Plugin URI:        mathewborja.com
 * Description:       This is a test plugin by Mathew Borja.
 * Version:           2.0.0
 * Author:            Mathew Borja
 * Author URI:        mathewborja.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       yessir
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'YESSIR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-yessir-activator.php
 */
function activate_yessir() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-yessir-activator.php';
	Yessir_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-yessir-deactivator.php
 */
function deactivate_yessir() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-yessir-deactivator.php';
	Yessir_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_yessir' );
register_deactivation_hook( __FILE__, 'deactivate_yessir' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-yessir.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_yessir() {

	$plugin = new Yessir();
	$plugin->run();

}
run_yessir();
