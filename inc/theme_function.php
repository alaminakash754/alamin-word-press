<?php

function aw_customizer_register($wp_customize){
    // Header area function
    $wp_customize->add_section('aw_header_area', array(
        'title' =>__('Header Area', 'alaminakash'),
        'description' => 'you can update logo from here.'
    ));

    $wp_customize->add_setting('aw_logo', array(
        'default' => get_bloginfo( 'template_directory' ). '/img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aw_logo', array(
        'label' => 'Logo Upload',
        'setting' => 'aw_logo',
        'description' => ' If you interested to change or update your logo you can do it',
        'section' => 'aw_header_area'
    )));

    // Menu position option
    $wp_customize->add_section('aw_menu_option', array(
        'title' => __('Menu Position Option', 'alaminakash'),
       'description' => 'you can change menu position from here.'
    ) );
    $wp_customize->add_setting('aw_menu_position', array(
        'default'=> 'right_menu'
    ));
    $wp_customize-> add_control('aw_menu_position', array(
        'label'=> 'Menu Position',
        'description' => 'Select Your Menu Position',
        'setting' => 'aw_menu_position',
        'section' => 'aw_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));

    // Footer option
    $wp_customize->add_section('aw_footer_option', array(
        'title' => __('Footer Option', 'alaminakash'),
       'description' => 'you can change or update footer text from here.'
    ) );
    $wp_customize->add_setting('aw_footer_section', array(
        'default'=> '&copy; Copyright 2025 | Alamin BD' ,
    ));
    $wp_customize-> add_control('aw_footer_section', array(
        'label'=> 'Copyright Text',
        'description' => 'You can change or update footer text from here',
        'setting' => 'aw_footer_section',
        'section' => 'aw_footer_option',
    ));

    // Theme color customization

    $wp_customize -> add_section('aw_colors', array(
        'title' => __('Theme Color', 'alaminakash'),
        'description' => 'If need you can change your theme color.',
    ));
    $wp_customize-> add_setting ('aw_bg_color', array(
        'default' => '#ffffff',
    ));
    $wp_customize -> add_control( new WP_Customize_Color_Control($wp_customize, 'aw_bg_color', array( 
        'label' => 'Background Color',
        'section' => 'aw_colors',
        'settings' => 'aw_bg_color',

    )));

    $wp_customize-> add_setting ('aw_primary_color', array(
        'default' => '#ea1a70',
    ));
    $wp_customize -> add_control( new WP_Customize_Color_Control($wp_customize, 'aw_primary_color', array( 
        'label' => 'Primary Color',
        'section' => 'aw_colors',
        'settings' => 'aw_primary_color',

    )));


}
add_action( 'customize_register', 'aw_customizer_register');

//  Theme color function
function aw_theme_color_customize(){
    ?>
    <style>
        body{background: <?php echo get_theme_mod( 'aw_bg_color' ); ?>}
        :root{ --pink: <?php echo get_theme_mod( 'aw_primary_color' ); ?>}
    </style>
    <?php
}
add_action( 'wp_head','aw_theme_color_customize' );
