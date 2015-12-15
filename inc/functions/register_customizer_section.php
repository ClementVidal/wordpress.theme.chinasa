<?php

function chinase_theme_customizer($wp_customize)
{
    $wp_customize->add_section('chi_landing_page_section', array(
        'title' => __('Landing page', 'chi'),
        'priority' => 30,
        'description' => 'Settings related to the landing page',
    ));

    $wp_customize->add_setting( 'chi_landing_page_title' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_landing_page_title', array(
        'label'    => __( 'Titre', 'chi' ),
        'section'  => 'chi_landing_page_section',
        'settings' => 'chi_landing_page_title',
    ) ) );

    $wp_customize->add_setting( 'chi_landing_page_subtitle' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_landing_page_subtitle', array(
        'label'    => __( 'Sous titre', 'chi' ),
        'section'  => 'chi_landing_page_section',
        'settings' => 'chi_landing_page_subtitle',
    ) ) );

    $wp_customize->add_setting( 'chi_landing_page_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'chi_logo', array(
        'label'    => __( 'Logo', 'chi' ),
        'section'  => 'chi_landing_page_section',
        'settings' => 'chi_landing_page_logo',
    ) ) );

    $wp_customize->add_setting( 'chi_landing_page_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'chi_image', array(
        'label'    => __( 'Image', 'chi' ),
        'section'  => 'chi_landing_page_section',
        'settings' => 'chi_landing_page_image',
    ) ) );



    $wp_customize->add_section('chi_social_section', array(
        'title' => __('Social', 'chi'),
        'priority' => 30,
        'description' => 'Social settings',
    ));


    // Add setting to existing Site identity
    $wp_customize->add_setting( 'chi_social_twitter' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_social_twitter', array(
        'label'    => __( 'Twitter account', 'chi' ),
        'section'  => 'chi_social_section',
        'settings' => 'chi_social_twitter',
    ) ) );

    $wp_customize->add_setting( 'chi_social_github' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_social_github', array(
        'label'    => __( 'Github account', 'chi' ),
        'section'  => 'chi_social_section',
        'settings' => 'chi_social_github',
    ) ) );


    $wp_customize->add_setting( 'chi_social_linkedin' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_social_linkedin', array(
        'label'    => __( 'Linkedin account', 'chi' ),
        'section'  => 'chi_social_section',
        'settings' => 'chi_social_linkedin',
    ) ) );

    $wp_customize->add_setting( 'chi_social_pinterest' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_social_pinterest', array(
        'label'    => __( 'Pinterest account', 'chi' ),
        'section'  => 'chi_social_section',
        'settings' => 'chi_social_pinterest',
    ) ) );
}
add_action('customize_register', 'chinase_theme_customizer');
