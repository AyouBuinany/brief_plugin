<?php


/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://wordpress.org/plugins/you_code/
 * @since             1.0.0
 * @package           You_code
 *
 * @wordpress-plugin
 * Plugin Name:       you code
 * Plugin URI:        http://wordpress.org/plugins/you_code/
 * Description:       This is my plugin.
 * Version:           1.0.0
 * Author:            you code Mullenweg
 * Author URI:        http://wordpress.org/plugins/you_code/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       you_code
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
define( 'YOU_CODE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-my_plugin-activator.php
 */
function activate_you_code() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-you_code-activator.php';
	$activator = new you_code_Activator();
	$activator->activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-my_plugin-deactivator.php
 */
function deactivate_you_code() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-you_code-deactivator.php';
	$deactivate = new you_code_Deactivator();
	$deactivate->deactivate();
}

register_activation_hook( __FILE__, 'activate_you_code' );
register_deactivation_hook( __FILE__, 'deactivate_you_code' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-you_code.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_you_code() {

	$plugin = new you_code();
	$plugin->run();

}
run_you_code();


