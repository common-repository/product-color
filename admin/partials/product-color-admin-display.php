<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://profiles.wordpress.org/vijayrathod245/
 * @since      1.0.0
 *
 * @package    Product_Color
 * @subpackage Product_Color/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php 
echo Product_Color_Admin::wpc_save_product_color_details();
$wpc_select_product_name_color_value = get_option('wpc_select_product_name_color');
$wpc_select_product_description_color_value = get_option('wpc_select_product_description_color');
$wpc_select_product_short_description_color_value = get_option('wpc_select_product_short_description_color');
$wpc_select_product_category_color_value = get_option('wpc_select_product_category_color');
$wpc_select_product_category_bg_color_value = get_option('wpc_select_product_category_bg_color');
$wpc_select_product_tag_color_value = get_option('wpc_select_product_tag_color');
$wpc_select_product_tag_bg_color_value = get_option('wpc_select_product_tag_bg_color');
$wpc_select_product_review_color_value = get_option('wpc_select_product_review_color');
$wpc_select_product_price_color_value = get_option('wpc_select_product_price_color');
$wpc_select_product_add_to_cart_color_value = get_option('wpc_select_product_add_to_cart_color');
$wpc_select_product_add_to_cart_bg_color_value = get_option('wpc_select_product_add_to_cart_bg_color');
$wpc_select_product_sale_color_value = get_option('wpc_select_product_sale_color');
$wpc_select_product_sale_bg_color_value = get_option('wpc_select_product_sale_bg_color');
?>
<div class="wrap">
    <h1><?php echo esc_html(__('WC Product Color Settings', 'product-color')) ?></h1>
    <div class="wpc-head-section-main">
        <div class="wpc-head-title">
            <h2><?php echo esc_html(__('WC Product Color Options', 'product-color')) ?></h2>
        </div>
        <div class="wpc-color-section-main">
            <form method="post">
                <div class="wpc-color-label">
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Name Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-name-color" value="<?php echo esc_attr($wpc_select_product_name_color_value ? $wpc_select_product_name_color_value : '#000'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product name color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Description Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-description-color" value="<?php echo esc_attr($wpc_select_product_description_color_value ? $wpc_select_product_description_color_value : '#000'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product description color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Short Description Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-short-description-color" value="<?php echo esc_attr($wpc_select_product_short_description_color_value ? $wpc_select_product_short_description_color_value : '#000'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product description color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Category Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-category-color" value="<?php echo esc_attr($wpc_select_product_category_color_value ? $wpc_select_product_category_color_value : '#000'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product category color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Category BG Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-category-bg-color" value="<?php echo esc_attr($wpc_select_product_category_bg_color_value ? $wpc_select_product_category_bg_color_value : '#ffffff2e'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product category bg color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Tags Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-tags-color" value="<?php echo esc_attr($wpc_select_product_tag_color_value ? $wpc_select_product_tag_color_value : '#000'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product tags color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Tags BG Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-tags-bg-color" value="<?php echo esc_attr($wpc_select_product_tag_bg_color_value ? $wpc_select_product_tag_bg_color_value : '#ffffff2e'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product tags bg color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Review Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-review-color" value="<?php echo esc_attr($wpc_select_product_review_color_value ? $wpc_select_product_review_color_value : '#000'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product review color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Price Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-price-color" value="<?php echo esc_attr($wpc_select_product_price_color_value ? $wpc_select_product_price_color_value : '#000'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product price color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Add to Cart Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-add-to-cart-color" value="<?php echo esc_attr($wpc_select_product_add_to_cart_color_value ? $wpc_select_product_add_to_cart_color_value : '#000'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the add to cart color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Add to Cart BG Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-add-to-cart-bg-color" value="<?php echo esc_attr($wpc_select_product_add_to_cart_bg_color_value ? $wpc_select_product_add_to_cart_bg_color_value : '#eeeeee'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the add to cart bg color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html(__('Select Product Sale Color', 'product-color')) ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-sale-color" value="<?php echo esc_attr($wpc_select_product_sale_color_value ? $wpc_select_product_sale_color_value : '#000'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product sale color.', 'product-color')) ?></p>
                        </div>
                    </div>
                    <div class="wpc-label-color-section">
                        <div class="wpc-lable-title">
                            <label><?php echo esc_html('Select Product Sale BG Color') ?><label>
                        </div>
                        <div class="wpc-color-input">
                            <input type="text" name="select-product-sale-bg-color" value="<?php echo esc_attr($wpc_select_product_sale_bg_color_value ? $wpc_select_product_sale_bg_color_value : '#ffffff2e'); ?>" class="wpc-color-field" />
                            <p><?php echo esc_html(__('Hex value for the product sale bg color.', 'product-color')) ?></p>
                        </div>
                    </div>
                </div>
                <div class="wpc-color-submit"> 
                    <input type="submit" name="wpc-submit-color" class="button button-primary" value="Save Changes">
                </div>
            </form>
        </div>
    </div>
</div>