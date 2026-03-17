<?php
if (!defined('ABSPATH')) exit;

function lobirent_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lobirent'),
    ));
}
add_action('after_setup_theme', 'lobirent_setup');

function lobirent_assets() {
    wp_enqueue_style('lobirent-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'lobirent_assets');

function lobirent_widgets() {
    register_sidebar(array(
        'name' => __('Sidebar', 'lobirent'),
        'id' => 'sidebar-1',
        'before_widget' => '<div class="card block widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'lobirent_widgets');
