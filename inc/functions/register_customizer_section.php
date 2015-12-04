<?php

function chinase_theme_customizer($wp_customize)
{
    $wp_customize->add_section('chi_logo_section', array(
        'title' => __('Logo', 'chi'),
        'priority' => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));

    $wp_customize->add_setting( 'chi_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'chi_logo', array(
        'label'    => __( 'Logo', 'chi' ),
        'section'  => 'chi_logo_section',
        'settings' => 'chi_logo',
    ) ) );


    $wp_customize->add_section('chi_social_section', array(
        'title' => __('Social', 'social'),
        'priority' => 30,
        'description' => 'Social settings',
    ));


    // Add setting to existing Site identity
    $wp_customize->add_setting( 'chi_social_twitter' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_social_twitter', array(
        'label'    => __( 'Twitter account', 'twitter' ),
        'section'  => 'chi_social_section',
        'settings' => 'chi_social_twitter',
    ) ) );

    $wp_customize->add_setting( 'chi_social_github' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_social_github', array(
        'label'    => __( 'Github account', 'github' ),
        'section'  => 'chi_social_section',
        'settings' => 'chi_social_github',
    ) ) );


    $wp_customize->add_setting( 'chi_social_linkedin' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_social_linkedin', array(
        'label'    => __( 'Linkedin account', 'linkedin' ),
        'section'  => 'chi_social_section',
        'settings' => 'chi_social_linkedin',
    ) ) );

    $wp_customize->add_setting( 'chi_social_pinterest' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'chi_social_pinterest', array(
        'label'    => __( 'Pinterest account', 'pinterest' ),
        'section'  => 'chi_social_section',
        'settings' => 'chi_social_pinterest',
    ) ) );
}
add_action('customize_register', 'chinase_theme_customizer');
