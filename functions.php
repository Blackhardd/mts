<?php

if( !defined( 'MTS_VERSION' ) )
    define( 'MTS_VERSION', '1.0.0' );

if( !defined( 'MTS_THEME_URI' ) )
    define( 'MTS_THEME_URI', get_template_directory_uri() );

if( !defined( 'MTS_THEME_PATH' ) )
    define( 'MTS_THEME_PATH', get_template_directory() );


// Theme includes

require MTS_THEME_PATH . '/inc/customizer.php';
require MTS_THEME_PATH . '/inc/cpt.php';
require MTS_THEME_PATH . '/inc/framework.php';


// Adding theme supports

if( !function_exists( 'mts_theme_setup' ) ){
    function mts_theme_setup(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', array(
            'width'                 => 109,
            'height'                => 36,
            'unlink-homepage-logo'  => true
        ) );
        add_theme_support( 'post-thumbnails' );


        // Registering menus

        register_nav_menus( array(
            'primary-menu' => __( 'Главное меню', 'mts' )
        ) );
    }
}

mts_theme_setup();


// Enqueue theme scripts and styles

add_action( 'wp_enqueue_scripts', 'mts_enqueue_scripts' );

function mts_enqueue_scripts(){
    wp_enqueue_style( 'fonts', MTS_THEME_URI . '/assets/css/fonts.css', [], MTS_VERSION );
    wp_enqueue_style( 'style', get_stylesheet_uri(), ['fonts'], MTS_VERSION );

    wp_enqueue_script( 'front', MTS_THEME_URI . '/assets/js/index.js', ['jquery'], MTS_VERSION, true );
}