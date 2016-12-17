<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link
 * @since             1.0.0
 * @package           News Item
 *
 * @wordpress-plugin
 * Plugin Name:       News Item
 * Plugin URI:        
 * Description:       This plugin creates a News Item custom post type, and also creates an arhive page to display all the news items.
 * Version:           1.0.0
 * Author:            Brian Blosser
 * Author URI:        http://brianblosser.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function activate_news_item_plugin() {
}
register_activation_hook( __FILE__, 'activate_news_item_plugin' );

function deactivate_news_item_plugin() {
}
register_deactivation_hook( __FILE__, 'deactivate_news_item_plugin' );
