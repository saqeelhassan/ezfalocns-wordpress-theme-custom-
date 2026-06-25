<?php
/**
 * Used for page with slug "sales-and-business-development" (e.g. title "Sales & Business Development").
 * Same content as sales-business-development. Edit content in template-parts/content-role-sales-business-development.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-role', 'sales-business-development' ); ?>
</main>
<?php
endwhile;
get_footer();
