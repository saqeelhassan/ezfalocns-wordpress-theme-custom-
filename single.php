<?php
/**
 * Single post template. Used when viewing a blog post. Links back to the blog listing page.
 */
get_header();
$blog_url = function_exists( 'fz_blog_list_url' ) ? fz_blog_list_url() : home_url( '/blog/' );
?>
<main>
    <section class="section-padding fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'fz-single-post' ); ?>>
                            <div class="entry-meta mb-3">
                                <span class="posted-on"><i class="fa-regular fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
                                <?php if ( get_the_author() ) : ?>
                                    <span class="byline ms-3"><i class="fa-regular fa-user"></i> <?php the_author(); ?></span>
                                <?php endif; ?>
                                <?php
                                $categories = get_the_category();
                                if ( $categories ) :
                                    echo ' <span class="cat-links ms-3"><i class="fa-regular fa-folder"></i> ';
                                    echo esc_html( $categories[0]->name );
                                    echo '</span>';
                                endif;
                                ?>
                            </div>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail mb-4">
                                    <?php the_post_thumbnail( 'large', [ 'class' => 'img-fluid w-100' ] ); ?>
                                </div>
                            <?php endif; ?>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                            <div class="mt-5 pt-4 border-top">
                                <a href="<?php echo esc_url( $blog_url ); ?>" class="theme-btn"><i class="fa-solid fa-arrow-left"></i> Back to Blog</a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
