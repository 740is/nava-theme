<?php
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'title-tag' );
    add_theme_support( 'widgets' );

    function bergmann_theme_scripts() {
        wp_enqueue_style('googleFonts-Nothing_You_Could_Do','https://fonts.googleapis.com/css?family=Nothing+You+Could+Do');

        wp_enqueue_style('normalize-theme-style', get_template_directory_uri(). '/css/normalize.css');
        wp_enqueue_style( 'fontawesomFonts', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css' );

        wp_enqueue_style( 'slick-slider-styling', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
        wp_enqueue_style( 'slick-slider-styling-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
        wp_enqueue_style( 'bergmann_main_styling', get_template_directory_uri() . '/style.css', array(), '1.0.1' );
        
        wp_enqueue_script('slick-slider-script', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('custom-theme-script', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'bergmann_theme_scripts' );

?>