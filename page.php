<?php
/**
 * Template for displaying pages.
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
                    </header>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
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
