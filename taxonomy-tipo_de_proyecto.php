<?php get_header(); ?>
<main id="main" class="columns large-12 small-12">

	<h1 class="page-title"><?php _e( 'Portfolio', 'domestika' ); ?>: <?php single_term_title(); ?></h1>

	<?php get_template_part( 'template-parts/loops' ); ?>

</main>
<?php get_footer(); ?>