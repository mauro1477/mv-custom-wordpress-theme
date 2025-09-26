    </main>
    <footer class="site-footer">
        <div class="container inner">
            <div>
                <strong><?php bloginfo( 'name' ); ?></strong>
                <p><?php bloginfo( 'description' ); ?></p>
            </div>
            <?php if ( has_nav_menu( 'footer' ) ) : ?>
                <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer menu', 'mv-custom-theme' ); ?>">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'menu_class'     => 'menu',
                            'container'      => false,
                        )
                    );
                    ?>
                </nav>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
                <div class="footer-widgets">
                    <?php dynamic_sidebar( 'footer-widgets' ); ?>
                </div>
            <?php endif; ?>
            <small>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'mv-custom-theme' ); ?></small>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
