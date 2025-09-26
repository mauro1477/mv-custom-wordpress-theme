<?php
/**
 * Theme header.
 *
 * @package MV_Simple
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site">
    <header class="site-header">
        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p class="site-description"><?php bloginfo('description'); ?></p>
    </header>
    <nav class="site-navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'mv-simple'); ?>">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => '',
            'fallback_cb'    => static function (): void {
                echo '<ul><li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'mv-simple') . '</a></li></ul>';
            },
        ]);
        ?>
    </nav>
