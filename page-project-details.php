<?php
/**
 * Page with slug "project-details" (Pricing). Edit in Gutenberg; or edit template-parts/content-full-project-details.php when content is empty.
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-full', 'project-details' ); ?>
</main>
<?php
endwhile;
get_footer();
