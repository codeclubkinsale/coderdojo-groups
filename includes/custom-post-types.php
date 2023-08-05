<?php
/**
 * Add custom post types
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Groups
 * @since 1.0.0
 */

function cdgroups_custom_post_types() {

    /**
	 * Post Type: Team Members.
	 */

	$labels = [
		"name" => __( "Team Members", "coderdojo" ),
		"singular_name" => __( "Team Member", "coderdojo" ),
		"menu_name" => __( "My Team Members", "coderdojo" ),
		"all_items" => __( "Team Members", "coderdojo" ),
		"add_new" => __( "Add new", "coderdojo" ),
		"add_new_item" => __( "Add new Team Member", "coderdojo" ),
		"edit_item" => __( "Edit Team Member", "coderdojo" ),
		"new_item" => __( "New Team Member", "coderdojo" ),
		"view_item" => __( "View Team Member", "coderdojo" ),
		"view_items" => __( "View Team Members", "coderdojo" ),
		"search_items" => __( "Search Team Members", "coderdojo" ),
		"not_found" => __( "No Team Members found", "coderdojo" ),
		"not_found_in_trash" => __( "No Team Members found in trash", "coderdojo" ),
		"parent" => __( "Parent Team Member:", "coderdojo" ),
		"featured_image" => __( "Featured image for this Team Member", "coderdojo" ),
		"set_featured_image" => __( "Set featured image for this Team Member", "coderdojo" ),
		"remove_featured_image" => __( "Remove featured image for this Team Member", "coderdojo" ),
		"use_featured_image" => __( "Use as featured image for this Team Member", "coderdojo" ),
		"archives" => __( "Team Member archives", "coderdojo" ),
		"insert_into_item" => __( "Insert into Team Member", "coderdojo" ),
		"uploaded_to_this_item" => __( "Upload to this Team Member", "coderdojo" ),
		"filter_items_list" => __( "Filter Team Members list", "coderdojo" ),
		"items_list_navigation" => __( "Team Members list navigation", "coderdojo" ),
		"items_list" => __( "Team Members list", "coderdojo" ),
		"attributes" => __( "Team Members attributes", "coderdojo" ),
		"name_admin_bar" => __( "Team Member", "coderdojo" ),
		"item_published" => __( "Team Member published", "coderdojo" ),
		"item_published_privately" => __( "Team Member published privately.", "coderdojo" ),
		"item_reverted_to_draft" => __( "Team Member reverted to draft.", "coderdojo" ),
		"item_scheduled" => __( "Team Member scheduled", "coderdojo" ),
		"item_updated" => __( "Team Member updated.", "coderdojo" ),
		"parent_item_colon" => __( "Parent Team Member:", "coderdojo" ),
	];

	$args = [
		"label" => __( "Team Members", "coderdojo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => "groups",
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "team-members", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "team-members", $args );

	/**
	 * Post Type: Colleagues.
	 */

	$labels = [
		"name" => __( "Colleagues", "coderdojo" ),
		"singular_name" => __( "Colleague", "coderdojo" ),
		"menu_name" => __( "My Colleagues", "coderdojo" ),
		"all_items" => __( "Colleagues", "coderdojo" ),
		"add_new" => __( "Add new", "coderdojo" ),
		"add_new_item" => __( "Add new Colleague", "coderdojo" ),
		"edit_item" => __( "Edit Colleague", "coderdojo" ),
		"new_item" => __( "New Colleague", "coderdojo" ),
		"view_item" => __( "View Colleague", "coderdojo" ),
		"view_items" => __( "View Colleagues", "coderdojo" ),
		"search_items" => __( "Search Colleagues", "coderdojo" ),
		"not_found" => __( "No Colleagues found", "coderdojo" ),
		"not_found_in_trash" => __( "No Colleagues found in trash", "coderdojo" ),
		"parent" => __( "Parent Colleague:", "coderdojo" ),
		"featured_image" => __( "Featured image for this Colleague", "coderdojo" ),
		"set_featured_image" => __( "Set featured image for this Colleague", "coderdojo" ),
		"remove_featured_image" => __( "Remove featured image for this Colleague", "coderdojo" ),
		"use_featured_image" => __( "Use as featured image for this Colleague", "coderdojo" ),
		"archives" => __( "Colleague archives", "coderdojo" ),
		"insert_into_item" => __( "Insert into Colleague", "coderdojo" ),
		"uploaded_to_this_item" => __( "Upload to this Colleague", "coderdojo" ),
		"filter_items_list" => __( "Filter Colleagues list", "coderdojo" ),
		"items_list_navigation" => __( "Colleagues list navigation", "coderdojo" ),
		"items_list" => __( "Colleagues list", "coderdojo" ),
		"attributes" => __( "Colleagues attributes", "coderdojo" ),
		"name_admin_bar" => __( "Colleague", "coderdojo" ),
		"item_published" => __( "Colleague published", "coderdojo" ),
		"item_published_privately" => __( "Colleague published privately.", "coderdojo" ),
		"item_reverted_to_draft" => __( "Colleague reverted to draft.", "coderdojo" ),
		"item_scheduled" => __( "Colleague scheduled", "coderdojo" ),
		"item_updated" => __( "Colleague updated.", "coderdojo" ),
		"parent_item_colon" => __( "Parent Colleague:", "coderdojo" ),
	];

	$args = [
		"label" => __( "Colleagues", "coderdojo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => "groups",
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "colleagues", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
	];

	register_post_type( "colleagues", $args );

	/**
	 * Post Type: Funders.
	 */

	$labels = [
		"name" => __( "Funders", "coderdojo" ),
		"singular_name" => __( "Funder", "coderdojo" ),
		"menu_name" => __( "My Funders", "coderdojo" ),
		"all_items" => __( "Funders", "coderdojo" ),
		"add_new" => __( "Add new", "coderdojo" ),
		"add_new_item" => __( "Add new Funder", "coderdojo" ),
		"edit_item" => __( "Edit Funder", "coderdojo" ),
		"new_item" => __( "New Funder", "coderdojo" ),
		"view_item" => __( "View Funder", "coderdojo" ),
		"view_items" => __( "View Funders", "coderdojo" ),
		"search_items" => __( "Search Funders", "coderdojo" ),
		"not_found" => __( "No Funders found", "coderdojo" ),
		"not_found_in_trash" => __( "No Funders found in trash", "coderdojo" ),
		"parent" => __( "Parent Funder:", "coderdojo" ),
		"featured_image" => __( "Featured image for this Funder", "coderdojo" ),
		"set_featured_image" => __( "Set featured image for this Funder", "coderdojo" ),
		"remove_featured_image" => __( "Remove featured image for this Funder", "coderdojo" ),
		"use_featured_image" => __( "Use as featured image for this Funder", "coderdojo" ),
		"archives" => __( "Funder archives", "coderdojo" ),
		"insert_into_item" => __( "Insert into Funder", "coderdojo" ),
		"uploaded_to_this_item" => __( "Upload to this Funder", "coderdojo" ),
		"filter_items_list" => __( "Filter Funders list", "coderdojo" ),
		"items_list_navigation" => __( "Funders list navigation", "coderdojo" ),
		"items_list" => __( "Funders list", "coderdojo" ),
		"attributes" => __( "Funders attributes", "coderdojo" ),
		"name_admin_bar" => __( "Funder", "coderdojo" ),
		"item_published" => __( "Funder published", "coderdojo" ),
		"item_published_privately" => __( "Funder published privately.", "coderdojo" ),
		"item_reverted_to_draft" => __( "Funder reverted to draft.", "coderdojo" ),
		"item_scheduled" => __( "Funder scheduled", "coderdojo" ),
		"item_updated" => __( "Funder updated.", "coderdojo" ),
		"parent_item_colon" => __( "Parent Funder:", "coderdojo" ),
	];

	$args = [
		"label" => __( "Funders", "coderdojo" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => "groups",
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "funders", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "funders", $args );

	/**
	 * Post Type: Partners.
	 */

	$labels = [
		"name" => __( "Partners", "coderdojo" ),
		"singular_name" => __( "Partner", "coderdojo" ),
		"menu_name" => __( "My Partners", "coderdojo" ),
		"all_items" => __( "Partners", "coderdojo" ),
		"add_new" => __( "Add new", "coderdojo" ),
		"add_new_item" => __( "Add new Partner", "coderdojo" ),
		"edit_item" => __( "Edit Partner", "coderdojo" ),
		"new_item" => __( "New Partner", "coderdojo" ),
		"view_item" => __( "View Partner", "coderdojo" ),
		"view_items" => __( "View Partners", "coderdojo" ),
		"search_items" => __( "Search Partners", "coderdojo" ),
		"not_found" => __( "No Partners found", "coderdojo" ),
		"not_found_in_trash" => __( "No Partners found in trash", "coderdojo" ),
		"parent" => __( "Parent Partner:", "coderdojo" ),
		"featured_image" => __( "Featured image for this Partner", "coderdojo" ),
		"set_featured_image" => __( "Set featured image for this Partner", "coderdojo" ),
		"remove_featured_image" => __( "Remove featured image for this Partner", "coderdojo" ),
		"use_featured_image" => __( "Use as featured image for this Partner", "coderdojo" ),
		"archives" => __( "Partner archives", "coderdojo" ),
		"insert_into_item" => __( "Insert into Partner", "coderdojo" ),
		"uploaded_to_this_item" => __( "Upload to this Partner", "coderdojo" ),
		"filter_items_list" => __( "Filter Partners list", "coderdojo" ),
		"items_list_navigation" => __( "Partners list navigation", "coderdojo" ),
		"items_list" => __( "Partners list", "coderdojo" ),
		"attributes" => __( "Partners attributes", "coderdojo" ),
		"name_admin_bar" => __( "Partner", "coderdojo" ),
		"item_published" => __( "Partner published", "coderdojo" ),
		"item_published_privately" => __( "Partner published privately.", "coderdojo" ),
		"item_reverted_to_draft" => __( "Partner reverted to draft.", "coderdojo" ),
		"item_scheduled" => __( "Partner scheduled", "coderdojo" ),
		"item_updated" => __( "Partner updated.", "coderdojo" ),
		"parent_item_colon" => __( "Parent Partner:", "coderdojo" ),
	];

	$args = [
		"label" => __( "Partners", "coderdojo" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => "groups",
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "partners", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "partners", $args );

	/**
	 * Post Type: Regional Bodies.
	 */
	register_post_type( 
		"regional-bodies",
		[
			"label" => __( "Regional Bodies", "coderdojo" ),
			"labels" => [
				"name" => __( "Regional Bodies", "coderdojo" ),
				"singular_name" => __( "Regional Body", "coderdojo" ),
				"menu_name" => __( "My Regional Bodies", "coderdojo" ),
				"all_items" => __( "Regional Bodies", "coderdojo" ),
				"add_new" => __( "Add new", "coderdojo" ),
				"add_new_item" => __( "Add new Regional Body", "coderdojo" ),
				"edit_item" => __( "Edit Regional Body", "coderdojo" ),
				"new_item" => __( "New Regional Body", "coderdojo" ),
				"view_item" => __( "View Regional Body", "coderdojo" ),
				"view_items" => __( "View Regional Bodies", "coderdojo" ),
				"search_items" => __( "Search Regional Bodies", "coderdojo" ),
				"not_found" => __( "No Regional Bodies found", "coderdojo" ),
				"not_found_in_trash" => __( "No Regional Bodies found in trash", "coderdojo" ),
				"parent" => __( "Parent Regional Body:", "coderdojo" ),
				"featured_image" => __( "Featured image for this Regional Body", "coderdojo" ),
				"set_featured_image" => __( "Set featured image for this Regional Body", "coderdojo" ),
				"remove_featured_image" => __( "Remove featured image for this Regional Body", "coderdojo" ),
				"use_featured_image" => __( "Use as featured image for this Regional Body", "coderdojo" ),
				"archives" => __( "Regional Body archives", "coderdojo" ),
				"insert_into_item" => __( "Insert into Regional Body", "coderdojo" ),
				"uploaded_to_this_item" => __( "Upload to this Regional Body", "coderdojo" ),
				"filter_items_list" => __( "Filter Regional Bodies list", "coderdojo" ),
				"items_list_navigation" => __( "Regional Bodies list navigation", "coderdojo" ),
				"items_list" => __( "Regional Bodies list", "coderdojo" ),
				"attributes" => __( "Regional Bodies attributes", "coderdojo" ),
				"name_admin_bar" => __( "Regional Body", "coderdojo" ),
				"item_published" => __( "Regional Body published", "coderdojo" ),
				"item_published_privately" => __( "Regional Body published privately.", "coderdojo" ),
				"item_reverted_to_draft" => __( "Regional Body reverted to draft.", "coderdojo" ),
				"item_scheduled" => __( "Regional Body scheduled", "coderdojo" ),
				"item_updated" => __( "Regional Body updated.", "coderdojo" ),
				"parent_item_colon" => __( "Parent Regional Body:", "coderdojo" ),
			],
			"description" => "",
			"public" => false,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"show_in_menu" => "groups",
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => true,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => [ "slug" => "regional-bodies", "with_front" => true ],
			"query_var" => true,
			"supports" => [ "title", "editor", "thumbnail" ],
		]
	);
}

add_action( 'init', 'cdgroups_custom_post_types' );