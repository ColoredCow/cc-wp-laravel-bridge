<?php
/**
 * Plugin Name: WP Laravel Bridge
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
   add_option( 'cc_app_url', '' );
   register_setting( 'cc_wp_laravel_bridge_options_group', 'cc_app_url' );
   add_option( 'cc_client_id_key', '' );
   register_setting( 'cc_wp_laravel_bridge_options_group', 'cc_client_id_key' );
   add_option( 'cc_client_secret_key', '' );
   register_setting( 'cc_wp_laravel_bridge_options_group', 'cc_client_secret_key' );
}

add_action('admin_menu', 'cc_wp_laravel_bridge_register_options_page');
function cc_wp_laravel_bridge_register_options_page() {
  add_options_page('WP laravel bridge settings', 'WP laravel bridge settings', 'manage_options', 'cc-wp-laravel-bridge-settings', 'cc_wp_laravel_bridge_template');
}

function cc_wp_laravel_bridge_template() {
	require_once 'templates/settings.php';
}