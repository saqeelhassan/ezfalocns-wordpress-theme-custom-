<?php
/**
 * Services page. Lists all EZ Falcons role/service pages.
 * Create a WordPress Page with slug "service" to use this template, or assign via Page Attributes.
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-full', 'service' ); ?>
</main>
<?php
endwhile;
get_footer();
