<?php
/**
 * Page with slug "operation-manager". Edit in Gutenberg; or edit template-parts/content-role-operation-manager.php when content is empty.
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-role', 'operation-manager' ); ?>
</main>
<?php
endwhile;
get_footer();
