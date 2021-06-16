<?php

function domestika_setup_theme() {
  $supports = [

    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',

  ];
  add_theme_support( 'html5', $supports );

  add_theme_support( 'title-tag' );

  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'automatic-feed-links' );

  $GLOBALS['content_width'] = 1130;

  load_theme_textdomain( 'domestika', get_template_directory() . '/languages' );

  add_image_size( 'featured-medium', 870, 500, true );
  add_image_size( 'featured-page', 1920, 400, true );

}
add_action( 'after_setup_theme', 'domestika_setup_theme' );

function domestika_enqueue_scripts() {
  wp_enqueue_style( 'domestika-style', '/wp-content/themes/domestika/style.css');
}

add_action( 'wp_enqueue_scripts', 'domestika_enqueue_scripts');

function domestika_setup_widgets() {
register_sidebar(
  [

    'id' => 'sidebar-widgets',
    'name' => 'Sidebar Widgets',
    'description' => 'Drag widgets to this sidebar container',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h4 class="widget-title h5">',
    'after_title' => '</h4>'




  ]

);

register_sidebar(
  [

    'id' => 'footer-widgets',
    'name' => 'Footer Widgets',
    'description' => 'Drag widgets to this footer container',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h4 class="widget-title h5">',
    'after_title' => '</h4>'




  ]

);

}

add_action( 'widgets_init', 'domestika_setup_widgets' );

function domestika_register_menus() {

   register_nav_menu( 'main-menu', __( 'Main menu', 'domestika' ) );
   register_nav_menu( 'mobile_menu', __( 'Mobile menu', 'domestika' ) );

}

add_action( 'after_setup_theme', 'domestika_register_menus' );

add_filter( 'excerpt_more', 'domestika_excerpt_more');

function domestika_excerpt_more( $more ) {

return $more . ' <p class="read-more"><a class="button" href="' . get_permalink() . '">' . __( 'Read More', 'domestika' ) . '</a></p>';

}


