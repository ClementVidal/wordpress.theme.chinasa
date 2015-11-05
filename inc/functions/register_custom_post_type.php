<?php

function chinasa_register_custom_post_type() {
  register_post_type( 'portfolio_entry',
    array(
      'labels' => array(
        'name' => __( 'Portfolio entries' ),
        'singular_name' => __( 'Portfolio entry' )
      ),
      'public' => false,
      'publicly_queriable' => true,
      'show_ui' => true,
      'exclude_from_search' => true,
      'show_in_nav_menus' => false,
      'has_archive' => false,
      'rewrite' => false,
      'menu_icon'   => 'dashicons-portfolio',
      'menu_position' => 5,
      'supports' => array('title', 'thumbnail','editor' )
    )
  );

  register_post_type( 'partner',
    array(
      'labels' => array(
        'name' => __( 'Partners' ),
        'singular_name' => __( 'Partner' )
      ),
      'public' => false,
      'publicly_queriable' => true,
      'show_ui' => true,
      'exclude_from_search' => true,
      'show_in_nav_menus' => false,
      'has_archive' => false,
      'rewrite' => false,
      'menu_icon'   => 'dashicons-businessman',
      'menu_position' => 6,
      'supports' => array('title', 'thumbnail','editor' )
    )
  );

register_post_type('skill',
  array(
    'labels' => array(
      'name' => __( 'Skills' ),
      'singular_name' => __( 'Skill' )
    ),
    'public' => false,
    'publicly_queriable' => true,
    'show_ui' => true,
    'exclude_from_search' => true,
    'show_in_nav_menus' => false,
    'has_archive' => false,
    'rewrite' => false,
    'menu_icon'   => 'dashicons-welcome-learn-more',
    'menu_position' => 7,
    'supports' => array('title', 'thumbnail','tags' )
  )
);
}
add_action( 'init', 'chinasa_register_custom_post_type' );
