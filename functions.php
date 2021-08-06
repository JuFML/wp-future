<?php 

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_image_size('sidebar-big', 350, 175);
add_image_size('sidebar-thumb', 64, 64, array('left', 'top'));

function wpfuture_register_menu() {
    register_nav_menu('main', 'Main menu');
}

add_action('after_setup_theme', 'wpfuture_register_menu');

function wpfuture_widgets_init() {
    register_sidebar(array(
        'name' => 'Hidden menu widgets',
        'id' => 'hidden_menu',
        'before_widget' => '<section>',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
};

add_action('widgets_init', 'wpfuture_widgets_init');

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

function wpfuture_posts_link_next() {
    return 'class = "button big previous"';
}

add_filter('next_posts_link_attributes', 'wpfuture_posts_link_next');

function wpfuture_posts_link_previous() {
    return 'class = "button big next"';
}

add_filter('previous_posts_link_attributes', 'wpfuture_posts_link_previous');

?>


