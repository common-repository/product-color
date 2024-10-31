<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://profiles.wordpress.org/vijayrathod245/
 * @since      1.0.0
 *
 * @package    Product_Color
 * @subpackage Product_Color/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Product_Color
 * @subpackage Product_Color/admin
 * @author     Vijay Rathod <vijayrathod245@gmail.com>
 */
class Product_Color_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Product_Color_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Product_Color_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/product-color-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Product_Color_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Product_Color_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/product-color-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	* Create admin side Product Color main page
	* 
	* @since  1.0.0
	*/
	public function wpc_menu_page() {

		/* Required woocommerce */
			if (!defined('WC_VERSION')) {
				?>
				<div class="error">
			        <p><?php _e( '<strong>Product Color</strong> plugin not working because you need to install the WooCommerce plugin.', 'product-color' ); ?>
			        </p>
			    </div>
				<?php
			}else{
			add_menu_page(
				__( 'Product Color', 'product-color' ),
				__( 'Product Color', 'product-color' ),
				'manage_options',
				'wpc-page',
				array( $this, 'wpc_product_color' ) ,'dashicons-color-picker');
		}
	}

	/**
	* Render the Product Color main page function for plugin
	*
	* @since  1.0.0
	*/
	public function wpc_product_color() {
		include_once 'partials/product-color-admin-display.php';
	}

	/**
	* WP Colorpicker
	*
	* @since  1.0.0
	*/
	function wpc_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
	    wp_enqueue_style( 'wp-color-picker' );
	    wp_enqueue_script( 'wpc-script-handle', plugin_dir_url( __FILE__ ) . 'js/product-color-admin.js', array( 'wp-color-picker' ), false, true );
	}

	/**
	 * Create link on plugin page for product color plugin settings
	 */
	public function add_plugin_product_color_settings_link($wpc_links){
		$wpc_settings_link = '<a href="admin.php?page=wpc-page">' . __('Settings') . '</a>';
		array_push($wpc_links, $wpc_settings_link);
		return $wpc_links;
	}

	/**
	 * Save product color
	 */
	public function wpc_save_product_color_details(){
		if(isset($_POST['wpc-submit-color'])){
			/* Product Name Color */
			$wpc_product_name_color_data = sanitize_text_field($_POST['select-product-name-color']);
			$wpc_get_select_product_name_color_values = get_option( 'wpc_select_product_name_color');
			update_option( 'wpc_select_product_name_color', $wpc_product_name_color_data, '', 'yes');	
			if(!$wpc_get_select_product_name_color_values){
				add_option( 'wpc_select_product_name_color', $wpc_product_name_color_data, '', 'yes' );	
			}

			/* Product Description Color */
			$wpc_product_description_color_data = sanitize_text_field($_POST['select-product-description-color']);
			$wpc_get_select_product_description_values = get_option( 'wpc_select_product_description_color');
			update_option( 'wpc_select_product_description_color', $wpc_product_description_color_data, '', 'yes');	
			if(!$wpc_get_select_product_description_values){
				add_option( 'wpc_select_product_description_color', $wpc_product_description_color_data, '', 'yes' );	
			}

			/* Product Short Description Color */
			$wpc_product_short_description_color_data = sanitize_text_field($_POST['select-product-short-description-color']);
			$wpc_get_select_product_short_description_values = get_option( 'wpc_select_product_short_description_color');
			update_option( 'wpc_select_product_short_description_color', $wpc_product_short_description_color_data, '', 'yes');	
			if(!$wpc_get_select_product_short_description_values){
				add_option( 'wpc_select_product_short_description_color', $wpc_get_select_product_short_description_values, '', 'yes' );	
			}


			/* Product Category Color */
			$wpc_product_category_color_data = sanitize_text_field($_POST['select-product-category-color']);
			$wpc_get_select_product_category_values = get_option( 'wpc_select_product_category_color');
			update_option( 'wpc_select_product_category_color', $wpc_product_category_color_data, '', 'yes');	
			if(!$wpc_get_select_product_category_values){
				add_option( 'wpc_select_product_category_color', $wpc_product_category_color_data, '', 'yes' );	
			}

			/* Product Category Background Color */
			$wpc_product_category_bg_color_data = sanitize_text_field($_POST['select-product-category-bg-color']);
			$wpc_get_select_product_category_bg_values = get_option( 'wpc_select_product_category_bg_color');
			update_option( 'wpc_select_product_category_bg_color', $wpc_product_category_bg_color_data, '', 'yes');	
			if(!$wpc_get_select_product_category_bg_values){
				add_option( 'wpc_select_product_category_bg_color', $wpc_product_category_bg_color_data, '', 'yes' );	
			}

			/* Product Tag Color */
			$wpc_product_tag_color_data = sanitize_text_field($_POST['select-product-tags-color']);
			$wpc_get_select_product_tag_values = get_option( 'wpc_select_product_tag_color');
			update_option( 'wpc_select_product_tag_color', $wpc_product_tag_color_data, '', 'yes');	
			if(!$wpc_get_select_product_tag_values){
				add_option( 'wpc_select_product_tag_color', $wpc_product_tag_color_data, '', 'yes' );	
			}

			/* Product Tag Background Color */
			$wpc_product_tag_bg_color_data = sanitize_text_field($_POST['select-product-tags-bg-color']);
			$wpc_get_select_product_tag_bg_values = get_option( 'wpc_select_product_tag_bg_color');
			update_option( 'wpc_select_product_tag_bg_color', $wpc_product_tag_bg_color_data, '', 'yes');	
			if(!$wpc_get_select_product_tag_bg_values){
				add_option( 'wpc_select_product_tag_bg_color', $wpc_product_tag_bg_color_data, '', 'yes' );	
			}

			/* Product Review Color */
			$wpc_product_review_color_data = sanitize_text_field($_POST['select-product-review-color']);
			$wpc_get_select_product_review_values = get_option( 'wpc_select_product_review_color');
			update_option( 'wpc_select_product_review_color', $wpc_product_review_color_data, '', 'yes');	
			if(!$wpc_get_select_product_review_values){
				add_option( 'wpc_select_product_review_color', $wpc_product_review_color_data, '', 'yes' );	
			}

			/* Product Price Color */
			$wpc_product_price_color_data = sanitize_text_field($_POST['select-product-price-color']);
			$wpc_get_select_product_price_values = get_option( 'wpc_select_product_price_color');
			update_option( 'wpc_select_product_price_color', $wpc_product_price_color_data, '', 'yes');	
			if(!$wpc_get_select_product_price_values){
				add_option( 'wpc_select_product_price_color', $wpc_product_price_color_data, '', 'yes' );	
			}

			/* Product Add to cart Color */
			$wpc_product_add_to_cart_color_data = sanitize_text_field($_POST['select-add-to-cart-color']);
			$wpc_get_select_product_add_to_cart_values = get_option( 'wpc_select_product_add_to_cart_color');
			update_option( 'wpc_select_product_add_to_cart_color', $wpc_product_add_to_cart_color_data, '', 'yes');	
			if(!$wpc_get_select_product_add_to_cart_values){
				add_option( 'wpc_select_product_add_to_cart_color', $wpc_product_add_to_cart_color_data, '', 'yes' );	
			}

			/* Product Add to cart Background Color */
			$wpc_product_add_to_cart_bg_color_data = sanitize_text_field($_POST['select-add-to-cart-bg-color']);
			$wpc_get_select_product_add_to_cart_bg_values = get_option( 'wpc_select_product_add_to_cart_bg_color');
			update_option( 'wpc_select_product_add_to_cart_bg_color', $wpc_product_add_to_cart_bg_color_data, '', 'yes');	
			if(!$wpc_get_select_product_add_to_cart_bg_values){
				add_option( 'wpc_select_product_add_to_cart_bg_color', $wpc_product_add_to_cart_bg_color_data, '', 'yes' );	
			}

			/* Product Sale Color */
			$wpc_product_sale_color_data = sanitize_text_field($_POST['select-product-sale-color']);
			$wpc_get_select_product_sale_values = get_option( 'wpc_select_product_sale_color');
			update_option( 'wpc_select_product_sale_color', $wpc_product_sale_color_data, '', 'yes');	
			if(!$wpc_get_select_product_sale_values){
				add_option( 'wpc_select_product_sale_color', $wpc_product_sale_color_data, '', 'yes' );	
			}
			
			/* Product Sale Background Color */
			$wpc_product_sale_bg_color_data = sanitize_text_field($_POST['select-product-sale-bg-color']);
			$wpc_get_select_product_sale_bg_values = get_option( 'wpc_select_product_sale_bg_color');
			update_option( 'wpc_select_product_sale_bg_color', $wpc_product_sale_bg_color_data, '', 'yes');	
			if(!$wpc_get_select_product_sale_bg_values){
				add_option( 'wpc_select_product_sale_bg_color', $wpc_product_sale_bg_color_data, '', 'yes' );	
			}
		}
	}


	/**
	 * Apply product color for front end
	 */
	public function wpc_apply_color_style_value() {
		echo "<style id='wpc_product_colors'>\n";

		/* Product Name Color */
		$wpc_product_name_color = get_option( 'wpc_select_product_name_color', '#000' );
		printf( ".wpc-body .product .woocommerce-loop-product__title, .single-product .product .product_title { color: %s !important; } \n", $wpc_product_name_color );

		/* Product Description Color */
		$wpc_product_description_color = get_option( 'wpc_select_product_description_color', '#000' );
		printf( ".wpc-body .woocommerce-tabs .woocommerce-Tabs-panel--description p { color: %s !important; } \n", $wpc_product_description_color );

		/* Product Short Description Color */
		$wpc_product_short_description_color = get_option( 'wpc_select_product_short_description_color', '#000' );
		printf( ".wpc-body .product .woocommerce-product-details__short-description { color: %s !important; } \n", $wpc_product_short_description_color );

		/* Product Category Color */
		$wpc_product_category_color = get_option( 'wpc_select_product_category_color', '#000' );
		printf( ".wpc-body .product .summary .product_meta .posted_in a { color: %s !important; padding:2px 4px !important; } \n", $wpc_product_category_color );

		/* Product Category Background Color */
		$wpc_product_category_bg_color = get_option( 'wpc_select_product_category_bg_color', '#eeeeee' );
		printf( ".wpc-body .product .summary .product_meta .posted_in a { background-color: %s !important; } \n", $wpc_product_category_bg_color );

		/* Product Tag Color */
		$wpc_product_tag_color = get_option( 'wpc_select_product_tag_color', '#000' );
		printf( ".wpc-body .product .summary .product_meta .tagged_as a { color: %s !important; padding:2px 4px !important; } \n", $wpc_product_tag_color );

		/* Product Tag Background Color */
		$wpc_product_tag_bg_color = get_option( 'wpc_select_product_tag_bg_color', '#eeeeee' );
		printf( ".wpc-body .product .summary .product_meta .tagged_as a { background-color: %s !important; } \n", $wpc_product_tag_bg_color );

		/* Product Review Color */
		$wpc_product_review_color = get_option( 'wpc_select_product_review_color', '#000' );
		printf( ".wpc-body .product .star-rating span::before { color: %s !important; } \n", $wpc_product_review_color );

		/* Product Price Color */
		$wpc_product_price_color = get_option( 'wpc_select_product_price_color', '#000' );
		printf( ".wpc-body .product .price { color: %s !important; } \n", $wpc_product_price_color );

		/* Product Add to cart Color */
		$wpc_product_add_to_cart_color = get_option( 'wpc_select_product_add_to_cart_color', '#000' );
		printf( ".wpc-body .product .add_to_cart_button, .product .single_add_to_cart_button { color: %s !important; } \n", $wpc_product_add_to_cart_color );
		
		/* Product Add to cart Background Color */
		$wpc_product_add_to_cart_bg_color = get_option( 'wpc_select_product_add_to_cart_bg_color', '#eeeeee' );
		printf( ".wpc-body .product .add_to_cart_button, .product .single_add_to_cart_button { background-color: %s !important; } \n", $wpc_product_add_to_cart_bg_color );

		/* Product Sale Color */
		$wpc_product_sale_color = get_option( 'wpc_select_product_sale_color', '#000' );
		printf( ".wpc-body .product .onsale { color: %s !important; } \n", $wpc_product_sale_color );

		/* Product Sale Background Color */
		$wpc_product_sale_bg_color = get_option( 'wpc_select_product_sale_bg_color', '#eeeeee' );
		printf( ".wpc-body .product .onsale { background-color: %s !important; } \n", $wpc_product_sale_bg_color );

		echo "</style>\n";
	}

	/**
	 * Apply product color for admin
	 */
	public function wpc_apply_color_style_admin(){
		echo "<style id='wpc_product_colors'>\n";
		echo "</style>\n";
	}

	/**
	 * Add body class
	 */
	public function wpc_product_color_body_class($classes) {
	    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	    if ( is_plugin_active('product-color/product-color.php') ) {
	        $classes[] = 'wpc-body';
	    }

	    return $classes;
	}

}
