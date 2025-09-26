<?php
/**
 * Template for displaying single posts.
 *
 * @package MV_Custom_Theme
 */

get_header();
?>
<section class="section">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1><?php the_title(); ?></h1>
                        <p><time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></p>
                    </header>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    <footer class="entry-footer">
                        <?php the_tags( '<span class="tags">', ' ', '</span>' ); ?>
                    </footer>
                </article>
                <?php
                the_post_navigation();
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            endwhile;
        endif;
        ?>
    </div>
</section>
<?php
get_footer();
