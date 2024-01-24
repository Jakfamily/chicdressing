<?php

// Enqueue parent theme style
add_action('wp_enqueue_scripts', 'chicdressing_enqueue_styles');

function chicdressing_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Disable Google Fonts and Fontello Icons
add_action('wp_enqueue_scripts', 'custom_dequeue_styles');

function custom_dequeue_styles() {
    wp_deregister_style('ashe-playfair-font');
    wp_deregister_style('ashe-opensans-font');
    wp_deregister_style('ashe-kalam-font');
    wp_deregister_style('ashe-rokkitt-font');
    wp_deregister_style('fontello', get_theme_file_uri('/assets/css/fontello.css'));
}
