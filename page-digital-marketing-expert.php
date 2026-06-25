<?php
/**
 * Used automatically for page with slug "digital-marketing-expert". Edit content in template-parts/content-role-digital-marketing-expert.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-role', 'digital-marketing-expert' ); ?>
</main>
<?php
endwhile;
get_footer();
