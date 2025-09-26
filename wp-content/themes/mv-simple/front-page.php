<?php
/**
 * Front page template.
 *
 * @package MV_Simple
 */

get_header();
?>
<section class="hero">
    <h2 class="hero__title"><?php echo esc_html(get_theme_mod('mv_simple_hero_title', __('Beautiful WordPress Experiences', 'mv-simple'))); ?></h2>
    <p class="hero__subtitle"><?php echo esc_html(get_theme_mod('mv_simple_hero_subtitle', __('Launch marketing sites, publish content, and tell your story with a clean, modern layout that focuses on readability.', 'mv-simple'))); ?></p>
    <a class="hero__cta" href="<?php echo esc_url(get_theme_mod('mv_simple_hero_button_url', '#primary-content')); ?>"><?php echo esc_html(get_theme_mod('mv_simple_hero_button_text', __('Explore the site', 'mv-simple'))); ?></a>
</section>
<main id="primary-content" class="content-area">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', get_post_type()); ?>
        <?php endwhile; ?>
        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
</main>
<?php get_footer();
