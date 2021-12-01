<?php

function organi_setup_theme(){
    load_theme_textdomain('organi', get_theme_file_path().'/language');
    add_theme_support('post-thumbnails', array('post'));
    add_theme_support('title-tag');

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    set_post_thumbnail_size( 1568, 9999 );
    // Set content-width.
    global $content_width;
    if ( ! isset( $content_width ) ) {
        $content_width = 580;
    }

    /**
     * Add post-formats support.
     */
    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );

    register_nav_menus(array(
        'main-menu' => __('Primary Menu','organi'),
    ));
}
add_action('after_setup_theme','organi_setup_theme');



function organic_assets(){

    wp_enqueue_style("google-font", "//fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap", array(),'1.0.0','all');
    wp_enqueue_style("bootstrap-css", get_theme_file_uri().'/css/bootstrap.min.css', array(),'1.0.0','all');
    wp_enqueue_style("fontawesome-css", get_theme_file_uri().'/css/font-awesome.min.css', array(),'1.0.0','all');
    wp_enqueue_style("elegent-css", get_theme_file_uri().'/css/elegant-icons.css', array(),'1.0.0','all');
    wp_enqueue_style("nice-select-css", get_theme_file_uri().'/css/nice-select.css', array(),'1.0.0','all');
    wp_enqueue_style("jquery-ui-css", get_theme_file_uri().'/css/jquery-ui.min.css', array(),'1.0.0','all');
    wp_enqueue_style("owl-carousel-css", get_theme_file_uri().'/css/owl.carousel.min.css', array(),'1.0.0','all');
    wp_enqueue_style("slick-nav-css", get_theme_file_uri().'/css/slicknav.min.css', array(),'1.0.0','all');
    wp_enqueue_style("main-css", get_theme_file_uri().'/css/style.css', array(),'1.0.0','all');
    wp_enqueue_style("organic", get_stylesheet_uri());

    wp_enqueue_script("bootstrap-js", get_theme_file_uri().'/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script("nice-select-js", get_theme_file_uri().'/js/jquery.nice-select.min.js', array('jquery'), null, true);
    wp_enqueue_script("jquery-ui-js", get_theme_file_uri().'/js/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script("slicknav-js", get_theme_file_uri().'/js/jquery.slicknav.js', array('jquery'), null, true);
    wp_enqueue_script("mixitup-js", get_theme_file_uri().'/js/mixitup.min.js', array('jquery'), null, true);
    wp_enqueue_script("owl-carousel-js", get_theme_file_uri().'/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script("main-js", get_theme_file_uri().'/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts','organic_assets');