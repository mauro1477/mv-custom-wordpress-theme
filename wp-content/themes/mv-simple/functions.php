<?php
/**
 * Functions for the MV Simple theme.
 */

declare(strict_types=1);

if (!function_exists('mv_simple_setup')) {
    function mv_simple_setup(): void
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');

        register_nav_menus([
            'primary' => __('Primary Menu', 'mv-simple'),
            'footer'  => __('Footer Menu', 'mv-simple'),
        ]);
    }
}
add_action('after_setup_theme', 'mv_simple_setup');

if (!function_exists('mv_simple_enqueue_assets')) {
    function mv_simple_enqueue_assets(): void
    {
        wp_enqueue_style('mv-simple-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
        wp_enqueue_style(
            'mv-simple-fonts',
            'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap',
            [],
            null
        );
    }
}
add_action('wp_enqueue_scripts', 'mv_simple_enqueue_assets');

if (!function_exists('mv_simple_widgets_init')) {
    function mv_simple_widgets_init(): void
    {
        register_sidebar([
            'name'          => __('Sidebar', 'mv-simple'),
            'id'            => 'sidebar-1',
            'description'   => __('Add widgets here to appear in the sidebar.', 'mv-simple'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]);
    }
}
add_action('widgets_init', 'mv_simple_widgets_init');
