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

function ltpro_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Top Most Bar', 'laptrinhcomvn' ),
        'id'            => 'topbar',
        'description' => 'Please drop widget here to display it in Top Most Bar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar(array(
        'name'          => __('Footer column 1', 'laptrinhcomvn'),
        'id'            => 'footer-colum1',
        'description'   => __('Footer column 1 wigets.', 'laptrinhcomvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('Footer column 2', 'laptrinhcomvn'),
        'id'            => 'footer-colum2',
        'description'   => __('Footer column 2 wigets.', 'laptrinhcomvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('Footer column 3', 'laptrinhcomvn'),
        'id'            => 'footer-colum3',
        'description'   => __('Footer column 3 wigets.', 'laptrinhcomvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer column 4', 'laptrinhcomvn'),
        'id'            => 'footer-colum4',
        'description'   => __('Footer column 4 wigets.', 'laptrinhcomvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('bottom-bar', 'laptrinhcomvn'),
        'id'            => 'bottom-bar',
        'description'   => __('Footer bottom-bar wigets.', 'laptrinhcomvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('right-side-bar', 'laptrinhcomvn'),
        'id'            => 'right-side-bar',
        'description'   => __('Right side bar', 'laptrinhcomvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
}
add_action( 'widgets_init', 'ltpro_theme_widgets_init' );