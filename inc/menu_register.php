<?php
register_nav_menu( 'main_menu', __('Main Menu', 'alaminakash'));

//walker menu properties
// function aw_nav_description ($item_output, $item, $args){
//     if( !empty ($item -> description)){
//         $item_output = str_replace( $args -> link_after . '</a>' , '<span class="walker_nav">' .
//         $item -> description . '</span>' . $args->link_after . '</a>' , $item_output);
//     }
//     return $item_output;
// }

// add_filter( 'walker_nav_menu_start_el', 'aw_nav_description', 10, 3 );

function aw_nav_description($item_output, $item, $args) {
    if (!empty($item->description)) {
        $item_output = str_replace('</a>', '<span class="walker_nav">' . esc_html($item->description) . '</span></a>', $item_output);
    }
    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'aw_nav_description', 10, 3);
