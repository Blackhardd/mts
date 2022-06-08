<?php

add_action( 'customize_register', 'mts_customize_register' );

function mts_customize_register( $customizer ){
    $customizer->add_panel( 'footer_panel', array(
        'title'         => __( 'Футер', 'mts' ),
        'priority'      => 150
    ) );

    $customizer->add_section( 'footer_section', array(
        'title'         => __( 'Логотип', 'mts' ),
        'panel'         => 'footer_panel'
    ) );

    $customizer->add_setting( 'footer_logo', array(
        'height'        => 200
    ) );

    $customizer->add_control(
        new WP_Customize_Media_Control( $customizer, 'footer_logo_control', array(
            'mime_type' => 'image',
            'label'     => __( 'Логотип футера', 'mts' ),
            'section'   => 'footer_section',
            'settings'  => 'footer_logo'
        )
    ) );
}