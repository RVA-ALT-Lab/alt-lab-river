<?php
/**
 * Custom post types
 *
 * @package understrap
 */

//aside custom post type

// Register Custom Post Type aside
// Post Type Key: aside

function create_aside_cpt() {

  $labels = array(
    'name' => __( 'Asides', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Aside', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Aside', 'textdomain' ),
    'name_admin_bar' => __( 'Aside', 'textdomain' ),
    'archives' => __( 'Aside Archives', 'textdomain' ),
    'attributes' => __( 'Aside Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Aside:', 'textdomain' ),
    'all_items' => __( 'All Asides', 'textdomain' ),
    'add_new_item' => __( 'Add New Aside', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Aside', 'textdomain' ),
    'edit_item' => __( 'Edit Aside', 'textdomain' ),
    'update_item' => __( 'Update Aside', 'textdomain' ),
    'view_item' => __( 'View Aside', 'textdomain' ),
    'view_items' => __( 'View Asides', 'textdomain' ),
    'search_items' => __( 'Search Asides', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into aside', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this aside', 'textdomain' ),
    'items_list' => __( 'Aside list', 'textdomain' ),
    'items_list_navigation' => __( 'Aside list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Aside list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'aside', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'aside', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_aside_cpt', 0 );