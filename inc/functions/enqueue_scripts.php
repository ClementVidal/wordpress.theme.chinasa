<?php


/**
 * Enqueue scripts.
 */
function chinasa_scripts()
{
    wp_enqueue_script('jquery', get_template_directory_uri().'/vendor/jquery/dist/jquery.js' );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/vendor/bootstrap/dist/js/bootstrap.js' );
    wp_enqueue_script('angularjs', get_template_directory_uri().'/vendor/angular/angular.js' );
    wp_enqueue_script('chinasa', get_template_directory_uri().'/js/chinasa.js' );
}
add_action('wp_enqueue_scripts', 'chinasa_scripts');

/**
 * Enqueue style.
 */
function chinasa_style()
{
    wp_enqueue_style('chinasa-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/vendor/bootstrap/dist/css/bootstrap.css' );

    wp_register_style('wpb-googleFonts', 'http://fonts.googleapis.com/css?family=Noto+Serif');
    wp_enqueue_style('wpb-googleFonts');
}
add_action('wp_enqueue_scripts', 'chinasa_style');
