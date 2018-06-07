<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$api_username         = $this->get_option( 'api_username' );
$sandbox_api_username = $this->get_option( 'sandbox_api_username' );

$needs_creds         = empty( $api_username );
$needs_sandbox_creds = empty( $sandbox_api_username );
$enable_ips          = wc_gateway_ppec()->ips->is_supported();

if ( $enable_ips && $needs_creds ) {
	$ips_button         = '<a href="' . esc_url( wc_gateway_ppec()->ips->get_signup_url( 'live' ) ) . '" class="button button-primary">' . __( 'Setup or link an existing PayPal account', 'pp-express-wc4jp' ) . '</a>';
	$api_creds_text = sprintf( __( '%s or <a href="#" class="ppec-toggle-settings">click here to toggle manual API credential input</a>.', 'pp-express-wc4jp' ), $ips_button );
} else {
	$reset_link = add_query_arg(
		array(
			'reset_ppec_api_credentials' => 'true',
			'environment'                => 'live',
			'reset_nonce'                => wp_create_nonce( 'reset_ppec_api_credentials' ),
		),
		wc_gateway_ppec()->get_admin_setting_link()
	);

	$api_creds_text = sprintf( __( 'To reset current credentials and use other account <a href="%1$s" title="%2$s">click here</a>.', 'pp-express-wc4jp' ), $reset_link, __( 'Reset current credentials', 'pp-express-wc4jp' ) );
}

if ( $enable_ips && $needs_sandbox_creds ) {
	$sandbox_ips_button = '<a href="' . esc_url( wc_gateway_ppec()->ips->get_signup_url( 'sandbox' ) ) . '" class="button button-primary">' . __( 'Setup or link an existing PayPal Sandbox account', 'pp-express-wc4jp' ) . '</a>';
	$sandbox_api_creds_text = sprintf( __( '%s or <a href="#" class="ppec-toggle-sandbox-settings">click here to toggle manual API credential input</a>.', 'pp-express-wc4jp' ), $sandbox_ips_button );
} else {
	$reset_link = add_query_arg(
		array(
			'reset_ppec_api_credentials' => 'true',
			'environment'                => 'sandbox',
			'reset_nonce'                => wp_create_nonce( 'reset_ppec_api_credentials' ),
		),
		wc_gateway_ppec()->get_admin_setting_link()
	);

	$sandbox_api_creds_text = sprintf( __( 'Your account setting is set to sandbox, no real charging takes place. To accept live payments, switch your environment to live and connect your PayPal account. To reset current credentials and use other sandbox account <a href="%1$s" title="%2$s">click here</a>.', 'pp-express-wc4jp' ), $reset_link, __( 'Reset current sandbox credentials', 'pp-express-wc4jp' ) );
}

$credit_enabled_label = __( 'Enable PayPal Credit', 'pp-express-wc4jp' );
if ( ! wc_gateway_ppec_is_credit_supported() ) {
	$credit_enabled_label .= '<p><em>' . __( 'This option is disabled. Currently PayPal Credit only available for U.S. merchants.', 'pp-express-wc4jp' ) . '</em></p>';
}

wc_enqueue_js( "
	jQuery( function( $ ) {
		var ppec_mark_fields      = '#woocommerce_ppec_paypal_title, #woocommerce_ppec_paypal_description';
		var ppec_live_fields      = '#woocommerce_ppec_paypal_api_username, #woocommerce_ppec_paypal_api_password, #woocommerce_ppec_paypal_api_signature, #woocommerce_ppec_paypal_api_certificate, #woocommerce_ppec_paypal_api_subject';
		var ppec_sandbox_fields   = '#woocommerce_ppec_paypal_sandbox_api_username, #woocommerce_ppec_paypal_sandbox_api_password, #woocommerce_ppec_paypal_sandbox_api_signature, #woocommerce_ppec_paypal_sandbox_api_certificate, #woocommerce_ppec_paypal_sandbox_api_subject';

		var enable_toggle         = $( 'a.ppec-toggle-settings' ).length > 0;
		var enable_sandbox_toggle = $( 'a.ppec-toggle-sandbox-settings' ).length > 0;

		$( '#woocommerce_ppec_paypal_environment' ).change(function(){
			$( ppec_sandbox_fields + ',' + ppec_live_fields ).closest( 'tr' ).hide();

			if ( 'live' === $( this ).val() ) {
				$( '#woocommerce_ppec_paypal_api_credentials, #woocommerce_ppec_paypal_api_credentials + p' ).show();
				$( '#woocommerce_ppec_paypal_sandbox_api_credentials, #woocommerce_ppec_paypal_sandbox_api_credentials + p' ).hide();

				if ( ! enable_toggle ) {
					$( ppec_live_fields ).closest( 'tr' ).show();
				}
			} else {
				$( '#woocommerce_ppec_paypal_api_credentials, #woocommerce_ppec_paypal_api_credentials + p' ).hide();
				$( '#woocommerce_ppec_paypal_sandbox_api_credentials, #woocommerce_ppec_paypal_sandbox_api_credentials + p' ).show();

				if ( ! enable_sandbox_toggle ) {
					$( ppec_sandbox_fields ).closest( 'tr' ).show();
				}
			}
		}).change();

		$( '#woocommerce_ppec_paypal_enabled' ).change(function(){
			if ( $( this ).is( ':checked' ) ) {
				$( ppec_mark_fields ).closest( 'tr' ).show();
			} else {
				$( ppec_mark_fields ).closest( 'tr' ).hide();
			}
		}).change();

		$( '#woocommerce_ppec_paypal_paymentaction' ).change(function(){
			if ( 'sale' === $( this ).val() ) {
				$( '#woocommerce_ppec_paypal_instant_payments' ).closest( 'tr' ).show();
			} else {
				$( '#woocommerce_ppec_paypal_instant_payments' ).closest( 'tr' ).hide();
			}
		}).change();

		if ( enable_toggle ) {
			$( document ).on( 'click', '.ppec-toggle-settings', function( e ) {
				$( ppec_live_fields ).closest( 'tr' ).toggle( 'fast' );
				e.preventDefault();
			} );
		}
		if ( enable_sandbox_toggle ) {
			$( document ).on( 'click', '.ppec-toggle-sandbox-settings', function( e ) {
				$( ppec_sandbox_fields ).closest( 'tr' ).toggle( 'fast' );
				e.preventDefault();
			} );
		}
	});
" );

/**
 * Settings for PayPal Gateway.
 */
return apply_filters( 'woocommerce_paypal_express_checkout_settings', array(
	'enabled' => array(
		'title'   => __( 'Enable/Disable', 'pp-express-wc4jp' ),
		'type'    => 'checkbox',
		'label'   => __( 'Enable PayPal Express Checkout', 'pp-express-wc4jp' ),
		'description' => __( 'This enables PayPal Express Checkout which allows customers to checkout directly via PayPal from your cart page.', 'pp-express-wc4jp' ),
		'desc_tip'    => true,
		'default'     => 'yes',
	),

	'title' => array(
		'title'       => __( 'Title', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'This controls the title which the user sees during checkout.', 'pp-express-wc4jp' ),
		'default'     => __( 'PayPal Express Checkout', 'pp-express-wc4jp' ),
		'desc_tip'    => true,
	),
	'description' => array(
		'title'       => __( 'Description', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'This controls the description which the user sees during checkout.', 'pp-express-wc4jp' ),
		'default'     => __( 'Pay via PayPal; you can pay with your credit card if you don\'t have a PayPal account.', 'pp-express-wc4jp' ),
	),

	'account_settings' => array(
		'title'       => __( 'Account Settings', 'pp-express-wc4jp' ),
		'type'        => 'title',
		'description' => '',
	),
	'environment' => array(
		'title'       => __( 'Environment', 'pp-express-wc4jp' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select',
		'description' => __( 'This setting specifies whether you will process live transactions, or whether you will process simulated transactions using the PayPal Sandbox.', 'pp-express-wc4jp' ),
		'default'     => 'live',
		'desc_tip'    => true,
		'options'     => array(
			'live'    => __( 'Live', 'pp-express-wc4jp' ),
			'sandbox' => __( 'Sandbox', 'pp-express-wc4jp' ),
		),
	),

	'api_credentials' => array(
		'title'       => __( 'API Credentials', 'pp-express-wc4jp' ),
		'type'        => 'title',
		'description' => $api_creds_text,
	),
	'api_username' => array(
		'title'       => __( 'Live API Username', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'Get your API credentials from PayPal.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
	),
	'api_password' => array(
		'title'       => __( 'Live API Password', 'pp-express-wc4jp' ),
		'type'        => 'password',
		'description' => __( 'Get your API credentials from PayPal.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
	),
	'api_signature' => array(
		'title'       => __( 'Live API Signature', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'Get your API credentials from PayPal.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => __( 'Optional if you provide a certificate below', 'pp-express-wc4jp' ),
	),
	'api_certificate' => array(
		'title'       => __( 'Live API Certificate', 'pp-express-wc4jp' ),
		'type'        => 'file',
		'description' => $this->get_certificate_info( $this->get_option( 'api_certificate' ) ),
		'default'     => '',
	),
	'api_subject' => array(
		'title'       => __( 'Live API Subject', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'If you\'re processing transactions on behalf of someone else\'s PayPal account, enter their email address or Secure Merchant Account ID (also known as a Payer ID) here. Generally, you must have API permissions in place with the other account in order to process anything other than "sale" transactions for them.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => __( 'Optional', 'pp-express-wc4jp' ),
	),

	'sandbox_api_credentials' => array(
		'title'       => __( 'Sandbox API Credentials', 'pp-express-wc4jp' ),
		'type'        => 'title',
		'description' => $sandbox_api_creds_text,
	),
	'sandbox_api_username' => array(
		'title'       => __( 'Sandbox API Username', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'Get your API credentials from PayPal.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
	),
	'sandbox_api_password' => array(
		'title'       => __( 'Sandbox API Password', 'pp-express-wc4jp' ),
		'type'        => 'password',
		'description' => __( 'Get your API credentials from PayPal.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
	),
	'sandbox_api_signature' => array(
		'title'       => __( 'Sandbox API Signature', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'Get your API credentials from PayPal.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
	),
	'sandbox_api_certificate' => array(
		'title'       => __( 'Sandbox API Certificate', 'pp-express-wc4jp' ),
		'type'        => 'file',
		'description' => __( 'Get your API credentials from PayPal.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
	),
	'sandbox_api_subject' => array(
		'title'       => __( 'Sandbox API Subject', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'If you\'re processing transactions on behalf of someone else\'s PayPal account, enter their email address or Secure Merchant Account ID (also known as a Payer ID) here. Generally, you must have API permissions in place with the other account in order to process anything other than "sale" transactions for them.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => __( 'Optional', 'pp-express-wc4jp' ),
	),

	'display_settings' => array(
		'title'       => __( 'Display Settings', 'pp-express-wc4jp' ),
		'type'        => 'title',
		'description' => __( 'Customize the appearance of Express Checkout in your store.', 'pp-express-wc4jp' ),
	),
	'brand_name' => array(
		'title'       => __( 'Brand Name', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'A label that overrides the business name in the PayPal account on the PayPal hosted checkout pages.', 'pp-express-wc4jp' ),
		'default'     => get_bloginfo( 'name', 'display' ),
		'desc_tip'    => true,
	),
	'button_size' => array(
		'title'       => __( 'Button Size', 'pp-express-wc4jp' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select',
		'description' => __( 'PayPal offers different sizes of the "PayPal Checkout" buttons, allowing you to select a size that best fits your site\'s theme. This setting will allow you to choose which size button(s) appear on your cart page.', 'pp-express-wc4jp' ),
		'default'     => 'large',
		'desc_tip'    => true,
		'options'     => array(
			'small'  => __( 'Small', 'pp-express-wc4jp' ),
			'medium' => __( 'Medium', 'pp-express-wc4jp' ),
			'large'  => __( 'Large', 'pp-express-wc4jp' ),
		),
	),
	'cart_checkout_enabled' => array(
		'title'       => __( 'Checkout on cart page', 'pp-express-wc4jp' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable PayPal checkout on the cart page', 'pp-express-wc4jp' ),
		'description' => __( 'This shows or hides the PayPal checkout button on the cart page.', 'pp-express-wc4jp' ),
		'desc_tip'    => true,
		'default'     => 'yes',
	),
	'mark_enabled' => array(
		'title'       => __( 'PayPal Mark', 'pp-express-wc4jp' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable the PayPal Mark on regular checkout', 'pp-express-wc4jp' ),
		'description' => __( 'This enables the PayPal mark, which can be shown on regular WooCommerce checkout to use PayPal Express Checkout like a regular WooCommerce gateway.', 'pp-express-wc4jp' ),
		'desc_tip'    => true,
		'default'     => 'no',
	),
	'logo_image_url' => array(
		'title'       => __( 'Logo Image (190×60)', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'If you want PayPal to co-brand the checkout page with your logo, enter the URL of your logo image here.<br/>The image must be no larger than 190x60, GIF, PNG, or JPG format, and should be served over HTTPS.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => __( 'Optional', 'pp-express-wc4jp' ),
	),
	'header_image_url' => array(
		'title'       => __( 'Header Image (750×90)', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'If you want PayPal to co-brand the checkout page with your header, enter the URL of your header image here.<br/>The image must be no larger than 750x90, GIF, PNG, or JPG format, and should be served over HTTPS.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => __( 'Optional', 'pp-express-wc4jp' ),
	),
	'page_style' => array(
		'title'       => __( 'Page Style', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'Optionally enter the name of the page style you wish to use. These are defined within your PayPal account.', 'pp-express-wc4jp' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => __( 'Optional', 'pp-express-wc4jp' ),
	),
	'landing_page' => array(
		'title'       => __( 'Landing Page', 'pp-express-wc4jp' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select',
		'description' => __( 'Type of PayPal page to display.', 'pp-express-wc4jp' ),
		'default'     => 'Login',
		'desc_tip'    => true,
		'options'     => array(
			'Billing' => _x( 'Billing (Non-PayPal account)', 'Type of PayPal page', 'pp-express-wc4jp' ),
			'Login'   => _x( 'Login (PayPal account login)', 'Type of PayPal page', 'pp-express-wc4jp' ),
		),
	),
	'credit_enabled' => array(
		'title'       => __( 'Enable PayPal Credit', 'pp-express-wc4jp' ),
		'type'        => 'checkbox',
		'label'       => $credit_enabled_label,
		'disabled'    => ! wc_gateway_ppec_is_credit_supported(),
		'default'     => 'no',
		'desc_tip'    => true,
		'description' => __( 'This enables PayPal Credit, which displays a PayPal Credit button next to the Express Checkout button. PayPal Express Checkout lets you give customers access to financing through PayPal Credit® - at no additional cost to you. You get paid up front, even though customers have more time to pay. A pre-integrated payment button shows up next to the PayPal Button, and lets customers pay quickly with PayPal Credit®.', 'pp-express-wc4jp' ),
	),
	'checkout_on_single_product_enabled' => array(
		'title'       => __( 'Checkout on Single Product', 'pp-express-wc4jp' ),
		'type'        => 'checkbox',
		'label'       => __( 'Checkout on Single Product', 'pp-express-wc4jp' ),
		'default'     => 'no',
		'description' => __( 'Enable Express checkout on Single Product view.', 'pp-express-wc4jp' ),
	),

	'advanced' => array(
		'title'       => __( 'Advanced Settings', 'pp-express-wc4jp' ),
		'type'        => 'title',
		'description' => '',
	),
	'debug' => array(
		'title'       => __( 'Debug Log', 'pp-express-wc4jp' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable Logging', 'pp-express-wc4jp' ),
		'default'     => 'no',
		'desc_tip'    => true,
		'description' => __( 'Log PayPal events, such as IPN requests.', 'pp-express-wc4jp' ),
	),
	'invoice_prefix' => array(
		'title'       => __( 'Invoice Prefix', 'pp-express-wc4jp' ),
		'type'        => 'text',
		'description' => __( 'Please enter a prefix for your invoice numbers. If you use your PayPal account for multiple stores ensure this prefix is unique as PayPal will not allow orders with the same invoice number.', 'pp-express-wc4jp' ),
		'default'     => 'WC-',
		'desc_tip'    => true,
	),
	'require_billing' => array(
		'title'       => __( 'Billing Addresses', 'pp-express-wc4jp' ),
		'type'        => 'checkbox',
		'label'       => __( 'Require Billing Address', 'pp-express-wc4jp' ),
		'default'     => 'no',
		'description' => sprintf( __( 'PayPal only returns a shipping address back to the website. To make sure billing address is returned as well, please enable this functionality on your PayPal account by calling %1$sPayPal Technical Support%2$s.', 'pp-express-wc4jp' ), '<a href="https://www.paypal.com/us/selfhelp/contact/call">', '</a>' ),
	),
	'require_phone_number' => array(
		'title'       => __( 'Require Phone Number', 'pp-express-wc4jp' ),
		'type'        => 'checkbox',
		'label'       => __( 'Require Phone Number', 'pp-express-wc4jp' ),
		'default'     => 'no',
		'description' => __( 'Require buyer to enter their telephone number during checkout if none is provided by PayPal', 'pp-express-wc4jp' ),
	),
	'paymentaction' => array(
		'title'       => __( 'Payment Action', 'pp-express-wc4jp' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select',
		'description' => __( 'Choose whether you wish to capture funds immediately or authorize payment only.', 'pp-express-wc4jp' ),
		'default'     => 'sale',
		'desc_tip'    => true,
		'options'     => array(
			'sale'          => __( 'Sale', 'pp-express-wc4jp' ),
			'authorization' => __( 'Authorize', 'pp-express-wc4jp' ),
		),
	),
	'instant_payments' => array(
		'title'       => __( 'Instant Payments', 'pp-express-wc4jp' ),
		'type'        => 'checkbox',
		'label'       => __( 'Require Instant Payment', 'pp-express-wc4jp' ),
		'default'     => 'no',
		'desc_tip'    => true,
		'description' => __( 'If you enable this setting, PayPal will be instructed not to allow the buyer to use funding sources that take additional time to complete (for example, eChecks). Instead, the buyer will be required to use an instant funding source, such as an instant transfer, a credit/debit card, or PayPal Credit.', 'pp-express-wc4jp' ),
	),
	'subtotal_mismatch_behavior' => array(
		'title'       => __( 'Subtotal Mismatch Behavior', 'pp-express-wc4jp' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select',
		'description' => __( 'Internally, WC calculates line item prices and taxes out to four decimal places; however, PayPal can only handle amounts out to two decimal places (or, depending on the currency, no decimal places at all). Occasionally, this can cause discrepancies between the way WooCommerce calculates prices versus the way PayPal calculates them. If a mismatch occurs, this option controls how the order is dealt with so payment can still be taken.', 'pp-express-wc4jp' ),
		'default'     => 'add',
		'desc_tip'    => true,
		'options'     => array(
			'add'  => __( 'Add another line item', 'pp-express-wc4jp' ),
			'drop' => __( 'Do not send line items to PayPal', 'pp-express-wc4jp' ),
		),
	),
) );
