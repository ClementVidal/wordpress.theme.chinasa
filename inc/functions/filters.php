<?php
/**
 * This filter is called by default menu walker. (wp-includes/nav-menu-template.php)
 * It is used here to add smooth scroll directives
 */
function chinasa_nav_menu_link_attributes( $atts, $item, $args )
{
    $atts['du-smooth-scroll'] = $atts['href'];

    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'chinasa_nav_menu_link_attributes', 10, 3 );
