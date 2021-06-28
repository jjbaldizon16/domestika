<?php

/**
 * Configuración básica del tema
 */
function domestika_setup_theme() {
	// HTML5 para los formularios de búsqueda, comentarios, galerías...
	$supports = [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	];
	add_theme_support( 'html5', $supports );

	// Soporte para etiqueta <title> dentro de <head>
	add_theme_support( 'title-tag' );

	// Soporte para imágenes destacadas
	add_theme_support( 'post-thumbnails' );

	// Soporte para Feed automático para posts y comentarios
	add_theme_support( 'automatic-feed-links' );

	// Anchura del contenido. Sirve especialmente para vídeos embebidos.
	$GLOBALS['content_width'] = 1130;

	// Soporte para internacionalización
	load_theme_textdomain( 'domestika', get_template_directory() . '/languages' );

	// Registro de tamaños de imágenes
	add_image_size( 'featured-medium', 870, 500, true );
	add_image_size( 'featured-page', 1920, 400, true );
}
add_action( 'after_setup_theme', 'domestika_setup_theme' );

/**
 * Añade todos los scripts y estilos necesarios para el funcionamiento del tema.
 */
function domestika_enqueue_scripts() {
	wp_enqueue_style( 'domestika-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'domestika_enqueue_scripts' );

/**
 * Registra las áreas de widgets
 */
function domestika_setup_widgets() {
	register_sidebar(
		[
			'id'            => 'sidebar-widgets',
			'name'          => __( 'Sidebar widgets', 'domestika' ),
			'description'   => __( 'Drag widgets to this sidebar container.', 'domestika' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title h5">',
			'after_title'   => '</h4>',
		]
	);

	register_sidebar(
		[
			'id'            => 'footer-widgets',
			'name'          => __( 'Footer widgets', 'domestika' ),
			'description'   => __( 'Drag widgets to this footer container', 'domestika' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title h5">',
			'after_title'   => '</h4>',
		]
	);
}

add_action( 'widgets_init', 'domestika_setup_widgets' );

/**
 * Registra los menús de navegación
 */
function domestika_register_menus() {
	register_nav_menu( 'main-menu', __( 'Main menu', 'domestika' ) );
	register_nav_menu( 'mobile-menu', __( 'Mobile menu', 'domestika' ) );
}
add_action( 'after_setup_theme', 'domestika_register_menus' );

/**
 * Cambia el contenido del extracto por un botón
 *
 * @param $more
 *
 * @return string
 */
function domestika_excerpt_more( $more ) {
	return $more . ' <p class="read-more"><a class="button" href="' . get_permalink() . '">' . __( 'Read more', 'domestika' ) . '</a></p>';
}
add_filter( 'excerpt_more', 'domestika_excerpt_more' );
