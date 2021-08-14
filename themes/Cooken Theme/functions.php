<?php

function cooken_files() {
    wp_register_style( 'cooken_main_styles', get_stylesheet_uri() );
    wp_enqueue_style( 'cooken_main_styles');
}

add_action('wp_enqueue_scripts', 'cooken_files');