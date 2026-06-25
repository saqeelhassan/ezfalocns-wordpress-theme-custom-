<?php
/**
 * Used automatically for page with slug "documentation-expert". Edit content in template-parts/content-role-documentation-expert.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-role', 'documentation-expert' ); ?>
</main>
<?php
endwhile;
get_footer();
