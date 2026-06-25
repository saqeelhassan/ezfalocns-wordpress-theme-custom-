<?php
/**
 * Used automatically for page with slug "truck-dispatcher". Edit content in template-parts/content-role-dispatch-manager.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-role', 'dispatch-manager' ); ?>
</main>
<?php
endwhile;
get_footer();
