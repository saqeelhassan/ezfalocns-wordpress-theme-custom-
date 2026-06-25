<?php
/**
 * Page with slug "contact". Edit in Gutenberg; or edit template-parts/content-full-contact.php when content is empty.
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-full', 'contact' ); ?>
</main>
<?php
endwhile;
get_footer();
