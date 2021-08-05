<?php 

add_theme_support('title-tag');
add_theme_support('post_thumbnails');

function wpfuture_styles() {
    wp_enqueue_style( 'style_css', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style( 'fontawesome_css', get_stylesheet_directory_uri().'/assets/css/fontawesome-all.min.css');
    wp_enqueue_style( 'google_fonts','https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Raleway:400,800,900');
}

add_action('wp_enqueue_scripts', 'wpfuture_styles');

function wpfuture_scripts() {
    wp_enqueue_script( 'browser_js', get_template_directory_uri().'/assets/js/browser.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'breakpoints_js', get_template_directory_uri().'/assets/js/breakpoints.min.js', array(), '', true );
    wp_enqueue_script( 'util_js', get_template_directory_uri().'/assets/js/util.js', array(), '', true );
    wp_enqueue_script( 'main_js', get_template_directory_uri().'/assets/js/main.js', array(), '', true );
};

add_action('wp_enqueue_scripts', 'wpfuture_scripts');

?>


