<?php
/**
 * Used automatically for page with slug "trucking-companies-owner-operators". Edit content in template-parts/content-industry-trucking-companies-owner-operators.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-industry', 'trucking-companies-owner-operators' ); ?>
</main>
<?php
endwhile;
get_footer();
