<?php

// wordpress shortcode for audio, video, caption, gallery etc.

function basic_shortcode(){
    return "This is my first shortcode";
}
add_shortcode( 'ShortCode', 'basic_shortcode' );


function button_shortcode($atts, $content = null){
    $values = shortcode_atts(array(
        'url' => '#',
    ), $atts );
    return '<a class="button" href="' .esc_attr( $values['url']) .'" target="_blank">' .$content . '</a>';

}
add_shortcode( 'button', 'button_shortcode');