<?php
/**
 * Template part for displaying a message when no posts are found.
 *
 * @package MV_Simple
 */
?>
<section class="post-card">
    <header class="post-card__header">
        <h2 class="post-card__title"><?php esc_html_e('Nothing here yet', 'mv-simple'); ?></h2>
    </header>
    <div class="post-card__excerpt">
        <p><?php esc_html_e('Ready to publish your first post? Start writing in the WordPress dashboard.', 'mv-simple'); ?></p>
        <?php if (current_user_can('publish_posts')) : ?>
            <p><a class="hero__cta" href="<?php echo esc_url(admin_url('post-new.php')); ?>"><?php esc_html_e('Add a new post', 'mv-simple'); ?></a></p>
        <?php endif; ?>
    </div>
</section>
