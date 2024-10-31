<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/vijayrathod245/
 * @since             1.0.0
 * @package           Product_Color
 *
 * @wordpress-plugin
 * Plugin Name:       Product Color
 * Plugin URI:        https://wordpress.org/plugins/product-color/
 * Description:       Product color
 * Version:           1.0.1
 * Author:            Vijay Rathod
 * Author URI:        https://profiles.wordpress.org/vijayrathod245/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       product-color
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'PCW_PLUGIN_PATH' ) ) {
    define('WPC_PLUGIN_PATH', plugin_dir_path(__FILE__)); 
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PRODUCT_COLOR_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-product-color-activator.php
 */
function activate_product_color() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-product-color-activator.php';
	Product_Color_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-product-color-deactivator.php
 */
function deactivate_product_color() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-product-color-deactivator.php';
	Product_Color_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_product_color' );
register_deactivation_hook( __FILE__, 'deactivate_product_color' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-product-color.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_product_color() {

	$plugin = new Product_Color();
	$plugin->run();

}
run_product_color();
