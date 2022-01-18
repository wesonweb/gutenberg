<?php
// register custom posts

add_action( 'init', 'mycustompost_post_init' );
  function recorded_webinar_post_init() {
    $labels = array(
        'name'               => _x( 'mycustompostname', 'post type general name' ),
        'singular_name'      => _x( 'mycustompostname', 'post type singular name' ),
        'menu_name'          => _x( 'mycustompostname', 'admin menu' ),
        'name_admin_bar'     => _x( 'mycustompostname', 'add new on admin bar' ),
        'add_new'            => _x( 'Add new mycustompostname', 'mycustompostname' ),
        'add_new_item'       => __( 'Add a new mycustompostname' ),
        'new_item'           => __( 'New mycustompostname' ),
        'edit_item'          => __( 'Edit mycustompostname' ),
        'view_item'          => __( 'View mycustompostname' ),
        'all_items'          => __( 'All mycustompostname' ),
        'search_items'       => __( 'Search mycustompostname' ),
        'parent_item_colon'  => __( 'Parent mycustompostname:' ),
        'not_found'          => __( 'No mycustompostname found.' ),
        'not_found_in_trash' => __( 'No mycustompostname found in Trash.' )
      );
    $args = array(
        'labels'            => $labels,
        'description'       => __( 'Description.' ),
        'public'            => true,
        'publicly_queryable'=> true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'custom-post-name' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => true,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-format-gallery',
        'show_in_rest'      =>true,
        'supports'          => array( 'title', 'thumbnail', 'editor', 'comments', 'page-attributes' )
      );

      register_taxonomy('custompost_category', array('custompost'), array(
        'hierarchical'        =>  true,
        'labels'              =>  $labels,
        'singular_label'      =>  'category_name',
        'all_items'           =>  'Category',
        'query_var'           =>  true,
        'rewrite'             =>  array('slug' => 'custompost-category'))
      );
      register_post_type( 'mycustompostname', $args );
      flush_rewrite_rules( true );
  }
?>
