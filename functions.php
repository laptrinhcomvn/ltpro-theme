<?php 
function ltpro_pagination_rewrite() {
  add_rewrite_rule(get_option('category_base').'/page/?([0-9]{1,})/?$', 'index.php?pagename='.get_option('category_base').'&paged=$matches[1]', 'top');
}
add_action('init', 'ltpro_pagination_rewrite');


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
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video', 'quote', 'link', 'status' ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
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
    
    wp_enqueue_style( 'font-google','//fonts.googleapis.com/css?family=Google+Sans:100,400,500,700|Product+Sans:400,500,700|Roboto:400,500,700&lang=en');
    wp_enqueue_style( 'bootstrap', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css',array(),'4.4.1');
    wp_enqueue_style( 'fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css',array(),'5.12.0-1');

    wp_enqueue_style( 'main-style', get_template_directory_uri() .'/css/style.css',array(),$ver);
    wp_enqueue_style( 'responsive', get_template_directory_uri() .'/css/responsive.css',array(),$ver);

    /**** Start Jquery ****/
    wp_enqueue_script("webfontloader", "//cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js",array(),'1.6.28',true);

    wp_deregister_script('jquery');
    wp_enqueue_script("jquery","//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js",array(),'3.4.1',true);
    wp_enqueue_script("popper","//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js",array(),'1.16.0',true);
    wp_enqueue_script("bootstrap", "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js",array(),'4.4.1',true);
    wp_enqueue_script("ltpro-js", get_template_directory_uri()."/js/ltpro.min.js",array(),$ver,true);

    wp_script_add_data( 'laptrinhcomvn-html5', 'conditional', 'laptrinhcomvn IE 9' );
}

add_action( 'wp_enqueue_scripts', 'ltpro_theme_scripts_styles' , 1);

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

    register_sidebar( array(
        'name'          => __( 'Primary Menu', 'laptrinhcomvn' ),
        'id'            => 'primarymenu',
        'description' => 'Please drop widget here to display it in Primary Menu',
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
        'name'          => __('Bottom bar', 'laptrinhcomvn'),
        'id'            => 'bottom-bar',
        'description'   => __('Footer bottom-bar wigets.', 'laptrinhcomvn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

}
add_action( 'widgets_init', 'ltpro_theme_widgets_init' );

/**
 * Get all necessary theme files
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/classes/ltpro-utils.php';
require get_template_directory() . '/classes/ltpro-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

// Custom comment walker.
require get_template_directory() . '/classes/ltpro-walker-comment.php';

// Custom page walker.
require get_template_directory() . '/classes/ltpro-walker-page.php';