<?php

function chinasa_register_custom_post_type() {
  register_post_type( 'portfolio_entry',
    array(
      'labels' => array(
        'name' => __( 'Portfolio entries' ),
        'singular_name' => __( 'Portfolio entry' )
      ),
      'public' => true,
      'menu_position' => 5
    )
  );
}


add_action( 'init', 'chinasa_register_custom_post_type' );
