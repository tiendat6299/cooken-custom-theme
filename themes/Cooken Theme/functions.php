<?php

function cooken_files() {
    wp_enqueue_style( 'bootstrap@5.1.0','//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' );
    wp_register_style( 'cooken_main_styles', get_stylesheet_uri() );
    wp_enqueue_style( 'cooken_main_styles');
}

add_action('wp_enqueue_scripts', 'cooken_files');