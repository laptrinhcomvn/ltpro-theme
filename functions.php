<?php 


function ltpro_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => false,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'ltpro_custom_logo_setup' );

function ltpro_get_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( has_custom_logo() ) {
        return esc_url( $logo[0] );
    }
    return '';
}

function ltpro_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Top Most Bar', 'ltmclassvn' ),
        'id'            => 'topbar',
        'description' => 'Please drop widget here to display it in Top Most Bar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar(array(
        'name'          => __('Footer column 1', 'ltmclassvn'),
        'id'            => 'footer-colum1',
        'description'   => __('Footer column 1 wigets.', 'ltmclassvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('Footer column 2', 'ltmclassvn'),
        'id'            => 'footer-colum2',
        'description'   => __('Footer column 2 wigets.', 'ltmclassvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('Footer column 3', 'ltmclassvn'),
        'id'            => 'footer-colum3',
        'description'   => __('Footer column 3 wigets.', 'ltmclassvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer column 4', 'ltmclassvn'),
        'id'            => 'footer-colum4',
        'description'   => __('Footer column 4 wigets.', 'ltmclassvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('bottom-bar', 'ltmclassvn'),
        'id'            => 'bottom-bar',
        'description'   => __('Footer bottom-bar wigets.', 'ltmclassvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('right-side-bar', 'ltmclassvn'),
        'id'            => 'right-side-bar',
        'description'   => __('Right side bar', 'ltmclassvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
}
add_action( 'widgets_init', 'ltmclassvn_theme_widgets_init' );