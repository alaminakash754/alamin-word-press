<?php
// sidebar register function
function aw_widgets_register(){
    register_sidebar( array(
        'name' => __('Main Widget Area', 'alaminakash'),
        'id' => 'sidebar-1',
        'description' => __('Appears in the sidebar in blog page and also other page', 'alaminakash'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',

    ));
    register_sidebar( array(
        'name' => __('Footer 1', 'alaminakash'),
        'id' => 'footer-1',
        'description' => __('Appears in the sidebar in blog page and also other page', 'alaminakash'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',

    ));
    register_sidebar( array(
        'name' => __('Footer 2', 'alaminakash'),
        'id' => 'footer-2',
        'description' => __('Appears in the sidebar in blog page and also other page', 'alaminakash'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',

    ));
    register_sidebar( array(
        'name' => __('Footer 3', 'alaminakash'),
        'id' => 'footer-3',
        'description' => __('Appears in the sidebar in blog page and also other page', 'alaminakash'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',

    ));
    register_sidebar( array(
        'name' => __('Homepage Widget', 'alaminakash'),
        'id' => 'home-1',
        'description' => __('Appears in the sidebar in blog page and also other page', 'alaminakash'),
        'before_widget' => '<div class="child_home">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',

    ));
}
add_action( 'widgets_init','aw_widgets_register' );