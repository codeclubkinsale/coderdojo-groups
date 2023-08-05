<?php
/**
 * Add aditional user roles
 *
 * @link https://developer.wordpress.org/reference/functions/add_role/
 * @link https://developer.wordpress.org/reference/functions/remove_role/
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Theme_One
 * @since 1.0.0
 */

function cdgroups_custom_user_roles() {

  add_role( 'champion', 'Champion', get_role( 'administrator' )->capabilities );
  add_role( 'mentor', 'Mentor', get_role( 'author' )->capabilities );
  add_role( 'parent', 'Parent', get_role( 'subscriber' )->capabilities );
  add_role( 'ninja-o13', 'Ninja (over 13)', get_role( 'subscriber' )->capabilities );

  remove_role( 'editor' );
  remove_role( 'author' );
  remove_role( 'contributor' );
  remove_role( 'subscriber' );
}

