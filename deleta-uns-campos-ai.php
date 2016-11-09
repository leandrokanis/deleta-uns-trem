<?php
/**
 * @package Deleta uns trem
 * @version 0.1
 */
/*
Plugin Name: Deleta uns trem
Plugin Name: Deleta uns campos ai
Plugin URI: https://leandro.cf
Description: Deleta uns campos ai
Author: Leandro Alves
Version: 0.1
Author URI: http://leandro.cf
*/


// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     unset($fields['order']['order_comments']);
     unset($fields['billing']['billing_last_name']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_phone']);
     unset($fields['billing']['billing_postcode']);
     unset($fields['billing']['billing_state']);
     unset($fields['billing']['billing_address_1']);
     unset($fields['billing']['billing_address_2']);

     return $fields;
}


add_action( 'get_header', 'custom_override_checkout_fields' );

?>