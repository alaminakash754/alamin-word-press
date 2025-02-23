<?php 
/*
* my theme function
*/
// theme title
add_theme_support('title-tag');

// theme css and jquery file calling
function css_js_file_calling(){
    wp_enqueue_style( 'aw-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.0', 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('custom');

    // jquery
    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.3.0', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');

}
add_action( 'wp_enqueue_scripts', 'css_js_file_calling');

// google font enqueue
function aw_add_google_fonts(){
    wp_enqueue_style('aw_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap" rel="stylesheet', false);
}
add_action( 'wp_enqueue_scripts', 'aw_add_google_fonts');



// theme function
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
    $wp_customize->add_section('aw_menu_option', )
}
add_action( 'customize_register', 'aw_customizer_register');

// menu register
register_nav_menu( 'main_menu', __('Main Menu', 'alaminakash'));