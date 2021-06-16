<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">

	<div class="site-branding">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</div>

	<div class="navigation-main-menu">
		<div class="navigation-wrap">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php if ( has_nav_menu( 'main-menu' ) ): ?>
					<?php
					wp_nav_menu(
						[
							'theme_location' => 'main-menu',
							'menu_id'        => 'main-menu',
						]
					);
					?>
				<?php endif; ?>
				<?php if ( has_nav_menu( 'mobile-menu' ) ): ?>
					<?php
					wp_nav_menu(
						[
							'theme_location' => 'mobile-menu',
							'menu_id'        => 'mobile-menu',
						]
					);
					?>
				<?php endif; ?>
		</div>
	</div>

</header>

<div id="content" class="row">
	<main id="main" class="columns large-9 small-12">
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
	<?php if ( is_active_sidebar( 'sidebar-widgets' ) ): ?>
		<div class="sidebar columns large-3 small-12">
			<aside class="sidebar">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
			</aside>
		</div>
	<?php endif; ?>
</div>

<footer class="footer" id="page-footer" role="contentinfo">
	<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
		<div class="footer-container row">
			<div class="sidebar columns small-12">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="site-info row">
		<div class="columns small-12">
			<?php _e( 'Made with WordPress', 'domestika' ); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
