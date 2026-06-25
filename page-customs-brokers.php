<?php
/**
 * Used automatically for page with slug "customs-brokers". Edit content in template-parts/content-industry-customs-brokers.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-industry', 'customs-brokers' ); ?>
</main>
<?php
endwhile;
get_footer();
