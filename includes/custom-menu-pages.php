<?php
/**
 * Add custom menu pages to the Wordpress admin area
 *
 * @link https://developer.wordpress.org/reference/functions/add_menu_page/
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Theme_One
 * @since 1.0.0
 */

function cdgroups_custom_menu_pages() {

  add_menu_page( 
    __( 'Groups', 'coderdojo' ),
    __( 'Groups', 'coderdojo' ),
    'read',
    'groups',
    '',
    'dashicons-groups',
    21
  );
}

add_action( 'admin_menu', 'cdgroups_custom_menu_pages' );

