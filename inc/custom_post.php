<?php 
function custom_service() {
    register_post_type('service',
    array(
        'labels' => array(
                'name' => ('Services'),
                'singular_name'=> ('Service'),
                'add_new' => ('Add New Service'),
                'add_new_item' => ('Add New Service'),
                'edit_item' => ('Edit Service'),
                'view_item' => ('View'),
                'not_found' => ('Sorry, we could not find the service you are looking for.'),

        ),
        'menu_icon' => 'dashicons-menu',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 6,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slag' => 'service'),
        'supports' => array('title', 'thumbnail', 'editor','excerpt',),

        )
    );
}

add_action('init', 'custom_service');

function query_post_type($query){
    if(is_category( )){
        $post_type = get_query_var('post_type');
        if($post_type){
            $post_type = $post_type;
        } else {
            $post_type = array ('post', 'service');
            $query -> set('post_type', $post_type);
            return $query;
        }
    }
}
add_filter( 'pre_get_posts', 'query_post_type' );



function custom_slider() {
    register_post_type('slider',
    array(
        'labels' => array(
                'name' => ('Slider'),
                'singular_name'=> ('Slider'),
                'add_new' => ('Add New Slider'),
                'add_new_item' => ('Add New Slider'),
                'edit_item' => ('Edit Slider'),
                'view_item' => ('View'),
                'not_found' => ('Sorry, we could not find the slider you are looking for.'),

        ),
        'menu_icon' => 'dashicons-slides',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 7,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slag' => 'slider'),
        'supports' => array('title', 'thumbnail', 'editor','excerpt',),

        )
    );
}

add_action('init', 'custom_slider');

