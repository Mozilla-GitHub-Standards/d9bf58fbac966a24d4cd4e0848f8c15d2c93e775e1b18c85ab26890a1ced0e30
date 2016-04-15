<?php

/**
 * Register Role post type.
 */

 // Register Custom Post Type
 function role_init() {

     $labels = array(
         'name'                => _x( 'Roles', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Role', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Roles', 'text_domain' ),
         'name_admin_bar'      => __( 'Roles', 'text_domain' ),
         'parent_item_colon'   => __( 'Parent Role:', 'text_domain' ),
         'all_items'           => __( 'All Roles', 'text_domain' ),
         'add_new_item'        => __( 'Add New Role', 'text_domain' ),
         'add_new'             => __( 'Add New', 'text_domain' ),
         'new_item'            => __( 'New Role', 'text_domain' ),
         'edit_item'           => __( 'Edit Role', 'text_domain' ),
         'update_item'         => __( 'Update Role', 'text_domain' ),
         'view_item'           => __( 'View Role', 'text_domain' ),
         'search_items'        => __( 'Search Role', 'text_domain' ),
         'not_found'           => __( 'Not found', 'text_domain' ),
         'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
     );
     $rewrite = array(
         'slug'                => 'role',
         'with_front'          => false,
         'pages'               => true,
         'feeds'               => true,
     );
     $args = array(
         'label'               => __( 'role', 'text_domain' ),
         'description'         => __( 'role posts', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes',  ),
         'taxonomies'          => array(  ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 5,
         'menu_icon'           => 'dashicons-admin-users',
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'query_var'           => 'role',
         'rewrite'             => $rewrite,
         'capability_type'     => 'page',
     );
     register_post_type( 'role', $args );

 }

 // Hook into the 'init' action
 add_action( 'init', 'role_init', 0 );
