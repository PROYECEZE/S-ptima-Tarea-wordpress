<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
 wp_enqueue_style('my-theme-extra-style', get_theme_file_uri('extra.css') );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
