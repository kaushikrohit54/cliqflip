<?php
// Add custom Theme Functions here
/* Create Buy Now Button dynamically after Add To Cart button */
/* Dynamic Button for Simple & Variable Product */

/**
 * Main Functions
*/

function sbw_wc_add_buy_now_button_single()
{
    global $product;
    printf( '<button id="sbw_wc-adding-button" type="submit" name="sbw-wc-buy-now" value="%d" class="single_add_to_cart_button buy_now_button button alt">%s</button>', $product->get_ID(), esc_html__( 'Buy Now', 'sbw-wc' ) );
}

add_action( 'woocommerce_after_add_to_cart_button', 'sbw_wc_add_buy_now_button_single' );



/*** Handle for click on buy now ***/

function cliqflip_buy_now()
{
    if ( !isset( $_REQUEST['sbw-wc-buy-now'] ) )
    {
        return false;
    }

    WC()->cart->empty_cart();

    $product_id = absint( $_REQUEST['sbw-wc-buy-now'] );
    $quantity = absint( $_REQUEST['quantity'] );

    if ( isset( $_REQUEST['variation_id'] ) ) {

        $variation_id = absint( $_REQUEST['variation_id'] );
        WC()->cart->add_to_cart( $product_id, 1, $variation_id );

    }else{
        WC()->cart->add_to_cart( $product_id, $quantity );
    }

    wp_safe_redirect( wc_get_checkout_url() );
    exit;
}

add_action( 'wp_loaded', 'cliqflip_buy_now' );
/* Dynamic Button for Simple & Variable Product Closed */
// Remove additional information tab

add_filter( 'woocommerce_product_tabs', function( $tabs ) {
	unset( $tabs['additional_information'] );
	return $tabs;
}, 98 );

// Insert additional information into description tab

add_filter( 'woocommerce_product_tabs', function( $tabs ) {
	$tabs['description']['callback'] = function() {
		global $product;
		
		if ( $product && ( $product->has_attributes() || apply_filters( 'wc_product_enable_dimensions_display', $product->has_weight() || $product->has_dimensions() ) ) ) {
			wc_get_template( 'single-product/tabs/additional-information.php' );
		}
        wc_get_template( 'single-product/tabs/description.php' );
	};
	return $tabs;
}, 98 );

