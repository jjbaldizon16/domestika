<?php get_header(); ?>
<main id="main" class="columns large-9 small-12">
	<?php get_template_part( 'template-parts/loops' ); ?>
	<?php if ( comments_open() || have_comments() ): ?>
	<?php comments_template(); ?>
	<?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>