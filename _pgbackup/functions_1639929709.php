<?php
if ( ! function_exists( 'pinegrow_conversion_setup' ) ) :

function pinegrow_conversion_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'pg_conversion', get_template_directory() . '/languages' );
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
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'pinegrow_conversion' ),
        'social'  => __( 'Social Links Menu', 'pinegrow_conversion' ),
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
endif; // pinegrow_conversion_setup

add_action( 'after_setup_theme', 'pinegrow_conversion_setup' );


if ( ! function_exists( 'pinegrow_conversion_init' ) ) :

function pinegrow_conversion_init() {

    
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
endif; // pinegrow_conversion_setup

add_action( 'init', 'pinegrow_conversion_init' );


if ( ! function_exists( 'pinegrow_conversion_custom_image_sizes_names' ) ) :

function pinegrow_conversion_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'pinegrow_conversion_custom_image_sizes_names' );
endif;// pinegrow_conversion_custom_image_sizes_names



if ( ! function_exists( 'pinegrow_conversion_widgets_init' ) ) :

function pinegrow_conversion_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pinegrow_conversion_widgets_init' );
endif;// pinegrow_conversion_widgets_init



if ( ! function_exists( 'pinegrow_conversion_customize_register' ) ) :

function pinegrow_conversion_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'pinegrow_conversion_customize_register' );
endif;// pinegrow_conversion_customize_register


if ( ! function_exists( 'pinegrow_conversion_enqueue_scripts' ) ) :
    function pinegrow_conversion_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'pg_conversion-popper' );
    wp_enqueue_script( 'pg_conversion-popper', get_template_directory_uri() . '/assets/js/popper.min.js', false, null, true);

    wp_deregister_script( 'pg_conversion-bootstrap' );
    wp_enqueue_script( 'pg_conversion-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'pg_conversion-bootstrap' );
    wp_enqueue_style( 'pg_conversion-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'pg_conversion-blocks' );
    wp_enqueue_style( 'pg_conversion-blocks', get_template_directory_uri() . '/blocks.css', false, null, 'all');

    wp_deregister_style( 'pg_conversion-style' );
    wp_enqueue_style( 'pg_conversion-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pinegrow_conversion_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */

/* Creating Editor Blocks with Pinegrow */

function pinegrow_conversion_blocks_init() {
    // Register blocks. Don't edit anything between the following comments.
    /* Pinegrow generated Register Pinegrow Blocks Begin */
    require_once 'blocks/hero/hero_register.php';

    /* Pinegrow generated Register Pinegrow Blocks End */
}
add_action('init', 'pinegrow_conversion_blocks_init');

/* End of creating Editor Blocks with Pinegrow */


/* Register Blocks Categories */

function pinegrow_conversion_register_blocks_categories( $categories ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Register Blocks Category Begin */

$categories = array_merge( $categories, array( array(
        'slug' => 'pagesections',
        'title' => __( 'Page Sections', 'pinegrow_conversion' ),
        'icon' => 'wordpress'
    ) ) );

    /* Pinegrow generated Register Blocks Category End */
    
    return $categories;
}
add_action( version_compare('5.8', get_bloginfo('version'), '>=' ) ? 'block_categories_all' : 'block_categories', 'pinegrow_conversion_register_blocks_categories');

/* End of registering Blocks Categories */

?>