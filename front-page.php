<?php
/**
 * Front page template.
 *
 * @package MV_Custom_Theme
 */

global $post;

get_header();
?>
<section class="hero">
    <div class="container">
        <span class="hero__badge"><?php esc_html_e( 'Modern WordPress Theme', 'mv-custom-theme' ); ?></span>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
        <div class="cta-group">
            <a class="button button--primary" href="#features"><?php esc_html_e( 'Explore Features', 'mv-custom-theme' ); ?></a>
            <a class="button button--ghost" href="#blog"><?php esc_html_e( 'Read our Blog', 'mv-custom-theme' ); ?></a>
        </div>
    </div>
</section>

<section id="features" class="section">
    <div class="container">
        <h2><?php esc_html_e( 'Everything you need for a polished site', 'mv-custom-theme' ); ?></h2>
        <div class="features">
            <article class="feature">
                <span class="feature__icon" aria-hidden="true">⚡</span>
                <h3><?php esc_html_e( 'Lightning Fast', 'mv-custom-theme' ); ?></h3>
                <p><?php esc_html_e( 'Optimized styles and minimal scripts keep your pages loading quickly.', 'mv-custom-theme' ); ?></p>
            </article>
            <article class="feature">
                <span class="feature__icon" aria-hidden="true">🧩</span>
                <h3><?php esc_html_e( 'Block Ready', 'mv-custom-theme' ); ?></h3>
                <p><?php esc_html_e( 'Designed to work seamlessly with the WordPress block editor for flexible layouts.', 'mv-custom-theme' ); ?></p>
            </article>
            <article class="feature">
                <span class="feature__icon" aria-hidden="true">🎨</span>
                <h3><?php esc_html_e( 'Custom Branding', 'mv-custom-theme' ); ?></h3>
                <p><?php esc_html_e( 'Add your logo and colors to craft a site that feels uniquely yours.', 'mv-custom-theme' ); ?></p>
            </article>
            <article class="feature">
                <span class="feature__icon" aria-hidden="true">🔒</span>
                <h3><?php esc_html_e( 'Secure Foundation', 'mv-custom-theme' ); ?></h3>
                <p><?php esc_html_e( 'Built with WordPress best practices so your content stays safe.', 'mv-custom-theme' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2><?php esc_html_e( 'What people are saying', 'mv-custom-theme' ); ?></h2>
        <div class="testimonials">
            <article class="testimonial">
                <p class="testimonial__quote">“<?php esc_html_e( 'The MV theme helped us launch our site in a weekend. The layout is gorgeous right out of the box.', 'mv-custom-theme' ); ?>”</p>
                <div class="testimonial__author">
                    <span class="testimonial__avatar" aria-hidden="true">AL</span>
                    <div>
                        <strong><?php esc_html_e( 'Alex Lee', 'mv-custom-theme' ); ?></strong><br>
                        <small><?php esc_html_e( 'Creative Director, Northwind Studio', 'mv-custom-theme' ); ?></small>
                    </div>
                </div>
            </article>
            <article class="testimonial">
                <p class="testimonial__quote">“<?php esc_html_e( 'A perfect balance of design and usability. Our clients love how easy it is to navigate.', 'mv-custom-theme' ); ?>”</p>
                <div class="testimonial__author">
                    <span class="testimonial__avatar" aria-hidden="true">JP</span>
                    <div>
                        <strong><?php esc_html_e( 'Jordan Patel', 'mv-custom-theme' ); ?></strong><br>
                        <small><?php esc_html_e( 'Founder, Horizon Ventures', 'mv-custom-theme' ); ?></small>
                    </div>
                </div>
            </article>
            <article class="testimonial">
                <p class="testimonial__quote">“<?php esc_html_e( 'Clean code and thoughtful details make this our go-to starter theme for new builds.', 'mv-custom-theme' ); ?>”</p>
                <div class="testimonial__author">
                    <span class="testimonial__avatar" aria-hidden="true">RM</span>
                    <div>
                        <strong><?php esc_html_e( 'Riley Morgan', 'mv-custom-theme' ); ?></strong><br>
                        <small><?php esc_html_e( 'Lead Developer, Pixel Forge', 'mv-custom-theme' ); ?></small>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section id="blog" class="section">
    <div class="container">
        <h2><?php esc_html_e( 'Latest insights', 'mv-custom-theme' ); ?></h2>
        <div class="blog-preview">
            <div class="blog-preview__grid">
                <?php
                $featured_posts = new WP_Query(
                    array(
                        'posts_per_page'      => 3,
                        'ignore_sticky_posts' => true,
                    )
                );

                if ( $featured_posts->have_posts() ) :
                    while ( $featured_posts->have_posts() ) :
                        $featured_posts->the_post();
                        ?>
                        <article>
                            <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '…' ) ); ?></p>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p><?php esc_html_e( 'Once you start publishing posts, they will appear here automatically.', 'mv-custom-theme' ); ?></p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
