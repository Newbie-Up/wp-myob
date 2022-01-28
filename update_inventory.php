<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              null
 * @since             1.0.0
 * @package           Update_inventory
 *
 * @wordpress-plugin
 * Plugin Name:       Update Inventory
 * Plugin URI:        null
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Eric Cao
 * Author URI:        null
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       update_inventory
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
define( 'UPDATE_INVENTORY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-update_inventory-activator.php
 */
function activate_update_inventory() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-update_inventory-activator.php';
	Update_inventory_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-update_inventory-deactivator.php
 */
function deactivate_update_inventory() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-update_inventory-deactivator.php';
	Update_inventory_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_update_inventory' );
register_deactivation_hook( __FILE__, 'deactivate_update_inventory' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-update_inventory.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_update_inventory() {

	$plugin = new Update_inventory();
	$plugin->run();

}
run_update_inventory();
