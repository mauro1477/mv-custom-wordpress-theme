<?php
/**
 * Template part for displaying posts.
 *
 * @package MV_Simple
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
    <header class="post-card__header">
        <div class="post-card__meta">
            <span class="post-card__date"><?php echo esc_html(get_the_date()); ?></span>
            <?php if (get_post_type() === 'post') : ?>
                <span class="post-card__categories"><?php the_category(', '); ?></span>
            <?php endif; ?>
        </div>
        <?php the_title('<h2 class="post-card__title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
    </header>

    <div class="post-card__content">
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-card__thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large'); ?>
                </a>
            </div>
        <?php endif; ?>

        <div class="post-card__excerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article>
