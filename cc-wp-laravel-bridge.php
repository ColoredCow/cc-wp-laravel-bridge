<?php
/**
 * Plugin Name: WP-Laravel Bridge
 * Description: Integrate WP with Laravel application.
 * Version:     1.0.0
 * Author:      ColoredCow
 * Author URI:  https://coloredcow.com
 * Text Domain: cc-wp-laravel-bridge
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_action( 'admin_init', 'cc_wp_laravel_bridge' );
function cc_wp_laravel_bridge() {
	add_option( 'app_base_url', '' );
	register_setting( 'cc_wp_laravel_bridge_options_group', 'app_base_url' );
	add_option( 'app_api_client_id', '' );
	register_setting( 'cc_wp_laravel_bridge_options_group', 'app_api_client_id' );
	add_option( 'app_api_client_secret', '' );
	register_setting( 'cc_wp_laravel_bridge_options_group', 'app_api_client_secret' );
}

add_action( 'admin_menu', 'cc_wp_laravel_bridge_register_options_page' );
function cc_wp_laravel_bridge_register_options_page() {
	add_options_page( 'WP-Laravel Bridge settings', 'WP-Laravel Bridge settings', 'manage_options', 'cc-wp-laravel-bridge-settings', 'cc_wp_laravel_bridge_template' );
}

function cc_wp_laravel_bridge_template() {
	require_once 'templates/settings.php';
}