<?php
/*
===========================
  [[[ Custom Post Types ]]]
===========================
*/

// Clear Rewrite Rules for CPT's
function ex_theme_terlet() {
  flush_rewrite_rules();
}
add_action('after_switch_theme', 'ex_theme_terlet');

// CPT - Equipment
function cpt_equipment() {

	$labels = array(
		'name'                  => _x( 'Equipment', 'Post Type General Name', 'equipment' ),
		'singular_name'         => _x( 'Equipment', 'Post Type Singular Name', 'equipment' ),
		'menu_name'             => __( 'Equipment', 'equipment' ),
		'name_admin_bar'        => __( 'Equipment', 'equipment' ),
		'archives'              => __( 'Equipment Archives', 'equipment' ),
		'attributes'            => __( 'Equipment Attributes', 'equipment' ),
		'parent_item_colon'     => __( 'Parent Equipment:', 'equipment' ),
		'all_items'             => __( 'All Equipment', 'equipment' ),
		'add_new_item'          => __( 'Add New Item', 'equipment' ),
		'add_new'               => __( 'Add New', 'equipment' ),
		'new_item'              => __( 'New Item', 'equipment' ),
		'edit_item'             => __( 'Edit Item', 'equipment' ),
		'update_item'           => __( 'Update Item', 'equipment' ),
		'view_item'             => __( 'View Equipment', 'equipment' ),
		'view_items'            => __( 'View Equipment', 'equipment' ),
		'search_items'          => __( 'Search Equipment', 'equipment' ),
		'not_found'             => __( 'Not found', 'equipment' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'equipment' ),
		'featured_image'        => __( 'Album Cover', 'equipment' ),
		'set_featured_image'    => __( 'Set Album Cover', 'equipment' ),
		'remove_featured_image' => __( 'Remove Album Cover', 'equipment' ),
		'use_featured_image'    => __( 'Use as Album Cover', 'equipment' ),
		'insert_into_item'      => __( 'Insert into Equipment', 'equipment' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Item', 'equipment' ),
		'items_list'            => __( 'Equipment list', 'equipment' ),
		'items_list_navigation' => __( 'Equipment list navigation', 'equipment' ),
		'filter_items_list'     => __( 'Filter Equipment list', 'equipment' ),
	);
	$args = array(
		'label'                 => __( 'Equipment', 'equipment' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'services', ' equipment-category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-admin-settings',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'equipment', $args );

}
add_action( 'init', 'cpt_equipment', 1 );

// CPT - Discography
function cpt_discography() {

	$labels = array(
		'name'                  => _x( 'Discography', 'Post Type General Name', 'discography' ),
		'singular_name'         => _x( 'Album', 'Post Type Singular Name', 'discography' ),
		'menu_name'             => __( 'Discography', 'discography' ),
		'name_admin_bar'        => __( 'Album', 'discography' ),
		'archives'              => __( 'Album Archives', 'discography' ),
		'attributes'            => __( 'Album Attributes', 'discography' ),
		'parent_item_colon'     => __( 'Parent Album:', 'discography' ),
		'all_items'             => __( 'All Albums', 'discography' ),
		'add_new_item'          => __( 'Add New Album', 'discography' ),
		'add_new'               => __( 'Add New', 'discography' ),
		'new_item'              => __( 'New Album', 'discography' ),
		'edit_item'             => __( 'Edit Album', 'discography' ),
		'update_item'           => __( 'Update Album', 'discography' ),
		'view_item'             => __( 'View Album', 'discography' ),
		'view_items'            => __( 'View Discography', 'discography' ),
		'search_items'          => __( 'Search Album', 'discography' ),
		'not_found'             => __( 'Not found', 'discography' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'discography' ),
		'featured_image'        => __( 'Album Cover', 'discography' ),
		'set_featured_image'    => __( 'Set Album Cover', 'discography' ),
		'remove_featured_image' => __( 'Remove Album Cover', 'discography' ),
		'use_featured_image'    => __( 'Use as Album Cover', 'discography' ),
		'insert_into_item'      => __( 'Insert into Album', 'discography' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Album', 'discography' ),
		'items_list'            => __( 'Discography list', 'discography' ),
		'items_list_navigation' => __( 'Discography list navigation', 'discography' ),
		'filter_items_list'     => __( 'Filter Discography list', 'discography' ),
	);
	$rewrite = array(
		'slug'                  => 'album',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Album', 'discography' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'services' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-album',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'discography',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'discography', $args );

}
add_action( 'init', 'cpt_discography', 2 );

// CPT - Knowledge Center
function cpt_knowledgecenter() {

	$labels = array(
		'name'                  => _x( 'Queries', 'Post Type General Name', 'knowledgecenter' ),
		'singular_name'         => _x( 'Query', 'Post Type Singular Name', 'knowledgecenter' ),
		'menu_name'             => __( 'Knowledge Center', 'knowledgecenter' ),
		'name_admin_bar'        => __( 'Query', 'knowledgecenter' ),
		'archives'              => __( 'Query Archives', 'knowledgecenter' ),
		'attributes'            => __( 'Query Attributes', 'knowledgecenter' ),
		'parent_item_colon'     => __( 'Parent Query:', 'knowledgecenter' ),
		'all_items'             => __( 'All Queries', 'knowledgecenter' ),
		'add_new_item'          => __( 'Add New Query', 'knowledgecenter' ),
		'add_new'               => __( 'Add New', 'knowledgecenter' ),
		'new_item'              => __( 'New Query', 'knowledgecenter' ),
		'edit_item'             => __( 'Edit Query', 'knowledgecenter' ),
		'update_item'           => __( 'Update Query', 'knowledgecenter' ),
		'view_item'             => __( 'View Query', 'knowledgecenter' ),
		'view_items'            => __( 'View Queries', 'knowledgecenter' ),
		'search_items'          => __( 'Search Query', 'knowledgecenter' ),
		'not_found'             => __( 'Not found', 'knowledgecenter' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'knowledgecenter' ),
		'featured_image'        => __( 'Album Cover', 'knowledgecenter' ),
		'set_featured_image'    => __( 'Set Album Cover', 'knowledgecenter' ),
		'remove_featured_image' => __( 'Remove Album Cover', 'knowledgecenter' ),
		'use_featured_image'    => __( 'Use as Album Cover', 'knowledgecenter' ),
		'insert_into_item'      => __( 'Insert into Query', 'knowledgecenter' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Query', 'knowledgecenter' ),
		'items_list'            => __( 'Knowledge Center list', 'knowledgecenter' ),
		'items_list_navigation' => __( 'Knowledge Center list navigation', 'knowledgecenter' ),
		'filter_items_list'     => __( 'Filter Queries list', 'knowledgecenter' ),
	);
	$rewrite = array(
		'slug'                  => 'knowledge-center',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Query', 'knowledgecenter' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'services' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-lightbulb',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'knowledge-center',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'knowledgecenter', $args );

}
add_action( 'init', 'cpt_knowledgecenter', 3 );

// CTAX - Services
function ctax_service() {

	$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'services' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'services' ),
		'menu_name'                  => __( 'Services', 'services' ),
		'all_items'                  => __( 'All Services', 'services' ),
		'parent_item'                => __( 'Parent Service', 'services' ),
		'parent_item_colon'          => __( 'Parent Service:', 'services' ),
		'new_item_name'              => __( 'New Service Name', 'services' ),
		'add_new_item'               => __( 'Add New Service', 'services' ),
		'edit_item'                  => __( 'Edit Service', 'services' ),
		'update_item'                => __( 'Update Service', 'services' ),
		'view_item'                  => __( 'View Service', 'services' ),
		'separate_items_with_commas' => __( 'Separate Services with commas', 'services' ),
		'add_or_remove_items'        => __( 'Add or remove Services', 'services' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'services' ),
		'popular_items'              => __( 'Popular Services', 'services' ),
		'search_items'               => __( 'Search Services', 'services' ),
		'not_found'                  => __( 'Not Found', 'services' ),
		'no_terms'                   => __( 'No items', 'services' ),
		'items_list'                 => __( 'Services list', 'services' ),
		'items_list_navigation'      => __( 'Services list navigation', 'services' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	register_taxonomy( 'services', array( 'equipment', ' discography', ' knowledgecenter' ), $args );

}
add_action( 'init', 'ctax_service', 0 );

// CTAX - Equipment Categories
function ctax_equipment() {

	$labels = array(
		'name'                       => _x( 'Equipment Categories', 'Taxonomy General Name', 'equipment-category' ),
		'singular_name'              => _x( 'Equipment Category', 'Taxonomy Singular Name', 'equipment-category' ),
		'menu_name'                  => __( 'Equipment Categories', 'equipment-category' ),
		'all_items'                  => __( 'All Equipment Categories', 'equipment-category' ),
		'parent_item'                => __( 'Parent Equipment Category', 'equipment-category' ),
		'parent_item_colon'          => __( 'Parent Equipment Category:', 'equipment-category' ),
		'new_item_name'              => __( 'New Equipment Category Name', 'equipment-category' ),
		'add_new_item'               => __( 'Add New Equipment Category', 'equipment-category' ),
		'edit_item'                  => __( 'Edit Equipment Category', 'equipment-category' ),
		'update_item'                => __( 'Update Equipment Category', 'equipment-category' ),
		'view_item'                  => __( 'View Equipment Category', 'equipment-category' ),
		'separate_items_with_commas' => __( 'Separate Equipment Categories with commas', 'equipment-category' ),
		'add_or_remove_items'        => __( 'Add or remove Equipment Categories', 'equipment-category' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'equipment-category' ),
		'popular_items'              => __( 'Popular Equipment Categories', 'equipment-category' ),
		'search_items'               => __( 'Search Equipment Categories', 'equipment-category' ),
		'not_found'                  => __( 'Not Found', 'equipment-category' ),
		'no_terms'                   => __( 'No Equipment Categories', 'equipment-category' ),
		'items_list'                 => __( 'Equipment Categories list', 'equipment-category' ),
		'items_list_navigation'      => __( 'Equipment Categories list navigation', 'equipment-category' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	register_taxonomy( 'equipment-category', array( 'equipment' ), $args );
}
add_action( 'init', 'ctax_equipment', 0 );

// Change the Enter Title Here text
function cpt_changetitletext($title) {
  $screen = get_current_screen();
  if('equipment' == $screen->post_type) {
    $title = 'Enter equipment name here';
  } elseif('discography' == $screen->post_type) {
    $title = 'Enter album name here';
  } elseif('knowledgecenter' == $screen->post_type) {
    $title = 'Enter question or process name here';
  }
  return $title;
}
add_filter('enter_title_here', 'cpt_changetitletext');
