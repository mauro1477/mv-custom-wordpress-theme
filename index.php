<?php
/**
 * Main template file.
 *
 * @package MV_Custom_Theme
 */

get_header();
?>
<section class="section">
    <div class="container">
        <h1 class="page-title"><?php single_post_title(); ?></h1>
        <?php if ( have_posts() ) : ?>
            <div class="blog-preview">
                <div class="blog-preview__grid">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article <?php post_class(); ?>>
                            <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28, '…' ) ); ?></p>
                            <a class="button button--ghost" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue reading', 'mv-custom-theme' ); ?></a>
                        </article>
                        <?php
                    endwhile;
                    ?>
                </div>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'No posts found. Try creating your first article!', 'mv-custom-theme' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
