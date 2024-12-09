<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
    wp_enqueue_style('normalize', get_theme_file_uri('/css/normalize.css') );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function portfolio_customizer_settings($wp_customize) {
    //section
    $wp_customize->add_section('portfolio_settings', array(
        'title' => __('Portfolio Settings', 'theme-textdomain')
    ));

    //  name setting
    $wp_customize->add_setting('portfolio_name', array(
        'default' => 'EZEQUIEL BLANCO',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('portfolio_name', array(
        'label' => __('Name', 'theme-textdomain'),
        'section' => 'portfolio_settings',
        'type' => 'text',
    ));

    // titles setting
    $wp_customize->add_setting('portfolio_titles', array(
        'default' => array('Diseñador UI/UX', 'Pintor(retratos)', 'Front-end developer'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('portfolio_titles', array(
        'label' => __('Titles (comma-separated)', 'theme-textdomain'),
        'section' => 'portfolio_settings',
        'type' => 'textarea',
    ));

    // description setting
    $wp_customize->add_setting('portfolio_description', array(
        'default' => 'Este es mi portfolio y CV hecho en Figma, acá puedes ver mi estilo de prototipado a la hora de diseñar interfaces.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('portfolio_description', array(
        'label' => __('Description', 'theme-textdomain'),
        'section' => 'portfolio_settings',
        'type' => 'textarea',
    ));

    // greeting setting
    $wp_customize->add_setting('portfolio_greeting', array(
        'default' => '¡Espero te guste!',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('portfolio_greeting', array(
        'label' => __('Greeting', 'theme-textdomain'),
        'section' => 'portfolio_settings',
        'type' => 'text',
    ));
}
add_action('customize_register', 'portfolio_customizer_settings');