<?php
class woocommerce_wpml {

    /** @var woocommerce_wpml */
    protected static $_instance = null;

    public $settings;
    /** @var  WCML_Troubleshooting */
    public $troubleshooting;
    /** @var  WCML_Endpoints */
    public $endpoints;
    /** @var WCML_Products */
    public $products;
    /** @var  WCML_Synchronize_Product_Data */
    public $sync_product_data;
    /** @var  WCML_Synchronize_Variations_Data */
    public $sync_variations_data;
    /** @var WCML_Store_Pages */
    public $store;
    /** @var WCML_Emails */
    public $emails;
    /** @var WCML_Terms */
    public $terms;
    /** @var WCML_Attributes */
    public $attributes;
    /** @var WCML_Orders */
    public $orders;
    /** @var WCML_Currencies */
    public $currencies;
    /** @var WCML_Multi_Currency */
    public $multi_currency;
    /** @var WCML_Languages_Upgrader */
    public $languages_upgrader;
    /** @var WCML_Url_Translation */
    public $url_translation;
    /** @var WCML_Coupons */
    public $coupons;
    /** @var WCML_Locale */
    public $locale;
    /** @var WCML_Media */
    public $media;
    /** @var WCML_Downloadable_Products */
    public $downloadable;
    /** @var WCML_WC_Strings */
    public $strings;
    /** @var WCML_WC_Shipping */
    public $shipping;
    /** @var  WCML_WC_Gateways */
    public $gateways;
    /** @var  WCML_CS_Templates */
    public $cs_templates;

    /** @var  WCML_Reports */
    private $reports;
    /** @var  WCML_Requests */
    public $requests;
    /** @var  WCML_Compatibility */
    // NOTE: revert back to private after wcml-1218
    public $compatibility;
    /** @var  WCML_xDomain_Data */
    private $xdomain_data;

    /**
     * @var WCML_Screen_Options
     */
    private $wcml_products_screen;


    public function __construct(){
	    global $sitepress;

        $this->settings = $this->get_settings();
        $this->currencies = new WCML_Currencies( $this );
        $this->xdomain_data = new WCML_xDomain_Data;

	    new WCML_Widgets( $this );

	    if ( class_exists( 'WooCommerce' ) && defined( 'WC_VERSION' ) && 'yes' == get_option( 'woocommerce_api_enabled' ) && ! is_null( $sitepress ) ) {
		    if ( version_compare( WC_VERSION, '2.6', '>=' ) && WCML_REST_API_Support::is_rest_api_request() ) {
			    if( WCML_REST_API_Support::get_api_request_version() === 1 ) {
				    $wcml_rest_api_support = new WCML_REST_API_Support_V1( $this, $sitepress );
			    }else{
				    $wcml_rest_api_support = new WCML_REST_API_Support( $this, $sitepress );
			    }
			    $wcml_rest_api_support->initialize();
		    } else {
			    new WCML_WooCommerce_Rest_API_Support( $this, $sitepress );
		    }
	    }

        add_action('init', array($this, 'init'),2);

        if( defined( 'ICL_SITEPRESS_VERSION' ) && !ICL_PLUGIN_INACTIVE && class_exists( 'SitePress' ) ){
            $this->cs_properties = new WCML_Currency_Switcher_Properties();
            $this->cs_templates = new WCML_Currency_Switcher_Templates( $this, $sitepress->get_wp_api() );
            $this->cs_templates->init_hooks();

            $wc_shortccode_product_category = new WCML_WC_Shortcode_Product_Category( $sitepress );
            $wc_shortccode_product_category->add_hooks();
        }

    }

    /**
     * Main instance.
     *
     * @since 3.8
     * @static
     * @return woocommerce_wpml
     */
    public static function instance() {
        global $woocommerce_wpml;

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
            $woocommerce_wpml = self::$_instance;
	        do_action( 'wcml_loaded', $woocommerce_wpml );
        }

        return self::$_instance;
    }

	public function init() {
		global $sitepress, $wpdb, $woocommerce;

		new WCML_Upgrade;

		$this->dependencies       = new WCML_Dependencies;
		$this->check_dependencies = $this->dependencies->check();

		WCML_Admin_Menus::set_up_menus( $this, $sitepress, $wpdb, $this->check_dependencies );

		if ( ! $this->check_dependencies ) {
			WCML_Capabilities::set_up_capabilities();

			wp_register_style( 'otgs-ico', WCML_PLUGIN_URL . '/res/css/otgs-ico.css', null, WCML_VERSION );
			wp_enqueue_style( 'otgs-ico' );

			WCML_Resources::load_management_css();
			WCML_Resources::load_tooltip_resources();

			return false;
		}

		$this->compatibility = new WCML_Compatibility( $sitepress, $this, $wpdb, new WPML_Element_Translation_Package );

		$actions_that_need_mc = array(
			'save-mc-options',
			'wcml_new_currency',
			'wcml_save_currency',
			'wcml_delete_currency',
			'wcml_update_currency_lang',
			'wcml_update_default_currency',
			'wcml_price_preview',
			'wcml_currencies_switcher_preview',
			'wcml_currencies_switcher_save_settings',
			'wcml_delete_currency_switcher',
			'wcml_currencies_order'
		);

		$this->cart = new WCML_Cart( $this, $sitepress, $woocommerce );
		$this->cart->add_hooks();

		if ( $this->settings['enable_multi_currency'] == WCML_MULTI_CURRENCIES_INDEPENDENT
		     || ( isset( $_GET['page'] ) && $_GET['page'] == 'wpml-wcml' && isset( $_GET['tab'] ) && $_GET['tab'] == 'multi-currency' )
		     || ( isset( $_POST['action'] ) && in_array( $_POST['action'], $actions_that_need_mc ) )
		) {
			$this->multi_currency = new WCML_Multi_Currency;
			$wcml_price_filters   = new WCML_Price_Filter( $this );
			$wcml_price_filters->add_hooks();
		} else {
			add_shortcode( 'currency_switcher', '__return_empty_string' );
		}

		if ( is_admin() ) {
			$this->troubleshooting      = new WCML_Troubleshooting( $this, $sitepress, $wpdb );
			$this->links                = new WCML_Links( $this, $sitepress );
			$this->translation_editor   = new WCML_Translation_Editor( $this, $sitepress, $wpdb );
			$this->translation_editor->add_hooks();
			$this->languages_upgrader   = new WCML_Languages_Upgrader;
			$this->sync_variations_data = new WCML_Synchronize_Variations_Data( $this, $sitepress, $wpdb );
			$this->sync_variations_data->add_hooks();
			$this->wcml_products_screen = new WCML_Products_Screen_Options( $sitepress );
			$this->wcml_products_screen->init();
			new WCML_Pointers();
		}

		$this->sync_product_data = new WCML_Synchronize_Product_Data( $this, $sitepress, $wpdb );
		$this->sync_product_data->add_hooks();
		$this->duplicate_product = new WCML_WC_Admin_Duplicate_Product( $this, $sitepress, $wpdb );
		$this->products          = new WCML_Products( $this, $sitepress, $wpdb );
		$this->products->add_hooks();
		$this->store   = new WCML_Store_Pages ( $this, $sitepress );
		$this->store->add_hooks();
		$this->strings = new WCML_WC_Strings( $this, $sitepress );
		$this->strings->add_hooks();
		$this->emails = new WCML_Emails( $this, $sitepress, $woocommerce, $wpdb );
		$this->emails->add_hooks();
		$this->terms      = new WCML_Terms( $this, $sitepress, $wpdb );
	    $this->terms->add_hooks();
		$this->attributes = new WCML_Attributes( $this, $sitepress, $wpdb );
		$this->attributes->add_hooks();
		$this->orders   = new WCML_Orders( $this, $sitepress );
		$this->shipping = new WCML_WC_Shipping( $sitepress );
		$this->shipping->add_hooks();
		$this->gateways        = new WCML_WC_Gateways( $this, $sitepress );
		$this->currencies      = new WCML_Currencies( $this );
		$this->url_translation = new WCML_Url_Translation ( $this, $sitepress, $wpdb );
		$this->url_translation->set_up();
		$this->endpoints = new WCML_Endpoints( $this );
		$this->requests  = new WCML_Requests;
		$this->coupons      = new WCML_Coupons( $this, $sitepress );
		$this->coupons->add_hooks();
		$this->locale       = new WCML_Locale( $this, $sitepress );
		$this->media        = new WCML_Media( $this, $sitepress, $wpdb );
		$this->downloadable = new WCML_Downloadable_Products( $this, $sitepress );
		$this->downloadable->add_hooks();
		$this->page_builders        = new WCML_Page_Builders( $sitepress );
		$this->reports              = new WCML_Reports;
		$this->wcml_products_screen = new WCML_Products_Screen_Options();
		$this->wcml_products_screen->init();
		$this->cart_sync_warnings = new WCML_Cart_Sync_Warnings( $this, $sitepress );
		$this->cart_sync_warnings->add_hooks();

		$payment_method_filter = new WCML_Payment_Method_Filter();
		$payment_method_filter->add_hooks();

		$wcml_ajax_setup = new WCML_Ajax_Setup( $sitepress );
		$wcml_ajax_setup->add_hooks();
		new WCML_Fix_Copied_Custom_Fields_WPML353();

		WCML_Install::initialize( $this, $sitepress );

		WCML_Resources::set_up_resources( $this, $sitepress );

		add_filter( 'woocommerce_get_checkout_payment_url', array(
			'WCML_Links',
			'filter_woocommerce_redirect_location'
		) );
		add_filter( 'woocommerce_get_cancel_order_url', array( 'WCML_Links', 'filter_woocommerce_redirect_location' ) );
		add_filter( 'woocommerce_get_return_url', array( 'WCML_Links', 'filter_woocommerce_redirect_location' ) );

		add_action( 'wp_ajax_wcml_update_setting_ajx', array( $this, 'update_setting_ajx' ) );

		if ( is_admin() ) {
			$taxonomy_translation_link_filters = new WCML_Taxonomy_Translation_Link_Filters( $this->attributes );
			$taxonomy_translation_link_filters->add_filters();

			$tp_support = new WCML_TP_Support( $this, $wpdb, new WPML_Element_Translation_Package );
			$tp_support->add_hooks();
		}
	}

    public function get_settings(){

        $defaults = array(
            'file_path_sync'               => 1,
            'is_term_order_synced'         => 0,
            'enable_multi_currency'        => WCML_MULTI_CURRENCIES_DISABLED,
            'dismiss_doc_main'             => 0,
            'trnsl_interface'              => 1,
            'currency_options'             => array(),
            'currency_switcher_product_visibility' => 1,
            'dismiss_tm_warning'           => 0,
            'dismiss_cart_warning'         => 0,
            'cart_sync'                    => array(
                'lang_switch' => WCML_CART_SYNC,
                'currency_switch' => WCML_CART_SYNC
            )
        );

        if(empty($this->settings)){
            $this->settings = get_option('_wcml_settings');
        }

        foreach($defaults as $key => $value){
            if(!isset($this->settings[$key])){
                $this->settings[$key] = $value;
            }
        }

        return $this->settings;
    }

    public function update_settings($settings = null){
        if(!is_null($settings)){
            $this->settings = $settings;
        }
        update_option('_wcml_settings', $this->settings);
    }

    public function update_setting_ajx(){
        $nonce = filter_input( INPUT_POST, 'nonce', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
        if(!$nonce || !wp_verify_nonce($nonce, 'wcml_settings')){
            die('Invalid nonce');
        }

        $data = $_POST;
        $error = '';
        $html = '';

        $this->settings[$data['setting']] = $data['value'];
        $this->update_settings();

        echo json_encode(array('html' => $html, 'error'=> $error));
        exit;
    }

    //get latest stable version from WC readme.txt
    public function get_stable_wc_version(){
        global $woocommerce;

        $file = $woocommerce->plugin_path(). '/readme.txt';
        $values = file($file);
        $wc_info = explode( ':', $values[5] );
        if( $wc_info[0] == 'Stable tag' ){
            $version =  trim( $wc_info[1] );
        }else{
            foreach( $values as $value ){
                $wc_info = explode( ':', $value );

                if( $wc_info[0] == 'Stable tag' ){
                    $version = trim( $wc_info[1] );
                }
            }
        }

        return $version;
    }

    public function get_supported_wp_version(){
        $file = WCML_PLUGIN_PATH. '/readme.txt';

        $values = file($file);

        $version = explode( ':', $values[6] );

        if( $version[0] == 'Tested up to' ){
            return $version[1];
        }

        foreach( $values as $value ){
            $version = explode( ':', $value );

            if( $version[0] == 'Tested up to' ){
                return $version[1];
            }
        }

    }

	/**
	 * @return array
	 */
	function get_wc_query_vars() {
		return WooCommerce::instance()->query->query_vars;
	}
}
