<?php
/*
 * Plugin Name: PD helper
 * Version: 1.0
 * Plugin URI: https://carl.alber2.com/
 * Description: This is a helper plugin that load the Podio PHP plugin that help you in doing customizations in Podio. This needs to be installed and activated for other Podio plugin tasks to work.
 * Author: Carl Alberto
 * Author URI: https://carl.alber2.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: pd-helper
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Carl Alberto
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-pd-helper.php' );
require_once( 'includes/class-pd-helper-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-pd-helper-admin-api.php' );

/**
 * Returns the main instance of PD_helper to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object PD_helper
 */
function PD_helper () {
	$instance = PD_helper::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = PD_helper_Settings::instance( $instance );
	}

	return $instance;
}

PD_helper();
