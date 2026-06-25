<?php
/**
 * Used automatically for page with slug "administrative-assistant". Edit content in template-parts/content-role-administrative-assistant.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-role', 'administrative-assistant' ); ?>
</main>
<?php
endwhile;
get_footer();
