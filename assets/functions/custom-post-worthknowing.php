<?php
add_action( 'init', 'create_custom_worthknowing_post_type' );
/**
 * Register a supplier post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_worthknowing_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'VÆRD AT VIDE', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'VÆRD AT VIDE', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'VÆRD AT VIDE', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'VÆRD AT VIDE', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'VÆRD AT VIDE', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New VÆRD AT VIDE', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New VÆRD AT VIDE', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit VÆRD AT VIDE', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View VÆRD AT VIDE', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All VÆRD AT VIDE', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search VÆRD AT VIDE', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent VÆRD AT VIDE:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No VÆRD AT VIDE found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No VÆRD AT VIDE found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'vaerd-at-vide' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_icon'          => 'dashicons-book',
  'taxonomies'         => array('category', 'post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'worthknowing', $args );
}