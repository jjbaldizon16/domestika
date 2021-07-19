<?php

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

/**
 * Cambia la longitud del extracto (Excerpt) para los proyectos del portfolio
 *
 * @param int $length Número inicial de palabras a mostrar
 *
 * @return int Número final de palabras a mostrar en el extracto
 */
function domestika_excerpt_length( $length ) {
	if ( get_post_type() === 'proyecto' ) {
		return 20;
	}

	return $length;
}
add_filter( 'excerpt_length', 'domestika_excerpt_length' );