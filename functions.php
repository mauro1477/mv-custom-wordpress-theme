<?php
/**
 * Theme functions and definitions.
 */

define( 'MV_THEME_VERSION', '1.0.0' );

add_action( 'after_setup_theme', 'mv_theme_setup' );
add_action( 'wp_enqueue_scripts', 'mv_theme_enqueue_assets' );
add_action( 'widgets_init', 'mv_theme_widgets_init' );

/**
 * Set up theme defaults and register support for WordPress features.
 */
function mv_theme_setup() {
    load_theme_textdomain( 'mv-custom-theme', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mv-custom-theme' ),
        'footer'  => __( 'Footer Menu', 'mv-custom-theme' ),
    ) );
}

/**
 * Enqueue scripts and styles.
 */
function mv_theme_enqueue_assets() {
    wp_enqueue_style( 'mv-custom-theme-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700&display=swap', array(), MV_THEME_VERSION );
    wp_enqueue_style( 'mv-custom-theme-style', get_stylesheet_uri(), array( 'mv-custom-theme-fonts' ), MV_THEME_VERSION );
}

/**
 * Register widget areas.
 */
function mv_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widgets', 'mv-custom-theme' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Appears in the footer area.', 'mv-custom-theme' ),
        'before_widget' => '<section class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

if ( ! function_exists( 'mv_theme_default_menu' ) ) {
    /**
     * Fallback menu for when no menu is assigned.
     */
    function mv_theme_default_menu() {
        wp_page_menu( array(
            'menu_class'  => 'menu',
            'show_home'   => true,
            'before'      => '',
            'after'       => '',
            'link_before' => '',
            'link_after'  => '',
        ) );
    }
}
