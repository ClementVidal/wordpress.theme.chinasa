<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function cinasa_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer left sidebar',
		'id'            => 'footer_left',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
        'name'          => 'Footer right sidebar',
        'id'            => 'footer_right',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'cinasa_widgets_init' );
