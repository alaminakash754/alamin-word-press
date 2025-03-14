<?php
add_theme_support('title-tag');

// Thumbnail image area
add_theme_support( 'post-thumbnails', array('page', 'post', 'service','slider',));
add_image_size( 'service', 400, 350, true );
add_image_size( 'slider', 1200, 300, true );
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

// pagenav function

function aw_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query -> max_num_pages;
    if(!$current = get_query_var( 'paged' )) $current = 1;
    $args['base'] = str_replace(99999999, '%#%', get_pagenum_link( 99999999 ));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1 ;
    $args['prev_text'] = '<<';
    $args['next_text'] = '>>';
    if($max >1) echo '</pre>
    <div class="aw_pagenav">';
    if ($total ==1 && $max > 1) $pages = '<p class="pages"> Page ' . $current . '<span> of </span>' . $max . '</p>';
    echo $pages . paginate_links( $args );
    if ($max > 1) echo '</div><pre>';


}

?>