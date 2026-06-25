<?php
/**
 * Used automatically for page with slug "account-manager". Edit content in template-parts/content-role-account-manager.php
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-role', 'account-manager' ); ?>
</main>
<?php
endwhile;
get_footer();
