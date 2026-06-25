<?php
/**
 * Used automatically for page with slug "warehousing-distribution-companies". Edit content in template-parts/content-industry-warehousing-distribution-companies.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-industry', 'warehousing-distribution-companies' ); ?>
</main>
<?php
endwhile;
get_footer();
