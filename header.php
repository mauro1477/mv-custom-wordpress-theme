<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container inner">
        <div class="branding">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>
        </div>
        <nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'mv-custom-theme' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'menu',
                    'container'      => false,
                    'fallback_cb'    => 'mv_theme_default_menu',
                )
            );
            ?>
        </nav>
    </div>
</header>
<main id="primary" class="site-main">
