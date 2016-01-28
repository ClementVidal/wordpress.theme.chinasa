<?php


/**
 * Enqueue scripts.
 */
function chinasa_scripts()
{
    wp_enqueue_script('chi-jquery', get_template_directory_uri().'/vendor/jquery/dist/jquery.js' );
    wp_enqueue_script('chi-tether', get_template_directory_uri().'/vendor/tether/dist/js/tether.min.js' );
    wp_enqueue_script('chi-bootstrap', get_template_directory_uri().'/vendor/bootstrap/dist/js/bootstrap.min.js' );
    wp_enqueue_script('chi-angular', get_template_directory_uri().'/vendor/angular/angular.min.js' );
    wp_enqueue_script('chi-angular-cookies', get_template_directory_uri().'/vendor/angular-cookies/angular-cookies.min.js' );
    wp_enqueue_script('chi-angular-touch', get_template_directory_uri().'/vendor/angular-touch/angular-touch.min.js' );
    wp_enqueue_script('chi-angular-scroll', get_template_directory_uri().'/vendor/angular-scroll/angular-scroll.min.js' );
    wp_enqueue_script('chi-chinasa', get_template_directory_uri().'/js/dist/chinasa.min.js' );
}
add_action('wp_enqueue_scripts', 'chinasa_scripts');

/**
 * Enqueue style.
 */
function chinasa_style()
{
    wp_enqueue_style('chi-style', get_stylesheet_uri());
    wp_enqueue_style('chi-fontawesome', get_template_directory_uri().'/vendor/fontawesome/css/font-awesome.css' );

    wp_enqueue_style('chi-gf-1', 'https://fonts.googleapis.com/css?family=Satisfy');
    wp_enqueue_style('chi-gf-2', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic');



}
add_action('wp_enqueue_scripts', 'chinasa_style');
