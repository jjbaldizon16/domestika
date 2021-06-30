<?php get_header(); ?>
<main id="main" class="columns large-<?php echo is_page() ? 12 : 9 ?> small-12">
   
      <?php if ( is_archive() ): ?>
  
     <h1 class="page-title"> <?php the_archive_title(); ?> </h1>
	 <div class="taxonomy-description"> <?php the_archive_description(); ?> </div>

      <?php endif; ?>  

	  <?php if ( is_search() ): ?>

       <h1 class="page-title">
        <?php _e( 'Search results for:', 'domestika' ); ?> <?php echo get_search_query(); ?>
	   </h1> 

	  <?php endif; ?>
	  <?php if ( is_author() ): ?>
		<div class="author-info">
		<h2 class="author-heading"> <?php _e( 'Posts published by', 'domestika'); ?> </h2>
	     
		<div class="author-avatar">
       <?php echo get_avatar( get_the_author_meta( 'user_email' ), 100 ); ?>
	  </div>
       <div class="author-description">
		   <h3 class="author-title"> <?php the_author(); ?> </h3>
		   <p class="author-bio"><?php get_the_author_meta( 'description' ) ?></p>

	   </div> 
	   </div>
		
		<?php endif; ?>
	    

	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : the_post() ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<?php if ( is_home() && is_sticky() ): ?>
						<div class="featured-tag">
							<?php _e( 'Featured', 'domestika' ); ?>
						</div>
					<?php endif; ?>

					<?php if ( has_post_thumbnail() ): ?>
						<div class="featured-image">
							<?php if ( is_page() ): ?>
								<?php the_post_thumbnail( 'featured-page' ); ?>
							<?php else: ?>
								<?php the_post_thumbnail( 'featured-medium' ); ?>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<p class="post-categories"><?php echo get_the_category_list( ' / ' ); ?></p>
					<?php if ( is_single() ): ?>
						<h1 class="post-title"><?php the_title(); ?></h1>
					<?php else: ?>
						<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php endif; ?>
				</header>
				<div class="entry-content">
					<time class="updated" datetime="<?php echo get_the_time( 'c' ); ?>">
						<?php the_date(); ?>
					</time>

					<span class="byauthor">
						| <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a>
					</span>
					<?php if ( is_single() ): ?>
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					<?php else: ?>
						<?php the_excerpt(); ?>
					<?php endif; ?>
				</div>
				<footer>
					<ul class="post-tags"><?php the_tags( '<li>', '</li><li>', '</li>' ); ?></ul>
					<span class="edit-link"><?php edit_post_link( __( '(Edit)', 'domestika' ) ); ?></span>
				</footer>
			</article>
		<?php endwhile; ?>

		<nav id="post-nav" class="row">
			<div class="columns small-6 post-previous"><?php previous_posts_link(); ?></div>
			<div class="columns small-6 post-next text-right"><?php next_posts_link(); ?></div>
		</nav>
	<?php else: ?>
		<header class="page-header">
			<h1 class="not-found-title"><?php _e( 'Nothing Found', 'domestika' ); ?></h1>
		</header>
	<?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
