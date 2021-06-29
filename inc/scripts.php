<?php

/**
 * Añade todos los scripts y estilos necesarios para el funcionamiento del tema.
 */
function domestika_enqueue_scripts() {
	wp_enqueue_style( 'domestika-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'domestika_enqueue_scripts' );
