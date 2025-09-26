<?php
/**
 * Theme footer.
 *
 * @package MV_Simple
 */
?>
    <footer class="site-footer">
        <p>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>.</p>
        <p><?php esc_html_e('Crafted with WordPress and the MV Simple theme.', 'mv-simple'); ?></p>
        <?php
        wp_nav_menu([
            'theme_location' => 'footer',
            'container'      => false,
            'menu_class'     => '',
            'fallback_cb'    => '__return_empty_string',
        ]);
        ?>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
