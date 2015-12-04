<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo( 'name' ); ?>
    </title>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php  wp_head(); ?>
</head>

<body ng-app="chinasa" ng-controller="bodyController">

    <?php get_template_part( '/inc/site', 'sidebar' ); ?>

    <div id="chi-body">
