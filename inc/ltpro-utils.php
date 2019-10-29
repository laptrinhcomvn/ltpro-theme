<?php

//Limit the excerpt by number of characters but do NOT truncate the last word.
function ltpro_get_excerpt($limit = 200, $source = null, $readmore = false){

    $excerpt = $source == "content" ? get_the_content() : get_the_excerpt();
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));

    if($readmore) {
        $excerpt = $excerpt.'... <a href="'.get_permalink(get_the_ID()).'">'.__('Đọc thêm', 'laptrinhcomvn').'</a>';
    }
    return $excerpt;
}

// display the custom logo for the site
function ltpro_get_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $link = '';
    if ( has_custom_logo() ) {
        
        $link = esc_url( $logo[0] );
    }
    echo $link;
}
