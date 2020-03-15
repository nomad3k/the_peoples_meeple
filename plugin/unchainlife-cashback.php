<?php
/*
Plugin Name: Cashback Unchained
Plugin URI:  http://www.unchain.life/products/wordpress/cashback
Description: Something
Version:     1.0
Author:      Unchain Life Ltd.
Author URI:  http://www.unchain.life
License:     GPL2 etc
License URI: http://www.unchain.life/products/wordpress/license
*/

/* Copyright 2019 (email : chris@unchain.life)
Unchain Life Cashback Scheme is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Unchain Life Cashback Scheme is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Unchain Life Cashback Scheme. If not, see (http://link to your plugin license).
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// -------------------------------------------------------------------------------------------------

add_action('the_title', 'unc_append_title');
function unc_append_title($title, $id = null) {
  return $title . "!";
}

// -------------------------------------------------------------------------------------------------

add_action('woocommerce_order_status_completed', 'unc_order_completed');
function unc_order_completed( $order_id ) {
  // Load the order
  $order = wc_get_order( $order_id );
  if (! $order ) return;

  // Load the frisbee
  $frisbee = wc_get_product( 44 );
  if (! $frisbee ) return;

  // Add the frisbee to the order!
  $order->add_product( $product, 1 );
  $order->calculate_totals();
  $order->save();
}

// -------------------------------------------------------------------------------------------------

function unc_admin_menu_page() {
  echo "<h1>Hello Admin World</h1>";
}

add_action('admin_menu', 'unc_admin_menu');
function unc_admin_menu() {
  // https://developer.wordpress.org/reference/functions/add_menu_page/
  add_menu_page(
    'Unchain Life - Cashback',
    'Eyres Cashback',
    'manage_options',
    'admin.php?page=unc-admin',
    '', // 'unc_cashback_admin_page',
    'dashicons-money',
    7);
}

?>
