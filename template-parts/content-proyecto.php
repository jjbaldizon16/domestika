<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ): ?>
    <div class="featured-image">
        <?php the_post_thumbnail( 'full' ); ?>
    </div>
  <?php endif; ?>

  <div class="post-content">

    <?php if ( is_single() ): ?>
      <h1 class="post-title"><?php the_title(); ?></h1>
    <?php else: ?>
      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>

    <?php if ( get_post_field( 'cliente' ) ): ?>
      <div class="proyecto-cliente">
        <?php _e( 'Client:', 'domestika' ); ?> <span class="cliente-value"><?php echo get_post_field( 'cliente' ); ?></span>
      </div>
    <?php endif; ?>

    <?php if ( is_single() ): ?>
      <?php the_content(); ?>
      <?php wp_link_pages(); ?>
    <?php else: ?>
      <?php the_excerpt(); ?>
    <?php endif; ?>
  </div>
</section>

            