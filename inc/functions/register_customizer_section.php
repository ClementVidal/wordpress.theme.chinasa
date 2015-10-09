<?php

function themeslug_theme_customizer($wp_customize)
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
}
add_action('customize_register', 'themeslug_theme_customizer');
