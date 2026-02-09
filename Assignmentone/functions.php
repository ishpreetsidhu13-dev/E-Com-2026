<?php


// Main setup stuff
function ao_setup() {
    add_theme_support('title-tag'); 
    register_nav_menus(array('primary' => 'Main Menu')); // nav
}
add_action('after_setup_theme', 'ao_setup');

// Load styles
function ao_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    // Theme stylesheet
    wp_enqueue_style('ao-style', get_stylesheet_uri());
   
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
}
add_action('wp_enqueue_scripts', 'ao_scripts');

// Sidebar
function ao_widgets_init() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'ao_widgets_init');


function ao_excerpt_len($len) { return 40; }
add_filter('excerpt_length', 'ao_excerpt_len');

// 
function ao_excerpt_more($more) { return '...'; }
add_filter('excerpt_more', 'ao_excerpt_more');

