<?php

/**
 * Añade una imagen de fondo a div.site-branding si hay elegida una imagen de cabcera
 */
function domestika_set_header_image() {
	if ( ! has_custom_header() ) {
		return;
	}

	$header = get_custom_header();
	$css    = '
		.site-branding {
				background:url(' . esc_url( $header->url ) . ') no-repeat center center;
				background-size: cover;
			}
		';

	wp_add_inline_style( 'domestika-style', $css );
}
add_action( 'wp_enqueue_scripts', 'domestika_set_header_image' );


