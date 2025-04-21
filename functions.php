<?php 
/*
* my theme function
*/
// all default theme function is here
include_once('inc/default.php');


// theme css and jquery file calling
include_once('inc/enqueue.php');


// Adding custom post
include_once('inc/custom_post.php');


// theme function
include_once('inc/theme_function.php');


// menu register
include_once('inc/menu_register.php');

// Widgets register
include_once('inc/widgets_register.php');

// Shortcode for development
include_once('inc/shortcode.php');


// Login enqueue register
include_once('inc/login-enqueue.php');


function alaminwordpress_wordCount_heading($heading){
    
    $heading = "Total Words";
    // $heading = strtoupper($heading);
    return $heading;
}
add_filter( 'wordCount_heading', 'alaminwordpress_wordCount_heading' );



function alaminwordpress_wordCount_tag($tag){
    return "h1";
}
add_filter( 'wordCount_tag', 'alaminwordpress_wordCount_tag' );


function alaminwordpress_readingtime_tag($tag){
    return "i";
}
add_filter('wordCount_readingtime_tag', 'alaminwordpress_readingtime_tag' );

function alaminwordpress_articlescount_tag($tag){
    return "h2";
}
add_filter('articlescount_tag', 'alaminwordpress_articlescount_tag' );
