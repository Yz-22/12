<?php
function malektheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus([
        'primary' => 'القائمة الرئيسية',
    ]);
}
add_action('after_setup_theme', 'malektheme_setup');

function malektheme_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'malektheme_assets');
