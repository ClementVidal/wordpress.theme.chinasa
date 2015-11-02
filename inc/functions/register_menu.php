<?php

if (!function_exists('chinasa_setup'))
{
    function chinasa_setup()
    {
        register_nav_menu('primary', __('Primary navigation', 'chinasa'));
    }
}
add_action('after_setup_theme', 'chinasa_setup');
