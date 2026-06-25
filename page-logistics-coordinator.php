<?php
/**
 * Used automatically for page with slug "logistics-coordinator". Edit content in template-parts/content-role-logistics-coordinator.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-role', 'logistics-coordinator' ); ?>
</main>
<?php
endwhile;
get_footer();
