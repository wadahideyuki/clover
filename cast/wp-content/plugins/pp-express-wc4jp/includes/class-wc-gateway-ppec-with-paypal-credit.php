<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class WC_Gateway_PPEC_With_PayPal_Credit extends WC_Gateway_PPEC {
	public function __construct() {
		$this->icon    = 'https://www.paypalobjects.com/webstatic/en_US/i/buttons/ppc-acceptance-small.png';

		parent::__construct();

		if ( ! is_admin() ) {
			if ( wc_gateway_ppec()->checkout->is_started_from_checkout_page() ) {
				$this->title = __( 'PayPal Credit', 'pp-express-wc4jp' );;
			}
		}

		if ( $this->is_available() ) {
			$ipn_handler = new WC_Gateway_PPEC_IPN_Handler( $this );
			$ipn_handler->handle();
		}

		$this->use_ppc = true;
	}
}
