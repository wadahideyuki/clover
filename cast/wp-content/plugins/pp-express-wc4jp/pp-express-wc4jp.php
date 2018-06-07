<?php
/**
 * Plugin Name: PayPal Express Checkout WC4JP
 * Plugin URI: https://ja.wordpress.org/plugins/pp-express-wc4jp/
 * Description: A payment gateway for PayPal Express Checkout (https://www.paypal.com/us/webapps/mpp/express-checkout).
 * Version: 1.5.2
 * Author: ArtisanWorkshop
 * Core Author: WooCommerce
 * Author URI: https://wc.artws.info
 * Copyright: © 2018 WooCommerce / PayPal.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: pp-express-wc4jp
 * Domain Path: /languages
 * WC tested up to: 3.3
 * WC requires at least: 2.6
 */
/**
 * Copyright (c) 2017 PayPal, Inc.
 *
 * The name of the PayPal may not be used to endorse or promote products derived from this
 * software without specific prior written permission. THIS SOFTWARE IS PROVIDED ``AS IS'' AND
 * WITHOUT ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, WITHOUT LIMITATION, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

define( 'WC_GATEWAY_PPEC_WC4JP_VERSION', '1.5.2' );

/**
 * Return instance of WC_Gateway_PPEC_Plugin.
 *
 * @return WC_Gateway_PPEC_Plugin
 */
function wc_gateway_ppec() {
	static $plugin;

	if ( ! isset( $plugin ) ) {
		require_once( 'includes/class-wc-gateway-ppec-plugin.php' );

		$plugin = new WC_Gateway_PPEC_Plugin( __FILE__, WC_GATEWAY_PPEC_WC4JP_VERSION );
	}

	return $plugin;
}

wc_gateway_ppec()->maybe_run();
