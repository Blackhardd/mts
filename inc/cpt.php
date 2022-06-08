<?php

// Registering News post type.

add_action( 'init', 'mts_register_news_cpt' );

function mts_register_news_cpt(){
    register_post_type( 'news', array(
        'labels'                => array(
            'name'                  => __( 'Новости', 'mts' ),
            'singular_name'         => __( 'Новость', 'mts' ),
            'menu_name'             => __( 'Новости', 'mts' ),
            'add_new'               => __( 'Создать новую', 'mts' ),
            'add_new_item'          => __( 'Создать новость', 'mts' ),
            'new_item'              => __( 'Новость', 'mts' ),
            'edit_item'             => __( 'Редактировать новость', 'mts' ),
            'view_item'             => __( 'Просмотреть новость', 'mts' ),
            'all_items'             => __( 'Все новости', 'mts' ),
            'search_items'          => __( 'Искать новости', 'mts' ),
            'not_found'             => __( 'Новостей не найдено.', 'mts' )
        ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'supports'              => ['title', 'editor', 'author', 'thumbnail'],
        'menu_icon'             => 'dashicons-text-page'
    ) );
}


// Registering Category taxonomy for News.

add_action( 'init', 'mts_register_news_category_taxonomy' );

function mts_register_news_category_taxonomy(){
    register_taxonomy( 'category', 'news', array(
        'hierarchical'          => true,
        'label'                 => __( 'Категория', 'mts' ),
        'query_var'             => true,
        'has_archive'           => true
    ) );
}