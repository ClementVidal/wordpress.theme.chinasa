<?php

function chinasa_register_menu()
{
    register_nav_menu('primary', __('Primary navigation', 'chinasa'));
    register_nav_menu('secondary', __('Secondary navigation', 'chinasa'));
}

add_action('after_setup_theme', 'chinasa_register_menu');
