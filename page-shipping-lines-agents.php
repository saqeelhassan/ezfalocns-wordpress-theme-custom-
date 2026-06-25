<?php
/**
 * Used automatically for page with slug "shipping-lines-agents". Edit content in template-parts/content-industry-shipping-lines-agents.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-industry', 'shipping-lines-agents' ); ?>
</main>
<?php
endwhile;
get_footer();
