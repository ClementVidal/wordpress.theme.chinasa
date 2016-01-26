<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>

    <base href="/">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php  wp_head(); ?>
</head>

<body ng-app="chinasa" ng-controller="bodyController" >

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W4NPCT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W4NPCT');</script>
    <!-- End Google Tag Manager -->

    <?php get_template_part( '/inc/site', 'sidebar' ); ?>

    <div id="chi-body" ng-swipe-left="hideSidebar()" ng-swipe-right="showSidebar()">
