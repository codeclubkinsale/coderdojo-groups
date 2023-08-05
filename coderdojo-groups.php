<?php

/*
Plugin Name: Coderdojo Groups
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: anthonynolan
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

// Exit if accessed directly.
if (! defined('ABSPATH')) {
  exit;
}

/** Custom Post Types */
require_once dirname(__FILE__) . '/includes/custom-post-types.php';

/** Custom Menu Pages */
require_once dirname(__FILE__) . '/includes/custom-menu-pages.php';

/** Custom Meta Boxes */
require_once dirname(__FILE__) . '/includes/custom-meta-boxes.php';

/** Custom Shortcodes */
require_once dirname(__FILE__) . '/includes/custom-shortcodes.php';
