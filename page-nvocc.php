<?php
/**
 * Used automatically for page with slug "nvocc". Edit content in template-parts/content-industry-nvocc.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-industry', 'nvocc' ); ?>
</main>
<?php
endwhile;
get_footer();
