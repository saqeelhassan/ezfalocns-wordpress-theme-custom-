<?php
/**
 * Used automatically for page with slug "freight-forwarders". Edit content in template-parts/content-industry-freight-forwarders.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-industry', 'freight-forwarders' ); ?>
</main>
<?php
endwhile;
get_footer();
