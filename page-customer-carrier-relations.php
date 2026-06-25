<?php
/**
 * Used automatically for page with slug "customer-carrier-relations". Edit content in template-parts/content-role-customer-carrier-relations.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-role', 'customer-carrier-relations' ); ?>
</main>
<?php
endwhile;
get_footer();
