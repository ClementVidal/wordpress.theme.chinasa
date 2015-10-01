<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo( 'name' ); ?>
    </title>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php  wp_head(); ?>
</head>

<body ng-app="chinasa">
    <div id="chi-header" class="container">
        <nav class="navbar navbar-light bg-faded" role="navigation">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
            <?php
            $defaults = array(
                'menu'              => 'primary',
                'depth' => 2,
                'menu_class' => 'nav navbar-nav',
                'container' => false,
                'walker'            => new bootstrap_menuwalker()
            );

            wp_nav_menu( $defaults );
        ?>
        </nav>
    </div>
