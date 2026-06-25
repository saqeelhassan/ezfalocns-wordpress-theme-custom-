<?php
/**
 * Template Name: Accounting & Finance
 * Used for page with slug "logistics-accounting-financial". Edit content in template-parts/content-full-logistics-accounting-financial.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-full', 'logistics-accounting-financial' ); ?>
</main>
<?php
endwhile;
get_footer();
