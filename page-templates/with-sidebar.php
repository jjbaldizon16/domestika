<?php
/**
 * Template Name: With Sidebar
 * 
 */
?>

<?php get_header(); ?>
<main id="main" class="columns large-9 small-12">
	<?php get_template_part( 'template-parts/loops' ); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>