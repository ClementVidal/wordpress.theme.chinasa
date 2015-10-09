<?php

function chinasa_register_custom_post_type() {
  register_post_type( 'portfolio_entry',
    array(
      'labels' => array(
        'name' => __( 'Portfolio entries' ),
        'singular_name' => __( 'Portfolio entry' )
      ),
      'public' => true,
      'menu_icon'   => 'dashicons-portfolio',
      'menu_position' => 5
    )
  );

  register_post_type( 'partner',
    array(
      'labels' => array(
        'name' => __( 'Partners' ),
        'singular_name' => __( 'Partner' )
      ),
      'public' => true,
      'menu_icon'   => 'dashicons-businessman',
      'menu_position' => 6
    )
  );
}


add_action( 'init', 'chinasa_register_custom_post_type' );
