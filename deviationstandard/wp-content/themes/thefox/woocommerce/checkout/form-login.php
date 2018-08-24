<?php
/**
 * Checkout login form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( is_user_logged_in()  || ! $checkout->enable_signup ) return;

$info_message = apply_filters( 'woocommerce_checkout_login_message', __( 'Existing customer.', 'thefoxwp' ) );
?>
<div id="rd_login_form">
<h2><?php echo esc_html( $info_message ); ?> </h2>

<?php
	woocommerce_login_form(
		array(
			'message'  => '',
		'redirect' => wc_get_page_permalink( 'checkout' ),
		'hidden'   => true,
		)
	);
?>
</div>
