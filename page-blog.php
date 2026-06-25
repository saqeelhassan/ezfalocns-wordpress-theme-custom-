<?php
/**
 * Template Name: Blog
 * Displays the latest posts. Create a page (e.g. slug "blog"), assign this template, and add posts via Dashboard → Posts → Add New.
 */
get_header();
$t       = function_exists( 'fz_assets' ) ? fz_assets() : get_template_directory_uri() . '/assets';
$paged   = max( 1, (int) get_query_var( 'paged' ), (int) get_query_var( 'page' ) );
$per_page = get_option( 'posts_per_page', 9 );
$blog_query = new WP_Query( [
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => $per_page,
	'paged'          => $paged,
	'orderby'        => 'date',
	'order'          => 'DESC',
] );
?>
<main>
    <?php
    // Optional intro from the Blog page content (edit in Dashboard).
    while ( have_posts() ) :
        the_post();
        if ( get_the_content() ) {
            echo '<section class="section-padding pt-0 fix"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 entry-content">';
            the_content();
            echo '</div></div></div></section>';
        }
        break;
    endwhile;
    wp_reset_postdata();
    ?>

    <section class="fz-blog-section section-padding fix">
        <div class="container">
            <div class="fz-blog-grid-wrapper">
                <?php if ( $blog_query->have_posts() ) : ?>
                    <div class="row g-4 fz-blog-grid">
                        <?php
                        $delay = 0;
                        while ( $blog_query->have_posts() ) :
                            $blog_query->the_post();
                            $delay += 0.15;
                            $post_id   = get_the_ID();
                            $post_link = get_permalink( $post_id );
                            if ( ! $post_link ) {
                                $post_link = home_url( '/?p=' . (int) $post_id );
                            }
                            $thumb_id  = get_post_thumbnail_id();
                            $thumb_url = $thumb_id ? wp_get_attachment_image_url( $thumb_id, 'medium_large' ) : ( $t . '/img/news/news-1.webp' );
                            $categories = get_the_category();
                            $cat_name   = $categories ? esc_html( $categories[0]->name ) : 'Blog';
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <article class="fz-blog-card wow fadeInUp" data-wow-delay="<?php echo esc_attr( (string) $delay ); ?>s">
                                    <a href="<?php echo esc_url( $post_link ); ?>" class="fz-blog-card__img-link">
                                        <span class="fz-blog-card__img-wrap">
                                            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute( [ 'echo' => false ] ); ?>" class="fz-blog-card__img">
                                        </span>
                                        <span class="fz-blog-card__cat"><?php echo esc_html( $cat_name ); ?></span>
                                    </a>
                                    <div class="fz-blog-card__body">
                                        <time class="fz-blog-card__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                            <i class="fa-regular fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?>
                                        </time>
                                        <h3 class="fz-blog-card__title"><a href="<?php echo esc_url( $post_link ); ?>"><?php the_title(); ?></a></h3>
                                        <p class="fz-blog-card__excerpt"><?php echo wp_kses_post( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
                                        <a href="<?php echo esc_url( $post_link ); ?>" class="fz-blog-card__btn theme-btn"><?php esc_html_e( 'Read more', 'fz-falcans' ); ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </article>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php
                    $total = $blog_query->max_num_pages;
                    if ( $total > 1 ) :
                        $blog_page_id = get_queried_object_id();
                        $base = get_permalink( $blog_page_id );
                        $base = trailingslashit( $base ) . 'page/%#%/';
                        echo '<nav class="fz-blog-pagination mt-5" aria-label="Blog pagination">';
                        echo paginate_links( [
                            'base'      => $base,
                            'format'    => '',
                            'total'     => $total,
                            'current'   => $paged,
                            'prev_text' => '<i class="fa-solid fa-arrow-left"></i> <span>Prev</span>',
                            'next_text' => '<span>Next</span> <i class="fa-solid fa-arrow-right"></i>',
                        ] );
                        echo '</nav>';
                    endif;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="fz-blog-empty text-center py-5">
                        <p class="mb-0">No posts yet. Add your first post from <strong>Dashboard → Posts → Add New</strong>.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
