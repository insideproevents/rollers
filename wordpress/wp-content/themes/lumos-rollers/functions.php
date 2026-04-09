<?php
function lumos_rollers_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lumos-rollers'),
        'footer' => __('Footer Menu', 'lumos-rollers'),
    ));
}
add_action('after_setup_theme', 'lumos_rollers_setup');

function lumos_rollers_scripts() {
    wp_enqueue_style('lumos-rollers-style', get_stylesheet_uri());
    wp_enqueue_script('lumos-rollers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'lumos_rollers_scripts');

function lumos_rollers_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'lumos-rollers'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'lumos-rollers'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'lumos_rollers_widgets_init');

add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
});