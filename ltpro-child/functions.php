<?php

function ltpro_taobao365_theme_scripts_styles(){
    // version for files
    $ver = filemtime(get_stylesheet_directory().'/css/main.css');

    wp_enqueue_style( 'font-google','//fonts.googleapis.com/css?family=Montserrat&display=swap');

    wp_enqueue_style( 'ltpro-mphc-style', get_stylesheet_directory_uri() .'/css/main.css',array(),$ver);
    wp_enqueue_style( 'ltpro-mphc-responsive', get_stylesheet_directory_uri() .'/css/responsive.css',array(),$ver);

    //wp_enqueue_script("scrollmagic-js", "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js", array(),'2.0.7',true);
    //wp_enqueue_script("ltpro-mphc-js", get_stylesheet_directory_uri()."/js/main.min.js",array(),$ver,true);
}
add_action( 'wp_enqueue_scripts', 'ltpro_taobao365_theme_scripts_styles' , 10);


function ltpro_taobao365_header_footer_elementor_support() {
    add_theme_support( 'header-footer-elementor' );
}

add_action( 'after_setup_theme', 'ltpro_taobao365_header_footer_elementor_support' );



function ltpro_taobao365_theme_widgets_init() {

    register_sidebar(array(
        'name'          => __('Right sidebar', 'ltpro-mphc'),
        'id'            => 'right-sidebar',
        'description'   => __('Right sidebar wigets.', 'ltpro-mphc'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));


}
add_action( 'widgets_init', 'ltpro_taobao365_theme_widgets_init' );