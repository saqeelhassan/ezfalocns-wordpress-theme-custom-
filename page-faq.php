<?php
/**
 * Page with slug "faq". Edit in Gutenberg; or edit template-parts/content-full-faq.php when content is empty.
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php
    $post_content = get_the_content();
    if ( ! empty( trim( strip_tags( $post_content ) ) ) ) {
        the_content();
    } else {
        get_template_part( 'template-parts/content-full', 'faq' );
    }
    ?>
</main>
<?php
endwhile;
get_footer();
