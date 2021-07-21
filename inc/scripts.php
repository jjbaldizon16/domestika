<?php

/**
 * Añade todos los scripts y estilos necesarios para el funcionamiento del tema.
 */
function domestika_enqueue_scripts() {
	wp_enqueue_style( 'domestika-style', get_stylesheet_uri() );

	if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_post_type_archive( 'proyecto' ) || is_tax( 'tipo_de_proyecto' ) ) {
		wp_enqueue_script( 'scrollify', get_template_directory_uri() . '/assets/js/scrollify.js', [ 'jquery' ] );
		wp_enqueue_script( 'domestika-init', get_template_directory_uri() . '/assets/js/init.js', [ 'jquery', 'scrollify' ] );
	}

}
add_action( 'wp_enqueue_scripts', 'domestika_enqueue_scripts' );



