<?php
if ( ! function_exists( 'august19_setup' ) ) :

function august19_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'august19', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'august19' ),
        'social'  => __( 'Social Links Menu', 'august19' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // august19_setup

add_action( 'after_setup_theme', 'august19_setup' );


if ( ! function_exists( 'august19_init' ) ) :

function august19_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // august19_setup

add_action( 'init', 'august19_init' );


if ( ! function_exists( 'august19_custom_image_sizes_names' ) ) :

function august19_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'august19_custom_image_sizes_names' );
endif;// august19_custom_image_sizes_names



if ( ! function_exists( 'august19_widgets_init' ) ) :

function august19_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Footer widget', 'august19' ),
        'id' => 'footer_widget',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'august19_widgets_init' );
endif;// august19_widgets_init



if ( ! function_exists( 'august19_customize_register' ) ) :

function august19_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'footer_section', array(
        'title' => __( 'Footer section', 'august19' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'footer_img1_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_img1_link', array(
        'label' => __( 'Image 1 Link', 'august19' ),
        'type' => 'url',
        'section' => 'footer_section'
    ));

    $wp_customize->add_setting( 'footer_img1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_img1', array(
        'label' => __( 'Image 1', 'august19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_section'
    ) ) );

    $wp_customize->add_setting( 'footer_img2_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_img2_link', array(
        'label' => __( 'Image 2 Link', 'august19' ),
        'type' => 'url',
        'section' => 'footer_section'
    ));

    $wp_customize->add_setting( 'footer_img2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_img2', array(
        'label' => __( 'Image 2', 'august19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_section'
    ) ) );

    $wp_customize->add_setting( 'footer_img3_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_img3_link', array(
        'label' => __( 'Image 3 Link', 'august19' ),
        'type' => 'url',
        'section' => 'footer_section'
    ));

    $wp_customize->add_setting( 'footer_img3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_img3', array(
        'label' => __( 'Image 3', 'august19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_section'
    ) ) );

    $wp_customize->add_setting( 'footer_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Victor Frankenstein, a young scientist who creates a hideous, sapient creature in an unorthodox scientific experiment.', 'august19' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_text', array(
        'label' => __( 'Footer Text', 'august19' ),
        'type' => 'textarea',
        'section' => 'footer_section'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'august19_customize_register' );
endif;// august19_customize_register


if ( ! function_exists( 'august19_enqueue_scripts' ) ) :
    function august19_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, null, false);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', false, null, false);

    wp_deregister_script( 'script-1' );
    wp_enqueue_script( 'script-1', 'https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U', false, null, false);

    wp_deregister_script( 'nav' );
    wp_enqueue_script( 'nav', get_template_directory_uri() . '/js/nav.js', false, null, false);

    wp_deregister_script( 'slick' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', false, null, true);

    wp_deregister_script( 'aos' );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.min.js', false, null, true);

    wp_deregister_script( 'jquerymaskedinput' );
    wp_enqueue_script( 'jquerymaskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', false, null, true);

    wp_deregister_script( 'script' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', false, null, true);

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, null, true);

    wp_deregister_script( 'bootstrap-1' );
    wp_enqueue_script( 'bootstrap-1', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,600,500,700,800,900|Lato:100,200,300,400,500,600,700,800,900&subset=latin', false, null, 'all');

    wp_deregister_style( 'all' );
    wp_enqueue_style( 'all', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'theme' );
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/theme.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'august19_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>