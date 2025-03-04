<?php
add_theme_support('title-tag');

// Thumbnail image area
add_theme_support( 'post-thumbnails', array('page', 'post'));
add_image_size( 'post-thumbnails', 970 , 350, true );

// excerpt to 40 word

function aw_excerpt_more($more){
    global $post;
    return '<br> <br><a class="readmore" href="'.get_permalink($post -> ID) . '">' . ' Read More' . '</a>';
}
add_filter( 'excerpt_more','aw_excerpt_more' );

function aw_excerpt_length($length){
   return 20;
}
add_filter( 'excerpt_length','aw_excerpt_length' );

