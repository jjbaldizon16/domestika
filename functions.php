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

	// Cabecera personalizada
	$header_settings = [
		'width' => 1500,
		'height' => 350,
		'flex-height' => false,
		'flex-width' => false,
		'header-text' => false,
	];
	add_theme_support( 'custom-header', $header_settings );

	// Logotipo personalizado
	$logo_defaults = [
		'height'      => 150,
		'width'       => 150,
		'flex-height' => false,
		'flex-width'  => false,
		'header-text' => [ 'site-title', 'site-description' ],
	];
	add_theme_support( 'custom-logo', $logo_defaults );

	// Fondo personalizado
	$background_defaults = [
		'default-color'    => '#fefefe',
	];
	$background_settings = [
       'default-color' => '#fefefe',
	];
	add_theme_support( 'custom-background', $background_defaults );
}
add_action( 'after_setup_theme', 'domestika_setup_theme' );

require 'inc/menus.php';

require 'inc/widgets.php';

require 'inc/templates.php';

require 'inc/scripts.php';

require 'inc/costumizer.php';

require 'inc/editor.php';


