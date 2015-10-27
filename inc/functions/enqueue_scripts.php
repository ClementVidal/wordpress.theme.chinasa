<?php


/**
 * Enqueue scripts.
 */
function chinasa_scripts()
{
    wp_enqueue_script('chi-jquery', get_template_directory_uri().'/vendor/jquery/dist/jquery.js' );
    wp_enqueue_script('chi-bootstrap', get_template_directory_uri().'/vendor/bootstrap/dist/js/bootstrap.js' );
    wp_enqueue_script('chi-angularjs', get_template_directory_uri().'/vendor/angular/angular.js' );
    wp_enqueue_script('chi-chinasa', get_template_directory_uri().'/js/release/chinasa.js' );
}
add_action('wp_enqueue_scripts', 'chinasa_scripts');

/**
 * Enqueue style.
 */
function chinasa_style()
{
    wp_enqueue_style('chinasa-style', get_stylesheet_uri());
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/vendor/fontawesome/css/font-awesome.css' );

    wp_register_style('wpb-googleFonts', 'http://fonts.googleapis.com/css?family=Noto+Serif');
    wp_enqueue_style('wpb-googleFonts');
}
add_action('wp_enqueue_scripts', 'chinasa_style');
