<!DOCTYPE html>
<html lang="is">
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>

    </head>
    <body>
    <nav id="ib-main-nav-container" class="ib-main-nav-container">

        <div class="ib-main-nav-inner-container">

            <div id="ib-top-nav-search" class="ib-top-nav-search">
                <i class="fas fa-search"></i>
            </div>
            
            <div class="ib-main-nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/nava-logo-text.svg" alt=""></a>
            </div>
            <div class="ib-main-social-hamburger-container">
                <div class="ib-main-social-icons">
                    <a href="https://www.facebook.com/irisbergmannphoto"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/irisbergmann_photography/"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="ib-main-nav-hamburger">
                <i id="mobile-nav-open" class="fas fa-ellipsis-h"></i>
                <!-- <i class="fas fa-ellipsis-v"></i> -->
                </div>
            </div> <?php // .ib-main-social-hamburger-container ?>
        </div> <?php // .ib-main-nav-inner-container ?>
    </nav>
    <div id="ib-main-nav-search" class="ib-main-nav-search ib-input-styling ib-show-hide-search">
        <div class="ib-main-nav-search-container">
            <i id="ib-main-nav-search-close" class="fas fa-times ib-main-nav-search-close"></i>    
            <?php get_search_form(); ?>
        </div>
    </div>
    
    <div id="ib-main-nav" class="ib-main-nav">
        <div class="ib-main-nav-menu-container">
            <i id="ib-main-nav-menu-close" class="fas fa-times ib-main-nav-menu-close"></i>    
            <?php wp_nav_menu('2'); ?>
        </div>
    </div>
    <div class="ib-wrapper">
        