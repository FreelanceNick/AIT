<?php

    function nsaveleski_theme_support(){

        $defaults = array(
            'height'        =>  84,
            'width'         =>  160,
            'flex-height'   => true,
            'flex-width'    => true,
            'header-text'   => array( 'site-title', 'site-description' ),
        );


        // Adds dynamic title tag support
        add_theme_support('title-tag');

        add_theme_support( 'custom-logo', $defaults );
    }

    add_action('after_setup_theme', 'nsaveleski_theme_support');


    function nsaveleski_register_styles(){

        wp_enqueue_style( 'naveleski-theme-styles', get_template_directory_uri() . "/assets/css/main.css", array('naveleski-bootstrap'), '1.0', 'all');
        wp_enqueue_style( 'naveleski-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap-grid.min.css", array(), '1.0', 'all');
        wp_enqueue_style( 'naveleski-swiper', "https://unpkg.com/swiper@8/swiper-bundle.min.css", array(), '1.0', 'all');
    }

    add_action( 'wp_enqueue_scripts', 'nsaveleski_register_styles');


    function nsaveleski_register_scripts(){
        wp_enqueue_script('nsaveleski-swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '8.0', true);
        wp_enqueue_script('nsaveleski-slider', get_template_directory_uri() . './assets/js/swiper.js', array(), '1.0', true);
        wp_enqueue_script('nsaveleski-primary', get_template_directory_uri() . './assets/js/app.js', array(), '1.0', true);




        wp_register_script('font-awesome', 'https://kit.fontawesome.com/903db998e5.js', array(), '6.0', true);
        wp_enqueue_script('font-awesome');
        wp_script_add_data( 'font-awesome', array( 'crossorigin' ), array( 'anonymous' ));
    }

    add_action( 'wp_enqueue_scripts', 'nsaveleski_register_scripts');


    /* Navigation */
    function register_navigation() {
        $locations = array(
            'primary' => "Primary Menu",
            'footer'  => "Footer Menu"
        );

        register_nav_menus($locations);
    }

    add_action('init', 'register_navigation');

    
?>