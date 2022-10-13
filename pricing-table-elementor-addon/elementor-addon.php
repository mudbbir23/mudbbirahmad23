<?php
/**
 * Plugin Name: Pricing Table Addon
 * Description: Renders beautiful pricing tables on your site.
 * Version:     1.0
 * Author:      mudbbir ahmaf
 * Author URI: https://classicaddons.com
 * Text Domain: pricing-table-elementor-addon
 */

function caea_register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/pricing-table-widget.php' );

	$widgets_manager->register( new \pricing_table_widget() );

}
add_action( 'elementor/widgets/register', 'caea_register_hello_world_widget' );