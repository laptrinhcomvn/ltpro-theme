<?php 

// Allow to set logo for site
function ltpro_custom_logo_setup() {
    $defaults = array(
        'height'      => 300,
        'width'       => 300,
        'flex-height' => false,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'ltpro_custom_logo_setup' );

// register feature for website
function ltpro_theme_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-background' );
    add_theme_support ('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'status' ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list','gallery', 'caption') );
    add_theme_support( 'woocommerce' );
    
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-color-palette', array() );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( array(
        'primary' => esc_html__('Menu Chính','laptrinhcomvn'),
    ) );

}
add_action( 'after_setup_theme', 'ltpro_theme_setup' );


function ltpro_theme_scripts_styles(){
    $theme_option = get_option('theme_option');
    
    /**** Theme Specific CSS ****/
    $protocol = is_ssl() ? 'https' : 'http';

    // version for files
    $ver = filemtime(get_template_directory().'/css/style.css');

    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',array(),'4.1.3');
    wp_enqueue_style( 'font-google','//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|Google+Sans:400,500|Product+Sans:400&lang=en');
    wp_enqueue_style( 'fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css',array(),'5.11.2');

    wp_enqueue_style( 'main-style', get_template_directory_uri() .'/css/style.css',array(),$ver);
    wp_enqueue_style( 'responsive', get_template_directory_uri() .'/css/responsive.css',array(),$ver);
    

    /**** Start Jquery ****/
    wp_enqueue_script("webfontloader", "//ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js",array(),'1.5.10',true);
    
    wp_deregister_script('jquery');
    wp_enqueue_script("jquery","//code.jquery.com/jquery-3.3.1.slim.min.js",array(),false,true);

    wp_enqueue_script("popper","//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js",array(),'1.14.3',true);
    wp_enqueue_script("bootstrap", "//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js",array(),'4.1.3',true);
    wp_enqueue_script("ltpro-js", get_template_directory_uri()."/js/ltpro.min.js",array(),$ver,true);

    wp_script_add_data( 'laptrinhcomvn-html5', 'conditional', 'laptrinhcomvn IE 9' );
}

add_action( 'wp_enqueue_scripts', 'ltpro_theme_scripts_styles' , 10);

// add async and defer attributes to enqueued scripts
function shapeSpace_script_loader_tag($tag, $handle) {
	if ($handle === 'ltpro-javascript-handle') {
		if (false === stripos($tag, 'async')) {
			$tag = str_replace(' src', ' async="async" src', $tag);
		}
		if (false === stripos($tag, 'defer')) {
			$tag = str_replace('<script ', '<script defer ', $tag);
		}
	}
	return $tag;
}
add_filter('script_loader_tag', 'shapeSpace_script_loader_tag', 10, 2);

/**
 * Get all necessary theme files
 */
require get_template_directory() . '/inc/ltpro-utils.php';